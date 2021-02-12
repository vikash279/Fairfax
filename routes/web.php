<?php

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

Route::get('/','App\Http\Controllers\UserController@index');
Route::get('/home','App\Http\Controllers\UserController@index');
Route::get('/fairfex-landing','App\Http\Controllers\UserController@fairfaxLanding');
Route::get('/home_purchase','App\Http\Controllers\UserController@homePurchase');
Route::get('/home_refinance','App\Http\Controllers\UserController@homeRefinance');
Route::get('/aboutus','App\Http\Controllers\UserController@aboutUs');
Route::get('/contact','App\Http\Controllers\UserController@contactUs');
Route::get('/loan-program','App\Http\Controllers\UserController@loanProgram');
Route::get('/loan-process','App\Http\Controllers\UserController@loanProcess');
Route::get('/faq','App\Http\Controllers\UserController@faq');
Route::get('/blog','App\Http\Controllers\UserController@blog');
Route::get('/blogdetails1','App\Http\Controllers\UserController@blogDetails1');
Route::get('/blogdetails2','App\Http\Controllers\UserController@blogDetails2');
Route::get('/blogdetails3','App\Http\Controllers\UserController@blogDetails3');
Route::get('/blogdetails4','App\Http\Controllers\UserController@blogDetails4');
Route::get('/blogdetails5','App\Http\Controllers\UserController@blogDetails5');
Route::get('/blogdetails6','App\Http\Controllers\UserController@blogDetails6');
Route::get('/legal','App\Http\Controllers\UserController@legal');
Route::get('/privacy-policy','App\Http\Controllers\UserController@privacyPolicy');
Route::get('/thankyou','App\Http\Controllers\UserController@thankYou');
Route::get('/location','App\Http\Controllers\UserController@location');

Route::post('/submitdata','App\Http\Controllers\UserController@submitData');
Route::post('/submitcontactdata','App\Http\Controllers\UserController@submitContactData');
Route::post('/store_home_purchase_data' ,'App\Http\Controllers\UserController@homePurchaseData');
Route::post('/store_home_refinance_data' ,'App\Http\Controllers\UserController@homeRefinanceData');
