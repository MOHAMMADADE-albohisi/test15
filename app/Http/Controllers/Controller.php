<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function test()
    {
        $product = Product::create([
            'name'  =>  'Home Brixton Faux Leather Armchair',
            'price' =>  199.99,
        ]);

        $categories = Category::find([2, 3]); // Modren Chairs, Home Chairs
        $product->categories()->attach($categories);
        # code...
    }
}
