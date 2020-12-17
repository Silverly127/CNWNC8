<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('kislara/home', [HomeController::class, 'index']);
Route::get('kislara/about-user', [HomeController::class, 'aboutuser']);
Route::get('kislara/about-website', [HomeController::class, 'aboutwebsite']);

Route::get('kislara/register', [HomeController::class, 'register']);
Route::post('kislara/register_xl', [HomeController::class, 'register_xl']);
Route::post('kislara/login_xl', [HomeController::class, 'login_xl']);
Route::get('kislara/logout_user', [HomeController::class, 'logout_user']);

Route::get('kislara/admin', [AdminController::class, 'adminlogin']);
Route::post('kislara/admin_dashboard', [AdminController::class, 'admin_dashboard']);
Route::get('kislara/logout', [AdminController::class, 'logout']);
Route::get('kislara/show_dashboard', [AdminController::class, 'show_admin_dashboard']);

Route::get('kislara/admin_list_category', [CategoryController::class, 'show_admin_list_category']);
Route::get('kislara/admin_add_category', [CategoryController::class, 'show_admin_add_category']);
Route::post('kislara/admin_add_category_xl', [CategoryController::class, 'admin_add_category_xl']);
Route::post('kislara/admin_status_category', [CategoryController::class, 'admin_status_category']);
Route::post('kislara/admin_delete_category', [CategoryController::class, 'admin_delete_category']);


Route::get('kislara/admin_list_genre', [GenreController::class, 'show_admin_list_genre']);
Route::get('kislara/admin_add_genre', [GenreController::class, 'show_admin_add_genre']);
Route::post('kislara/admin_add_genre_xl', [GenreController::class, 'admin_add_genre_xl']);
Route::post('kislara/admin_status_genre', [GenreController::class, 'admin_status_genre']);
Route::post('kislara/admin_delete_genre', [GenreController::class, 'admin_delete_genre']);

Route::get('kislara/admin_add_product', [ProductController::class, 'show_admin_add_product']);
Route::post('kislara/admin_add_product_xl', [ProductController::class, 'admin_add_product_xl']);
Route::get('kislara/admin_list_product', [ProductController::class, 'show_admin_list_product']);
Route::get('kislara/admin_delete_product', [ProductController::class, 'admin_delete_product']);
Route::get('kislara/admin_set_product', [ProductController::class, 'show_admin_set_product']);
Route::post('kislara/admin_set_product_xl', [ProductController::class, 'admin_set_product_xl']);
Route::get('kislara/view_category_{id}', [ProductController::class, 'view_category']);
Route::get('kislara/view_genre_{id}', [ProductController::class, 'view_genre']);
Route::get('kislara/view_product_{id}', [ProductController::class, 'show_product']);
Route::get('kislara/view_search', [ProductController::class, 'view_search']);

Route::get('kislara/add_cart', [CartController::class, 'add_cart']);
Route::get('kislara/view_cart', [CartController::class, 'view_cart']);
Route::post('kislara/delete_cart', [CartController::class, 'delete_cart']);
Route::get('kislara/update_cart', [CartController::class, 'update_cart']);




