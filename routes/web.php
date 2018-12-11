<?php
//use Illuminate\Http\Request;

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
     return view('login');
 });

 Route::get('/dashboard', function () {
    return view('dashboard');
});

 Route::get('to', function () {
     return view('to');
 });


 Route::match(['get', 'post'], 'new', 'LineApiController@webhook');
//
// //Route::view('/','new');
// Route::get('new/{id}',function($id){
//   return $id;
// });
//
// Route::get('new/{ild}/{ll}',function(Request $request, $gg,$ild){
//   return $request->all();
// });
//
// Route::redirect('/old','/blog/public/new',301);
//
// Route::get('test','UserController@show');
//
// Route::get('/taeto/{name}',function($name){
//   return view('taeto',['name'=>$name]);
// });

//Route::get('/',function(){
//  return view('block,block');
//});
