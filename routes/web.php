<?php

use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\adminLoginController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\authorsManageController;
use App\Http\Controllers\booksController;
use App\Http\Controllers\booksManageController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\categoriesManageController;
use App\Http\Controllers\changePasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\issuedBooksController;
use App\Http\Controllers\issuedBooksManageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\myProfileController;
use App\Http\Controllers\regStudentsController;
use App\Http\Controllers\UserDashboard;
use App\Http\Middleware\RedirectIfNotAuthenticated;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorsEditController;
use App\Http\Controllers\CategoriesEditController;
use App\Http\Controllers\BooksEditController;
use App\Http\Controllers\IssuedBooksEditController;

Route::get('/', [DashboardController::class, 'Dashboard']);

Route::get('/dbconn', function(){
    return view ('dbconn');
});

Route::get('/Dashboard',[DashboardController::class,'Dashboard'])->name('Dashboard');



    /*name sa imong route , followed by name sa imong Controller, then name
    sa function sa imong controller, then name an ID or indicator instanstation.
    */
 Route::get('/UserLogin', [LoginController::class, 'Login'])
 ->name('Login');


 Route::get('/UserDashboard', [UserDashboard::class, 'User_Dashboard'])
->name('UserDashboard');




 // ROUTES PARA SA USER  //
 Route::get('/myProfile', [myProfileController::class, 'myProfile'])
 ->name('myProfile');

 


 Route::get('/changePassword',[changePasswordController::class,'changePassword'])
//  ->middleware('auth') // 
 ->name('changePassword');


 Route::get('/Admin', [adminLoginController::class, 'AdminLogin'])
 ->name('Admin');


 Route::get('/admin-dashboard', [AdminController::class, 'showDashboard'])->name('AdminDashboard');


 Route::get('/AddCategories', [categoriesController::class, 'Categories'])
 ->name('Categories');

 
 Route::get('/AddAuthors', [AuthorsController::class, 'Authors'])
 ->name('Authors');

 Route::get('/AddBooks', [booksController::class, 'Books'])
 ->name('Books');


 Route::get('/AddIssuedBooks', [issuedBooksController::class, 'issuedBooks'])
 ->name('IssuedBooks');


 Route::get('/RegisteredStudents', [regStudentsController::class ,'regStudentss' ])
->name('RegisteredStudents');


Route::get('/ManageAuthors', [authorsManageController::class, 'authorsManage'])
->name('manageAuthors');


Route::get('/ManageCategories', [categoriesManageController::class, 'CategoriesManage'])
->name('manageCategories');

Route::get('/ManageBooks', [booksManageController::class, 'booksManage'])
->name('manageBooks');

Route::get('/ManageIssuedBooks', [issuedBooksManageController::class, 'issuedBooksManagee'])
->name('manageIssuedBooks');


Route::get('/AdminDashboard', [AdminController::class, 'dashboard'])
->name('AdminDashboard');


Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('userDashboard', [AuthController::class, 'userDashboard'])->name('userDashboard');



// AUTH PARA SA CONTROLLER ROUTE //
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
//------------------------//


// AUTH PARA SA ADMIN CONTROLLER ROUTE //
Route::get('/Admin', [adminLoginController::class, 'AdminLogin'])->name('Admin');

Route::post('/Admin', [adminLoginController::class, 'adminLoginSubmit'])->name('admin.login');

//------------------------//




// EDIT ROUTE SECTIONS DINHII WAHHHHHHHH // 


Route::get('admin/authors/{id}/edit', [AuthorsEditController::class, 'edit'])->name('authors.edit');
Route::get('admin/categories/{id}/edit', [CategoriesEditController::class, 'edit'])->name('categories.edit');
Route::get('admin/books/{id}/edit', [BooksEditController::class, 'edit'])->name('books.edit');
Route::get('admin/issued-books/{id}/edit', [IssuedBooksEditController::class, 'edit'])->name('issuedBooks.edit');

Route::get('admin/categories/edit/{id}', [categoriesController::class, 'edit'])->name('categories.edit');

//------------------------//


