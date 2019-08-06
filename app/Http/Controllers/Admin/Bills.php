<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bill;
class Bills extends Controller
{
    public function index()
    {
        $list = Bill::paginate(10);
        return view('admin.bills.index', ['list' => $list]);
    }

    public function add()
    { 

    }

    public function edit()
    { }
} 