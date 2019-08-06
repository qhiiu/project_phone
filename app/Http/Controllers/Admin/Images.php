<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Image;
class Images extends Controller
{
    public function index()
    {
        $list = Image::paginate(10);
        return view('admin.images.index', ['list' => $list]);
    }

    public function add()
    { }

    public function edit()
    { }
} 