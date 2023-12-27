<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::whereNotIn('name', ['admin'])->get();
        return view('admin.role.index', compact('roles'));
    }
    public function create()
    {
        return view('admin.role.create');
    }
    public function store(Request $request)
{
    // $validated = $request->validate(['name' => ['required', 'min:3']]);
    
    // // Log validated data for testing
    // Log::info($validated);

    // Role::create($validated);

    // // Log success message for testing
    // Log::info('Role Created successfully.');

    // return redirect()->route('admin.roles.index')->with('message', 'Role Created successfully.');
    $request->validate([
        'name' => 'required|min:3',
    ]);

    $role = new Role(['name' => $request->input('name')]);
    $role->save();

    return redirect()->route('admin.roles.index')->with('message', 'Role created successfully.');
}

}
