<?php

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

//frontend routes

//index route
Route::get('/','HomeController@index')->name('home');

//maintenance routes
Route::group(['prefix' => 'maintenance'], function(){
    Route::get('/', 'MaintenanceController@index')->name('maintenance.index');
    Route::get('tools', 'MaintenanceController@tools')->name('maintenance.tools');
    Route::get('services', 'MaintenanceController@services')->name('maintenance.services');
});

//epc routes
Route::group(['prefix' => 'epc'], function(){
    Route::get('/', 'EpcController@index')->name('epc.index');
    Route::get('hvac', 'EpcController@hvac')->name('epc.hvac');
    Route::get('fire-safety', 'EpcController@fireSafty')->name('epc.fire.safety');
    Route::get('process-piping', 'EpcController@processPiping')->name('epc.process.piping');
});


//consultancy routes
Route::group(['prefix' => 'consultancy'], function(){
    Route::get('/', 'ConsultancyController@index')->name('consultancy.index');
    Route::get('electrical', 'ConsultancyController@electrical')->name('consultancy.electrical');
    Route::get('mechanical', 'ConsultancyController@mechanical')->name('consultancy.mechanical');
    Route::get('work-reference', 'ConsultancyController@workReference')->name('consultancy.work.reference');
});

Route::get('products', 'HomeController@products')->name('products');
Route::get('about','AboutUsController@index')->name('about');
Route::get('contact','ContactUsController@index')->name('contact');
Route::post('contact','ContactUsController@sendEmail')->name('contact.post');


//admin routes
Route::group(['prefix' => 'admin'], function (){

    Route::group(['namespace' => 'Auth'], function (){
        Route::get('/', 'LoginController@index')->name('login');
        Route::post('/', 'LoginController@login')->name('login.post');
    });

    Route::get('password-reset', 'PasswordResetController@index')->name('password.reset');
    Route::post('password-reset', 'PasswordResetController@sendResetEmail')->name('password.reset.post');

    Route::get('reset-password/{code}', 'PasswordResetController@showResetPassword')->name('reset.password');
    Route::post('reset-password/{code}', 'PasswordResetController@resetPassword')->name('reset.password.post');

    //auth protected routes for admin
    Route::group(['middleware' => 'auth'], function (){
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('files', 'DashboardController@showFiles')->name('files');
        Route::get('delete-file/{id}', 'DashboardController@deleteFile')->name('delete.file');
        Route::post('upload-pdf', 'DashboardController@uploadPdf')->name('upload.pdf');
        Route::get('logout', 'LogoutController@logout')->name('logout');
    });
});