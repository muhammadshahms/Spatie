<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class IndexController extends Controller
{
    public function index()
    {   
        $users = User::all();
        $roles = Role::all();
        $permissions = Permission::all()->sortBy('name');
    
        // Pass all the variables in a single compact statement
        return view('admin.index', compact('roles', 'users', 'permissions'));
    }
    
}
