<?php

use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail): void {
    $trail->push('Home', route('admin.index'));
});

// users
Breadcrumbs::for('users', function (BreadcrumbTrail $trail): void {
    $trail->parent('home');
    $trail->push('Users', route('admin.users.index'));
});

// users>create
Breadcrumbs::for('create', function (BreadcrumbTrail $trail): void {
    $trail->parent('users');
    $trail->push('Create', route('admin.users.create'));
});

// users>roles
Breadcrumbs::for('roles', function (BreadcrumbTrail $trail, User $user): void {
    $trail->parent('users', $user);
    $trail->push($user->name, route('admin.users.roles', $user));
});


// roles
Breadcrumbs::for('admin.roles.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('home');
    $trail->push('Roles', route('admin.roles.index'));
});

// roles>create
Breadcrumbs::for('admin.roles.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin.roles.index');
    $trail->push('Create', route('admin.roles.create'));
});
Breadcrumbs::for('admin.roles.edit', function (BreadcrumbTrail $trail, Role $role): void {
    $trail->parent('admin.roles.index');
    $trail->push($role->name, route('admin.roles.edit', $role));
});

// permissions
Breadcrumbs::for('admin.permissions.index', function (BreadcrumbTrail $trail): void {
    $trail->parent('home');
    $trail->push('Permissions', route('admin.permissions.index'));
});

// permissions>create
Breadcrumbs::for('admin.permissions.create', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin.permissions.index');
    $trail->push('Create', route('admin.permissions.create'));
});

// permissions>edit
Breadcrumbs::for('admin.permissions.edit', function (BreadcrumbTrail $trail, Permission $permission): void {
    $trail->parent('admin.permissions.index');
    $trail->push($permission->name, route('admin.permissions.edit', $permission));
   
    
});