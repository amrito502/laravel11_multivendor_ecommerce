<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\Customer\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::middleware(['auth', 'vendor'])->group(function () {
    Route::get('/vendor/dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
});

Route::middleware(['auth', 'customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/permissions/index', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
    Route::post('/permissions/store', [PermissionController::class, 'store'])->name('permissions.store');
    Route::get('/permissions/edit/{id}', [PermissionController::class, 'edit'])->name('permissions.edit');
    Route::post('/permissions/update/{id}', [PermissionController::class, 'update'])->name('permissions.update');
    Route::delete('/permissions/destroy', [PermissionController::class, 'destroy'])->name('permissions.destroy');


    // Route::get('/roles/index',  [RoleController::class, 'index'])->name('roles.index');
    // Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    // Route::post('/roles/store', [RoleController::class, 'store'])->name('roles.store');
    // Route::get('/roles/edit/{id}',  [RoleController::class, 'edit'])->name('roles.edit');
    // Route::post('/roles/update/{id}',  [RoleController::class, 'update'])->name('roles.update');
    // Route::delete('/roles/destroy',  [RoleController::class, 'destroy'])->name(name: 'roles.destroy');

    Route::get('/roles/index', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles/store', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/edit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
    // Route::post('/roles/update/{id}', [RoleController::class, 'update'])->name('roles.update');
    Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');
    Route::delete('/roles/destroy', [RoleController::class, 'destroy'])->name(name: 'roles.destroy');

    Route::get('/users/index', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
    // Route::delete('/users/destroy', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{id}', [UserController::class, 'delete'])->name('users.delete');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/artical/index', [ArticalController::class, 'index'])->name('artical.index');
    Route::get('/artical/create', [ArticalController::class, 'create'])->name('artical.create');
    Route::post('/artical/store', [ArticalController::class, 'store'])->name('articals.store');
    Route::get('/artical/edit/{id}', [ArticalController::class, 'edit'])->name('artical.edit');
    Route::post('/artical/update/{id}', [ArticalController::class, 'update'])->name('artical.update');
    Route::delete('/artical/destroy', [ArticalController::class, 'destroy'])->name(name: 'artical.destroy');

});

require __DIR__ . '/auth.php';
