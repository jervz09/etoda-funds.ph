<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
})->name('/');


Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('admin/home', [AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('admin/members', [AdminController::class, 'members'])->name('admin.members')->middleware('is_admin');
Route::get('admin/savings', [AdminController::class, 'savings'])->name('admin.savings')->middleware('is_admin');
Route::get('admin/loans', [AdminController::class, 'loans'])->name('admin.loans')->middleware('is_admin');
Route::get('admin/reports', [AdminController::class, 'reports'])->name('admin.reports')->middleware('is_admin');
Route::get('admin/add-new-member', [AdminController::class, 'add_new_member_form'])->name('admin.new-member')->middleware('is_admin');
Route::get('admin/update-member-savings-record', [AdminController::class, 'update_member_savings_record'])->name('admin.update-member-savings-record')->middleware('is_admin');
Route::get('admin/view-member-savings-record', [AdminController::class, 'view_member_savings_record'])->name('admin.member-savings')->middleware('is_admin');
Route::get('admin/view-member-loans-record', [AdminController::class, 'view_member_loans_record'])->name('admin.member-loans')->middleware('is_admin');
Route::get('admin/add-new-loan-record', [AdminController::class, 'add_new_loan_record'])->name('admin.new-loan')->middleware('is_admin');
Route::post('admin/create-new-loan', [AdminController::class, 'new_loan'])->name('admin.create-new-loan')->middleware('is_admin');
Route::post('admin/add-member', [AdminController::class, 'add_new_member'])->name('add-member');
Route::post('admin/add-savings', [AdminController::class, 'add_savings'])->name('admin.add-savings');

