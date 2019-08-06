<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News as _News;
class News extends Controller
{
    public function index()
    {
        $list = _News::paginate(5);
        return view('admin.news.index', ['list' => $list]);
    }

    public function add()
    { }

    public function edit()
    { }
} 