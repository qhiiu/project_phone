<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
class Products extends Controller
{
    public function index()
    {
        $list = Product::paginate();
        // $list = Product::all();
        return view('admin.products.index', ['list' => $list]);
    }

    public function add()
    {
        echo view('admin.products.add');
    }

    public function edit()
    { }
}
