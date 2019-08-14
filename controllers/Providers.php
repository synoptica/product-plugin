<?php namespace Synoptica\Product\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Providers extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Synoptica.Product', 'main-menu-item', 'side-menu-item3');
    }
}
