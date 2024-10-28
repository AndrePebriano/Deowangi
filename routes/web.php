<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class,'Dashboard']);

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/detail/{id}',[UserController::class,'detail'])->name('detail_user');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $totalVarian = Product::count();
        $totalUsers = User::count();
        return view('admin.index', compact('totalVarian', 'totalUsers'));
    })->name('admin.index');
});

Route::prefix('product')->group(function(){
    Route::get('/view', [ProductController::class, 'index'])->name('product.view');
    Route::get('/add', [ProductController::class, 'create'])->name('product.add');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
});

// Route::prefix('users')->group(function() {
//     Route::get('/users', [UserController::class, 'index'])->name('users.index');
//     Route::get('/creat', [UserController::class, 'create'])->name('users.create');
//     Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
//     Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::resource('users', UserController::class);



