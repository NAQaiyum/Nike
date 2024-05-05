<?php

use Illuminate\Support\Facades\Route;

$adminNamespace     = 'App\Http\Controllers\Admin';
$frontendNamespace  = 'App\Http\Controllers\Frontend';

Auth::routes();
Route::namespace($adminNamespace)->name('admin::')->group(function () {
    Route::post('registration', 'RegistrationController@save')->name('registration');
});
Route::namespace($adminNamespace)->name('admin::')->middleware(['auth'])->group(function () {
    Route::get('', 'DashboardController@index');
    Route::get('admin', 'DashboardController@index')->name('dashboard');

    Route::name('auth.')->group(function () {
        Route::name('role.')->prefix('role')->group(function () {
            Route::get('', 'RoleController@index')->name('index');
            Route::get('form', 'RoleController@getForm')->name('form');
            Route::get('delete', 'RoleController@delete')->name('delete');
            Route::post('save', 'RoleController@save')->name('save');
            Route::post('assign', 'RoleController@assign')->name('assign');
        });
    });
    Route::name('student.')->prefix('student')->group(function () {
        Route::get('', 'StudentController@index')->name('index');
        Route::get('form', 'StudentController@getForm')->name('form');
        Route::get('delete', 'StudentController@delete')->name('delete');
        Route::post('save', 'StudentController@save')->name('save');
    });
    Route::name('course.')->prefix('course')->group(function () {
        Route::get('', 'CourseCountroller@index')->name('index');
        Route::get('form', 'CourseCountroller@getForm')->name('form');
        Route::get('delete', 'CourseCountroller@delete')->name('delete');
        Route::post('save', 'CourseCountroller@save')->name('save');
    });
});
