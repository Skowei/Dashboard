<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DashboardUserController;
use App\Http\Controllers\Dashboard\DashboardRouteController;
use App\Http\Controllers\Dashboard\DashboardSettingsController;
use App\Models\DashboardRoute;
use Illuminate\Support\Facades\View;

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

Route::group(['middleware'=> 'auth', 'prefix' => 'dashboard'], function () 
{

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('examples', [DashboardController::class, 'examples'])->name('dashboard.examples.index');

    Route::group(['prefix' => 'users'], function () 
    {
        Route::get('/', [DashboardUserController::class, 'index'])->name('dashboard.user.index');
    });

    Route::group(['prefix' => 'settings'], function () 
    {
        Route::group(['prefix' => 'basic'], function () 
        {
            Route::get('/', [DashboardSettingsController::class, 'index'])->name('dashboard.settings.basic.index');
        });

        Route::group(['prefix' => 'routes'], function () 
        {
            Route::get('/', [DashboardRouteController::class, 'index'])->name('dashboard.settings.routes.index');
            Route::get('/{item}/edit', [DashboardRouteController::class, 'edit'])->name('dashboard.settings.routes.edit');
            Route::post('/', [DashboardRouteController::class, 'store'])->name('dashboard.settings.routes.store');
            Route::put('/{item}', [DashboardRouteController::class, 'update'])->name('dashboard.settings.routes.update');
            Route::delete('/{item}', [DashboardRouteController::class, 'destroy'])->name('dashboard.settings.routes.destroy');
        });
    });

    View::composer(['*'], function($view){
        $dashboardRoutes = DashboardRoute::all()->sortBy('name');
        $view->with('dashboardRoutes', $dashboardRoutes);
    });
});

