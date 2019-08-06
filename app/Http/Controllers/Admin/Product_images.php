<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product_image;
class Product_images extends Controller
{
    public function index()
    {
        $list = Product_image::paginate(10);
        return view('admin.product_images.index', ['list' => $list]);
    }

    public function add()
    { }

    public function edit()
    { }
} 