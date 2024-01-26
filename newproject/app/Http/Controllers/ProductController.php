<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function insertproduct(){
        $category = Category::all();
        return view('insertproduct',['cat'=>$category]);
    }
}
