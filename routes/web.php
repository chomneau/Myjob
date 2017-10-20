<?php
use App\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', 'PagesController@form');
Route::post('/form', 'PagesController@store');

Auth::routes();
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
Route::get('/findjob', 'PagesController@getFindJob');
Route::get('/postjob', 'PagesController@getPostjob');

//Route::get('/home', 'HomeController@index');
//Route::get('/home/profile', 'HomeController@profile')->name('home.profile');
//Route::post('/home/profile', 'HomeController@createProfile')->name('home.profile.submit');

Route::get('/home', 'HomeController@index')->name('home.profile');




Route::get('/home/job', 'HomeController@showJobForm')->name('home.jobform');
Route::post('/home/job', 'HomeController@createjob')->name('home.jobform.submit');

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//user route controller
Route::get('/user/profile', 'ProfileController@index')->name('user.profile');

Route::resource('/user', 'ProfileController');








Route::prefix('admin')->group(function (){

    Route::get('/login', 'auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/postjob', 'AdminController@showPostjobForm')->name('admin.postjob');
    Route::post('/postjob', 'AdminController@postjob')->name('admin.postjob.submit');


    //view category
    Route::get('/showcategory', 'CategoryController@showCategory')->name('admin.showcategory');
    Route::get('/category', 'CategoryController@showCategoryForm')->name('admin.category');
    Route::post('/category', 'CategoryController@store')->name('admin.showcategory.submit');
    Route::resource('/category', 'CategoryController');




    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

//    //Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');



//    // Password reset routes
//    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
//    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
//    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
//    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');



});




