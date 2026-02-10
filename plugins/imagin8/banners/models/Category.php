<?php namespace Imagin8\Banners\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \Winter\Storm\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'imagin8_banners_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'items' => ['Imagin8\Banners\Models\Item', 'order' => 'sort_order asc']
    ];

    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
}
