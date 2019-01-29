<?php

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

// Login to dashboard.
// Route::get('/doorway', function () {
//     return view('dashboard.pages.login');
// })->name('doorway');

Route::get('/doorway', 'Auth\LoginController@showStaffLoginForm');
Route::post('/login/staff', 'Auth\LoginController@staffLogin')->name('staff_login');

Route::post('/logout/staff', 'Auth\LoginController@staffLogout')->name('staff_logout');

Route::post('/doorway/staff/register', 'Auth\RegisterController@createStaff')->name('register');

Route::prefix('/dashboard')->group(function () {

    // All routes for new charity.
    Route::prefix('/new')->group(function () {
        // All new charities(drafts) in dashboard.
        Route::get('/', function () {
            return view('dashboard.pages.charity.new.index');
        })->name('new');

        // Show one new charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.new.show');
        })->name('new_show');
    });

    // All routes for active charity.
    Route::prefix('/active')->group(function () {
        // All active charities in dashboard.
        Route::get('/', function () {
            return view('dashboard.pages.charity.active.index');
        })->name('active');

        // Show one active charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.active.show');
        })->name('active_show');
    });

    // All routes for completed charity.
    Route::prefix('/completed')->group(function () {
        // All completed charities in dashboard.
        Route::get('/', function () {
            return view('dashboard.pages.charity.completed.index');
        })->name('completed');

        // Show one completed charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.completed.show');
        })->name('completed_show');
    });

    // All routes for ban charity.
    Route::prefix('/ban')->group(function () {
        // All banned charities in dashboard.
        Route::get('/', function () {
            return view('dashboard.pages.charity.ban.index');
        })->name('ban');

        // Show one banned charity in dashboard.
        Route::get('/show', function () {
            return view('dashboard.pages.charity.ban.show');
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
});
