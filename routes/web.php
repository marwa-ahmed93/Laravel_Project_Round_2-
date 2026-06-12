<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('welcome');
     
});


Route::controller(UserController::class)->group(function(){

   Route::get('/user' ,'index');

Route::get('/user/create' ,'create');
Route::post('/user/store' ,'store')->name('storeData');

});
 
Route::post('invokeClass',[ProvisionServer::class])->name('inv');

Route::resource('photos', PhotoController::class);



// Route::controller(UserController::class)->group(function(){

// Route::prefix('admin')->group(function(){
//    Route::get('/user' ,'index');

// Route::get('/user/create' ,'create');
// Route::post('/user/store' ,'store');
// });

Route::middleware(CheckRole::class)->group(function(){
});





Route::get('/greeting/{id?}/{name?}', function ($id=null , $name=null) {
    echo 'Hello '.$name. " user id ".$id;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::view('/welcome','hello');

Route::redirect('here','/greeting');




// Route::post('users',function(Request $request){
//     return view('hello');
// });

// Route::get('users',function(){
//     // return view('hello');
// });

Route::match(['get', 'post'],'/match', function () {
 echo "hello";
});

Route::controller(DriverController::class)->group(function(){

Route::get('/driver/index','index')->name('driver.index');
Route::get('/drive/create','create')->name('drive.create');
Route::post('/drive/store','store')->name('drive.store');

Route::get('drive/{drive}','show')->name('drive.show');

});


Route::get('car/create',[CarController::class ,'create'])->name('car.create');
Route::post('car/store',[CarController::class ,'store'])->name('car.store');
Route::get('car/index',[CarController::class,'index'])->name('car.index');
Route::get('/car/delete/{id}',[CarController::class,'delete'])->name('car.delete');





Route::get('/employee/show/{id}' , [EmployeeController::class  ,'show']);
Route::get('/index' , [EmployeeController::class  ,'index']);

Route::get('/mechanic/show/{id}',[MechanicController::class , 'show']);





Route::get('/post/{id}/add-image', [PostController::class, 'addImage']);
Route::get('/user/{id}/add-image', [UserController::class, 'addImage']);
