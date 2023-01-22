<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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
Route::post('user', function(Request $request){
return view($request) ;
});




// Route::get('name',function(){
//     return view('index');
// });
/*
Route::get('xx' , function(){
    return view('mm');
});


Route::get('home' , function(){

    return "khaled alrefae home ";
});

 Route::view('alrefae' , 'index' );

 use App\Http\Controllers\SmraController;
Route::get('kh',[SmraController::class ,'index']);

Route::get('/user/{id}' , [SmraController::class  , 'show' ]);

Route::get('/employee/{id}' , [SmraController::class , 'index']);

*/

Route::get('xx',function(){
    return 'ok';
});


