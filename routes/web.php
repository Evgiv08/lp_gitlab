<?php

// Login/Logout to Dashboard page
Route::get('/doorway', 'Auth\LoginController@showStaffLoginForm')->name('doorway');
    Route::post('/staff/login', 'Auth\LoginController@staffLogin')->name('staff.login');
    Route::post('/staff/logout', 'Auth\LoginController@staffLogout')->name('staff.logout');

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'dashboard','middleware' => ['auth:staff']], function () {
//Route::group(['prefix' => 'dashboard'], function () {

    // All routes for new charity.
    Route::prefix('/new')->group(function () {
        // All new charities(drafts) in dashboard.
        Route::get('/', 'NewCharityController@index')->name('new.charity.index');

        // Show one new charity in dashboard.
        Route::get('/{charity}/show/', 'NewCharityController@show')->name('new.charity.show');
        // Show one new charity in dashboard.
        Route::post('/{charity}/return/', 'NewCharityController@return')->name('new.charity.return');
        // Show one new charity in dashboard.
        Route::post('/{charity}/publish/', 'NewCharityController@publish')->name('new.charity.publish');
        // Show one new charity in dashboard.
        Route::post('/{charity}/edit/', 'NewCharityController@edit')->name('new.charity.edit');
        // Show one new charity in dashboard.
        Route::post('/{charity}/delete/', 'NewCharityController@delete')->name('new.charity.delete');
    });

    // All routes for active charity.
    Route::prefix('/active')->group(function () {
        // All active charities in dashboard.
        Route::get('/', 'ActiveCharityController@index')->name('active.charity.index');

        // Show one active charity in dashboard.
        Route::get('{charity}/show', 'ActiveCharityController@show')->name('active.charity.show');

        Route::post('{charity}/ban', 'ActiveCharityController@ban')->name('active.charity.ban');
    });

    // All routes for completed charity.
    Route::prefix('/completed')->group(function () {
        // All completed charities in dashboard.
        Route::get('/', 'CompletedCharityController@index')->name('completed.charity.index');

        // Show one completed charity in dashboard.
        Route::get('{charity}/show', 'CompletedCharityController@show')->name('completed.charity.show');
    });

    // All routes for ban charity.
    Route::prefix('/ban')->group(function () {
        // All banned charities in dashboard.
        Route::get('/', 'BanCharityController@index')->name('ban.charity.index');

        // Show one banned charity in dashboard.
        Route::get('{charity}/show', 'BanCharityController@show')->name('ban.charity.show');

        // Show one banned charity in dashboard.
        Route::post('{charity}/unban', 'BanCharityController@unban')->name('ban.charity.unban');
    });

    // All categories in dashboard.
    Route::resource('/category', 'CategoryController', [
        'only' => ['index','store','update','destroy']
    ]);

    // All appeals in dashboard.
    Route::get('/appeals', function () {
        return view('dashboard.pages.appeal.index');
    })->name('appeals');

    // All clients in dashboard.
    Route::get('/users', 'ClientController@index')->name('client.index');

    /**
     * Staff
     */
    Route::group(['prefix' => 'staff','middleware' => ['admin']], function () {
        Route::get('/', 'StaffController@index')->name('staff.index');
        Route::post('/create', 'Auth\StaffRegisterController@createStaff')->name('staff.create');
        Route::patch('/{staff}/update', 'StaffController@update')->name('staff.update');
        Route::delete('/{staff}/delete', 'StaffController@destroy')->name('staff.destroy');
    });
});

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

// Main page.
Route::get('/', 'CharityController@index')->name('mainpage');

/**
 * Register/Login/Logout
 */
Route::get('/registration', 'Auth\ClientRegisterController@index')->name('client.create_form');
Route::post('/registration', 'Auth\ClientRegisterController@createClient')->name('client.register');
Route::post('/login', 'Auth\LoginController@clientLogin')->name('client.login');
Route::post('/logout', 'Auth\LoginController@clientLogout')->name('client.logout');

// Search
Route::prefix('/search')->group(function () {
    Route::get('/', 'SearchController@index')->name('search');
    Route::get('/{search_text}', 'SearchController@show');
});

// Client show
Route::get('client/{client}', 'ClientController@show')->name('client.show');

// Slug
Route::get('/{charity}', 'CharityController@show')->name('charity.show');

// Charity
Route::prefix('/charity')->group(function () {
    Route::get('/create', 'CharityController@create')->name('charity.create')->middleware('client');
    Route::post('/store', 'CharityController@store')->name('charity.store');
});
