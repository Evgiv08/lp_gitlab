<?php

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

// Auth, logout, register for staff
Route::get('/doorway', 'Auth\LoginController@showStaffLoginForm')->name('doorway');
Route::post('/staff/login', 'Auth\LoginController@staffLogin')->name('staff.login');
Route::post('/staff/logout', 'Auth\LoginController@staffLogout')->name('staff.logout');
Route::post('/staff/create', 'Auth\RegisterController@createStaff')->name('staff.create');

Route::prefix('/dashboard')->group(function () {

    // All routes for new charity.
    Route::prefix('/new')->group(function () {
        // All new charities(drafts) in dashboard.
        Route::get('/', 'NewCharityController@index')->name('new.charity.index');

        // Show one new charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.new.show');
        })->name('new_show');
    });

    // All routes for active charity.
    Route::prefix('/active')->group(function () {
        // All active charities in dashboard.
        Route::get('/', 'ActiveCharityController@index')->name('active.charity.index');

        // Show one active charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.active.show');
        })->name('active_show');
    });

    // All routes for completed charity.
    Route::prefix('/completed')->group(function () {
        // All completed charities in dashboard.
        Route::get('/', 'CompletedCharityController@index')->name('completed.charity.index');

        // Show one completed charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.completed.show');
        })->name('completed_show');
    });

    // All routes for ban charity.
    Route::prefix('/ban')->group(function () {
        // All banned charities in dashboard.
        Route::get('/', 'BanCharityController@index')->name('ban.charity.index');

        // Show one banned charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.ban.show');
        })->name('ban_show');
    });

    // All categories in dashboard.
    Route::resource('/category', 'CategoryController', [
        'only' => ['index','store','update','destroy']
    ]);

    // All appeals in dashboard.
    Route::get('/appeals', function () {
        return view('dashboard.pages.appeal.index');
    })->name('appeals');

    // All users in dashboard.
    Route::get('/users', function () {
        return view('dashboard.pages.user.index');
    })->name('users');

    // All staff members in dashboard.
    Route::resource('/staff', 'StaffController', [
        'only' => ['index', 'update', 'destroy']
    ]);
});

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

// Main page.
Route::get('/', 'CharityController@index')->name('mainpage');

// Show client register form
Route::get('/registration', 'Auth\ClientRegisterController@index')->name('show.client.register.form');

// Client register method
Route::post('/registration', 'Auth\ClientRegisterController@createClient')->name('client.register');

// Login/logout for clients
Route::post('/', 'Auth\LoginController@clientLogin')->name('client.login');
Route::post('/logout', 'Auth\LoginController@clientLogout')->name('client.logout');

// Search
Route::prefix('/search')->group(function () {
    Route::get('/', 'SearchController@index')->name('search');
    Route::get('/{search_text}', 'SearchController@show');
});

// Client show, edit, update, delete
Route::get('client/{client}', 'ClientController@show')->name('client.show');

// Slug
Route::get('/{charity}', 'CharityController@show')->name('charity.show');

// Charity
Route::prefix('/charity')->group(function () {
    Route::get('/create', 'CharityController@create')->name('charity.create');
    Route::post('/store', 'CharityController@store')->name('charity.store');
});
