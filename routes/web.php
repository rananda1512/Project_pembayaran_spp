<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/', function () {

//     return view("welcome");
// });



// Route::view('/contact', "contact");


//views/series


Route::get('about', "AboutController@index");

Route::view('contact', 'contact');
// Route::get('contact', function (Request $request) {
//     //request dengan namespace use Illuminate\Http\Request;
//     // return $request->path() == 'contact' ? true : false;

//     //request dengan method request
//     // return request()->path() == 'contact' ? true : false;

//     //dengan method is

//     return request()->is('contact') ? 'sama' : 'beda';
// });

Route::middleware('auth')->group(function () {

    //memberi exception
    Route::get('posts', "PostController@index")->name("posts.index")->withoutMiddleware('auth');
    //input data
    Route::get('posts/create', "PostController@create")->name('posts.create');
    Route::post('posts/store', "PostController@store");
    //update
    Route::get('posts/{post:id}/edit', "PostController@edit");
    Route::patch('posts/{post:id}/update', "PostController@update");
    Route::delete('posts/{post:id}/delete', "PostController@destroy");

    Route::get('posts/{post:id}', "PostController@show");
});


//siswa
Route::get('siswa', "SiswaController@index");
Route::post('siswa/create', "SiswaController@store");
Route::delete("siswa/{siswa:id}/delete", "SiswaController@delete");
Route::get("siswa/{siswa:id}", "SiswaController@show");

//category
Route::get("category/{category:id}", "CategoryController@show");

//tags
Route::get("tags/{tag:id}", "TagController@show");

//kelas
Route::get("kelas", "KelasController@index");
Route::get('kelas/create', "KelasController@create");
Route::post('kelas/store', "KelasController@store");
Route::get('kelas/{kelas:id}', "KelasController@show");
Route::get('kelas/{kelas:id}/edit', "KelasController@edit");
Route::patch('kelas/{kelas:id}/update', "KelasController@update");
Route::delete("kelas/{kelas:id}/delete", "KelasController@delete");

//sekolah
Route::get("sekolah", "SekolahController@index");
Route::get('sekolah/create', "SekolahController@create");
Route::post('sekolah/store', "SekolahController@store");
Route::get('sekolah/{sekolah:id}/edit', 'SekolahController@edit');
Route::patch('sekolah/{sekolah:id}/update', "SekolahController@update");
Route::delete('sekolah/{sekolah:id}/delete', "SekolahController@delete");

Route::get('user', "UserController@index");

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
