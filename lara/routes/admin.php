<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
Route::prefix('admin')->group(function(){
    Route::get('/',[DashboardController::class,'index']);
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RolesController::class);




    //test migration
    // it is not available to write in routes
    // Route::get('/role', function(){
    //     $roles=Role::with([
    //         'users'=>function($query){$query->select('name','email','role_id');
    //         }
    //     ])->get();
    //     return response()->json($roles);
    // });
    });?>