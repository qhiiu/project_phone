<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Color;
class Colors extends Controller
{
    public function index()
    {
        $list = Color::paginate(10);
        return view('admin.colors.index', ['list' => $list]);
    }

    public function add()
    { }

    public function edit()
    { }
} 