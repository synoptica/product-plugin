<?php namespace Synoptica\Product\Models;

use October\Rain\Database\Pivot;

/**
 * User-Role Pivot Model
 */
class ProductProviderPivot extends Pivot
{

    use \October\Rain\Database\Traits\Validation;

    /**
     * @var array Rules
     */
    public $rules = [
//        'clearance_level' => 'required|min:3',
    ];

}