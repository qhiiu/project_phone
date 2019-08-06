<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class Users extends Controller
{
    public function index()
    {
        $list = User::paginate(10);
        return view('admin.users.index', ['list' => $list]);
    }

    public function add()
    { 
        echo view('admin.users.add');
    }

    public function edit()
    { }
} 
