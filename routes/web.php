<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// })->name('/');

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('user.home');

// Route::get('/home', [UserController::class, 'index'])->name('user.home')->middleware('is_user');
Route::get('/savings', [UserController::class, 'savings'])->name('user.savings')->middleware('is_user');
Route::get('/loans', [UserController::class, 'loans'])->name('user.loans')->middleware('is_user');
Route::get('/reports', [UserController::class, 'reports'])->name('user.reports')->middleware('is_user');


Route::get('user/privacy_setting', [UserController::class, 'privacy_setting'])->name('user.privacy_setting')->middleware('is_user');
Route::get('user/update_privacy_setting', [UserController::class, 'privacy_setting'])->name('user.privacy_setting')->middleware('is_user');

Route::get('user/profile_setting', [UserController::class, 'profile_setting'])->name('user.profile_setting')->middleware('is_user');
Route::post('user/update_profile_setting', [UserController::class, 'update_profile_setting'])->name('user.update_profile_setting');

Route::get('admin/privacy_setting', [AdminController::class, 'privacy_setting'])->name('admin.privacy_setting')->middleware('is_admin');
Route::get('admin/update_privacy_setting', [AdminController::class, 'privacy_setting'])->name('admin.privacy_setting')->middleware('is_admin');

Route::get('admin/profile_setting', [AdminController::class, 'profile_setting'])->name('admin.profile_setting')->middleware('is_admin');
Route::post('admin/update_profile_setting', [AdminController::class, 'update_profile_setting'])->name('admin.update_profile_setting');


Route::get('admin/home', [AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('admin/members', [AdminController::class, 'members'])->name('admin.members')->middleware('is_admin');
Route::get('admin/funds', [AdminController::class, 'funds'])->name('admin.funds')->middleware('is_admin');
Route::get('admin/savings', [AdminController::class, 'savings'])->name('admin.savings')->middleware('is_admin');
Route::get('admin/loans', [AdminController::class, 'loans'])->name('admin.loans')->middleware('is_admin');
Route::get('admin/reports', [AdminController::class, 'reports'])->name('admin.reports')->middleware('is_admin');
Route::get('admin/add-new-member', [AdminController::class, 'add_new_member_form'])->name('admin.new-member')->middleware('is_admin');
Route::get('admin/add-new-funds', [AdminController::class, 'add_new_funds_form'])->name('admin.new-funds')->middleware('is_admin');
Route::get('admin/update-member-savings-record', [AdminController::class, 'update_member_savings_record'])->name('admin.update-member-savings-record')->middleware('is_admin');
Route::get('admin/view-member-savings-record', [AdminController::class, 'view_member_savings_record'])->name('admin.member-savings')->middleware('is_admin');
Route::get('admin/view-member-loans-record', [AdminController::class, 'view_member_loans_record'])->name('admin.member-loans')->middleware('is_admin');
Route::get('admin/add-new-loan-record', [AdminController::class, 'add_new_loan_record'])->name('admin.new-loan')->middleware('is_admin');
Route::post('admin/create-new-loan', [AdminController::class, 'new_loan'])->name('admin.create-new-loan')->middleware('is_admin');
Route::post('admin/add-funds', [AdminController::class, 'add_new_funds'])->name('add-funds');
Route::post('admin/add-member', [AdminController::class, 'add_new_member'])->name('add-member');
Route::post('admin/add-savings', [AdminController::class, 'add_savings'])->name('admin.add-savings');

