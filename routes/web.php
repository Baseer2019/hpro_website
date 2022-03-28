<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\positionController;
use App\Models\donors;
use App\Models\Projects;

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

//Front view


Route::get('/password', function(){
    $password = Hash::make('ezat@hpro');
    return $password;
});


//Admin section->middleware(['auth', 'isAdmin']);
Route::get('/Admin', function () {
$donors=donors::all();
$projects=Projects::all();
$staffs=User::all();
    return view('admin.home', compact(['donors','projects','staffs']));
})->middleware(['auth', 'isAdmin']);

/*
Route::get('/position',function(){
return view('admin.position');
});
*/
Route::get('/projects', function () {
    return view('admin.project');
});
Route::get('/donors', function () {
    return view('admin.donors');
});

Route::get('/edit-donor', function () {
    return view('admin.edit_donor');
});
Route::get('/edit-project', function () {
    return view('admin.edit_project');
});
Route::get('/enter', function(){

    return view('auth.login');
});

Route::resource('/user', UserController::class);
Route::get('/user/update/{id}', [UserController::class, 'update_user'])->name('update_user');
Route::resource('/project', ProjectController::class);
Route::get('/project/update/{id}', [ProjectController::class, 'update_project'])->name('update_project');
Route::resource('/donor', DonorController::class);
Route::get('/donor/update/{id}', [DonorController::class, 'update_donor'])->name('update_donor');
Route::resource('/positions', positionController::class);
Route::get('/positions/update/{id}', [positionController::class, 'update_positions'])->name('update_positions');

Route::get('/home', [frontendController::class, 'home']);
Route::get('/', [frontendController::class, 'home']);
Route::get('/staff', [frontendController::class, 'staff']);
Route::get('/about', [frontendController::class, 'about']);
Route::get('/donor', [frontendController::class, 'donor']);
Route::get('/projects', [frontendController::class, 'projects']);


