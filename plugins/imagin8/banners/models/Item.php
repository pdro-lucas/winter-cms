<?php namespace Imagin8\Banners\Models;

use Model;

/**
 * Model
 */
class Item extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    use \Winter\Storm\Database\Traits\Sortable;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'imagin8_banners_items';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'category' => ['Imagin8\Banners\Models\Category']
    ];

    public $attachOne = [
        'image_desktop' => 'System\Models\File',
        'image_tablet' => 'System\Models\File',
        'image_mobile' => 'System\Models\File'
    ];

    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
}
