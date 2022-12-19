<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models\Traits;

trait CreatedModifiedBy
{
    /**
     * Boot function from Laravel.
     */
    protected static function bootCreatedModifiedBy()
    {
        // updating created_by_id and modified_by_id when model is created
        static::creating(function ($model) {
            if (!$model->isDirty('created_by_id')) {
                $model->created_by_id = auth()->id();
            }
            if (!$model->isDirty('modified_by_id')) {
                $model->modified_by_id = auth()->id();
            }
        });

        // updating modified_by_id when model is updated
        static::updating(function ($model) {
            if (!$model->isDirty('modified_by_id')) {
                $model->modified_by_id = auth()->id();
            }
        });
    }
}
