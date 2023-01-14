<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm\Models;

use Carbon\Carbon;
use Joy\VoyagerCrm\Database\Factories\AosPdfTemplateFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AosPdfTemplate
 *
 * @property string      $id
 * @property string|null $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $modified_by_id
 * @property string|null $created_by
 * @property string|null $description
 * @property Carbon|null $deleted_at
 * @property string|null $assigned_user_id
 * @property bool|null   $active
 * @property string|null $type
 * @property string|null $pdfheader
 * @property string|null $pdffooter
 * @property int|null    $margin_left
 * @property int|null    $margin_right
 * @property int|null    $margin_top
 * @property int|null    $margin_bottom
 * @property int|null    $margin_header
 * @property int|null    $margin_footer
 * @property string|null $page_size
 * @property string|null $orientation
 *
 * @package Joy\VoyagerCrm\Models
 */
class AosPdfTemplate extends Model
{
    use SoftDeletes;
    use Traits\Uuids;
    use Traits\CreatedModifiedBy;
    use Traits\Auditable;
    use HasFactory;

    protected $table     = 'aos_pdf_templates';
    public $incrementing = false;

    protected $casts = [
        'active'        => 'bool',
        'margin_left'   => 'int',
        'margin_right'  => 'int',
        'margin_top'    => 'int',
        'margin_bottom' => 'int',
        'margin_header' => 'int',
        'margin_footer' => 'int'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'name',
        'modified_by_id',
        'created_by_id',
        'description',
        'assigned_user_id',
        'active',
        'type',
        'pdfheader',
        'pdffooter',
        'margin_left',
        'margin_right',
        'margin_top',
        'margin_bottom',
        'margin_header',
        'margin_footer',
        'page_size',
        'orientation'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return AosPdfTemplateFactory::new();
    }
}
