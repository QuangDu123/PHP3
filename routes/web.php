<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Models\Form;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// TRANG HOME 
    Route::get('/',[HomeController::class, 'home']);
    Route::get('/search',[HomeController::class, 'search']);
    Route::get('/newsofCT/{id}',[HomeController::class, 'search_category']);
    Route::get('/newsofTags/{id}',[HomeController::class, 'search_tags']);
    Route::get('/about',[HomeController::class, 'about']);
    Route::get('/contact',[HomeController::class, 'contact']);
    Route::post('/contact',[HomeController::class, 'contact_']);
    Route::get('/profile/{id}',[FormController::class, 'profile']);
    Route::post('/profile/{id}',[FormController::class, 'profile_']);
// TRANG TIN HOME 
    Route::get('/category',[HomeController::class, 'category']);
    Route::get('/detail/{id}',[HomeController::class, 'Detail']);
    Route::post('/postbl/{id}',[HomeController::class, 'addBL']);
// Admin
    Route::middleware('auth', 'auth.admin')->group(function(){

        Route::get('/admin',[AdminController::class, 'admin']);
        Route::get('/profileA/{id}',[FormController::class, 'profileA']);
        Route::post('/profileA/{id}',[FormController::class, 'profileA_']);
    });
// TIN---------------
    Route::get('/admin/addNews',[AdminController::class, 'addNews']);
    Route::post('/admin/addNews',[AdminController::class, 'addNews_']);
    Route::get('/admin/listNews',[AdminController::class, 'listNews']);
    Route::get('/admin/editNews/{id}',[AdminController::class, 'editNews'])->name('editNews');
    Route::post('/admin/editNews/{id}',[AdminController::class, 'editNews_'])->name('editNews');
    Route::get('/admin/deleteNews/{id}',[AdminController::class, 'deleteNews'])->name('deleteNews');
// TAGS 
    Route::get('/admin/addTags',[AdminController::class, 'addTags']);
    Route::post('/admin/addTags',[AdminController::class, 'addTags_']);
    Route::get('/admin/listTags',[AdminController::class, 'listTags']);
    Route::get('/admin/editTags/{id}',[AdminController::class, 'editTags'])->name('editTags');
    Route::post('/admin/editTags/{id}',[AdminController::class, 'editTags_'])->name('editTags');
    Route::get('/admin/deleteTags/{id}',[AdminController::class, 'deleteTags'])->name('deleteTags');
// LOẠI TIN --------------
    Route::get('/admin/addLTin',[AdminController::class, 'addLTin']);
    Route::post('/admin/addLTin',[AdminController::class, 'addLTin_']);
    Route::get('/admin/listLTin',[AdminController::class, 'listLTin']);
    Route::get('/admin/editLTin/{id}',[AdminController::class, 'editLTin'])->name('editLTin');
    Route::post('/admin/editLTin/{id}',[AdminController::class, 'editLTin_'])->name('editLTin');
    Route::get('/admin/deleteLTin/{id}',[AdminController::class, 'deleteLTin'])->name('deleteLTin');
// BÌNH LUẬN-----------------------
    Route::get('/admin/listBL',[AdminController::class, 'listBL']);
    Route::post('/admin/editBL/{id}',[AdminController::class, 'editBL_'])->name('editBL');
    Route::get('/admin/deleteBL/{id}',[AdminController::class, 'deleteBL'])->name('deleteBL');
// USER----------------------------
    Route::get('/admin/listUser',[AdminController::class, 'listUser']);
    Route::get('/admin/editUser/{id}',[AdminController::class, 'editUser']);
    Route::post('/admin/editUser/{id}',[AdminController::class, 'editUser_']);
    Route::get('/admin/deleteUser/{id}',[AdminController::class, 'deleteUser']);
// FORM LIÊN HỆ
    Route::get('/admin/listForm',[FormController::class, 'listForm']);
    Route::get('/admin/editForm/{id}',[FormController::class, 'editForm']);
    Route::post('/admin/editForm/{id}',[FormController::class, 'editForm_']);
    Route::get('/admin/deleteForm/{id}',[FormController::class, 'deleteForm']);




// Route::get('/ab', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
