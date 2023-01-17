<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models\Traits;

use Illuminate\Support\{
    Arr,
    Str
};

trait Auditable
{
    /**
     * The event isAuditable instance.
     *
     * @var bool
     */
    protected static $isAuditable = true;

    /**
     * Get the event isAuditable instance.
     *
     * @return bool
     */
    public static function getIsAuditable()
    {
        return static::$isAuditable;
    }

    /**
     * Set the event isAuditable instance.
     *
     * @param  bool $isAuditable
     * @return void
     */
    public static function setIsAuditable(bool $isAuditable)
    {
        static::$isAuditable = $isAuditable;
    }

    /**
     * Unset the event isAuditable for models.
     *
     * @return void
     */
    public static function unsetIsAuditable()
    {
        static::$isAuditable = null;
    }

    /**
     * Execute a callback without auditable.
     *
     * @param  callable $callback
     * @return mixed
     */
    public static function withoutAuditable(callable $callback)
    {
        $isAuditable = static::getIsAuditable();

        if (!is_null($isAuditable)) {
            static::setIsAuditable(false);
        }

        try {
            return $callback();
        } finally {
            if (!is_null($isAuditable)) {
                static::setIsAuditable($isAuditable);
            }
        }
    }

    /**
     * Get the auditModel associated with the model.
     *
     * @return string
     */
    public function getAuditModel()
    {
        return $this->auditModel ?? Str::replaceLast(
            class_basename($this),
            Str::plural(class_basename($this)) . 'Audit',
            get_class($this)
        );
    }

    /**
     * Set the auditModel associated with the model.
     *
     * @param string $auditModel
     *
     * @return $this
     */
    public function setAuditModel($auditModel)
    {
        $this->auditModel = $auditModel;

        return $this;
    }

    /**
     * Boot function from Laravel.
     */
    protected static function bootAuditable()
    {
        // Creating audit log on when bean is created
        static::created(function ($model) {
            if (!static::getIsAuditable()) {
                return;
            }

            $auditModel = $model->getAuditModel();
            if (!$auditModel) {
                return;
            }

            $request = uniqFingerprint();

            $attributes = Arr::except($model->getAttributes(), ['created_at', 'updated_at']);

            foreach ($attributes as $attribute => $newValue) {
                $originalValue = null;

                $stringOriginalValue = (string) $originalValue;
                $stringNewValue      = (string) $newValue;

                $log             = new $auditModel;
                $log->parent_id  = $model->getKey();
                $log->field_name = $attribute;
                $log->data_type  = gettype($newValue);
                $log->step       = 1;
                $log->request    = $request;

                if (
                    Str::length($stringOriginalValue) <= 255 &&
                    Str::length($stringNewValue) <= 255
                ) {
                    $log->before_value_string = $stringOriginalValue;
                    $log->after_value_string  = $stringNewValue;
                } else {
                    $log->before_value_text = $stringOriginalValue;
                    $log->after_value_text  = $stringNewValue;
                }
                $log->save();
            }
        });

        // Creating audit log on when bean is updated
        static::updated(function ($model) {
            if (!static::getIsAuditable()) {
                return;
            }

            $auditModel = $model->getAuditModel();
            if (!$auditModel) {
                return;
            }

            $request = uniqFingerprint();

            $changes = Arr::except($model->getChanges(), 'updated_at');

            $lastStep = ((new $auditModel)::whereParentId($model->getKey())->max('step') ?? 0);

            foreach ($changes as $attribute => $newValue) {
                $originalValue = $model->getOriginal($attribute);

                $stringOriginalValue = (string) $originalValue;
                $stringNewValue      = (string) $newValue;

                $log             = new $auditModel;
                $log->parent_id  = $model->getKey();
                $log->field_name = $attribute;
                $log->data_type  = gettype($newValue);
                $log->step       = $lastStep + 1;
                $log->request    = $request;

                if (
                    Str::length($stringOriginalValue) <= 255 &&
                    Str::length($stringNewValue) <= 255
                ) {
                    $log->before_value_string = $stringOriginalValue;
                    $log->after_value_string  = $stringNewValue;
                } else {
                    $log->before_value_text = $stringOriginalValue;
                    $log->after_value_text  = $stringNewValue;
                }
                $log->save();
            }
        });
    }
}
