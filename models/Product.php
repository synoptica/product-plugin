<?php namespace Synoptica\Product\Models;

use Model;

/**
 * Model
 */
class Product extends Model
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
    public $table = 'products';

    public $belongsTo = [
        'type' => 'Synoptica\Product\Models\Type',
    ];

    public $belongsToMany = [
        'providers' => [
            'Synoptica\Product\Models\Provider',
            'pivot' => ['name', 'descr', 'cost'],
            'table' => 'products_providers',
            'timestamps' => true,
            'pivotModel' => 'Synoptica\Product\Models\ProductProviderPivot',
        ],
    ];

    protected $legacy = 
    [
        'product_type' => 'type_id',
        'product_name' => 'name',
        'product_descr' => 'descr',
        'product_slug' => 'slug',
        'product_class' => 'class',
        'product_price' => 'price',
        'product_price_reseller_a' =>  'price_reseller_a',
        'product_price_reseller_b' => 'price_reseller_b',
        'product_price_reseller_c' => 'price_reseller_c',
        'product_cost' => 'cost',
        'product_photo' => 'photo',
        'product_created_at' => 'created_at',
        'product_updated_at' => 'updated_at',
        'product_enabled' => 'is_enabled'
    ];


    public function ingest($object){

        foreach ($this->legacy as $old => $new){
            if ($new && isset($object->$old)) {
                $this->$new = $object->$old;
            }
        }
    }
}
