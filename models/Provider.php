<?php namespace Synoptica\Product\Models;

use Model;

/**
 * Model
 */
class Provider extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'providers';

    public $belongsToMany = [
        'products' => 'Synoptica\Product\Models\Product'
    ];
}
