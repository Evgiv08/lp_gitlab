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

Route::get('/', function () {
    return view('welcome');
});

// Dashboard routes.
Route::group(['prefix' => '/doorway'], function() {
    // Login to dashboard.
    Route::get('/', 'Auth\LoginController@loginForm')->name('staffLoginForm');
    Route::post('/', 'Auth\LoginController@login')->name('staffLogin');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::prefix('/dashboard')->group(function () {

    Route::prefix('/new')->group(function () {
        // All new charities(drafts) in dashboard.
        Route::get('/', function () {
            return view('dashboard.pages.charity.new');
        })->name('new');

        // Show one new charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.new_show');
        })->name('new_show');
    });


    Route::prefix('/active')->group(function () {
        // All active charities in dashboard.
        Route::get('/', function () {
            return view('dashboard.pages.charity.active');
        })->name('active');

        // Show one active charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.active_show');
        })->name('active_show');
    });

    Route::prefix('/completed')->group(function () {
        // All completed charities in dashboard.
        Route::get('/', function () {
            return view('dashboard.pages.charity.completed');
        })->name('completed');

        // Show one completed charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.completed_show');
        })->name('completed_show');
    });

    Route::prefix('/ban')->group(function () {
        // All banned charities in dashboard.
        Route::get('/', function () {
            return view('dashboard.pages.charity.ban');
        })->name('ban');

        // Show one banned charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.ban_show');
        })->name('ban_show');
    });

    // All categories in dashboard.
    Route::get('/category', function () {
        return view('dashboard.pages.category.index');
    })->name('category');

    // All appeals in dashboard.
    Route::get('/appeals', function () {
        return view('dashboard.pages.appeal.index');
    })->name('appeals');

    // All users in dashboard.
    Route::get('/users', function () {
        return view('dashboard.pages.user.index');
    })->name('users');

    // All staff members in dashboard.
    Route::get('/staff', function () {
        return view('dashboard.pages.staff.index');
    })->name('staff');

    // Staff register
    Route::post('/staff', 'Auth\RegisterController@register')->name('staffRegister');
});
