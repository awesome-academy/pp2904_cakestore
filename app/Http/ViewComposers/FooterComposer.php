<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\ProductType;

class FooterComposer
{
    public $product_type= [];

    public function __construct()
    {
        $this->product_type = ProductType::all();
    }
    
    public function compose(View $view)
    {
        $view->with('product_type', $this->product_type);
    }
}
