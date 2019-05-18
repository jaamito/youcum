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

//AIzaSyCJbNgMgomFGJGADjG5HjZrvOvL4htLzFw

Route::get('/', function () {

	$arrCat = file_get_contents("https://es.pornhub.com/webmasters/categories");
	$arrCat = json_decode($arrCat, true);
	$arrVid = file_get_contents("https://es.pornhub.com/webmasters/search?id=44bc40f3bc04f65b7a35&page=2&ordering=newest&search=Teen&thumbsize=large_hd");
	$arrVid = json_decode($arrVid, true);
	//var_dump($arrVid);
	
    return view('welcome', array("arrCategorias" => $arrCat["categories"], "arrVid"=>$arrVid["videos"]));
    /**/
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
