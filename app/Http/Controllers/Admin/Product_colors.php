<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product_color;
class Product_colors extends Controller
{
    public function index()
    {
        $list = Product_color::paginate(10);
        return view('admin.product_colors.index', ['list' => $list]);
    }

    public function add()
    { }

    public function edit()
    { }
} 