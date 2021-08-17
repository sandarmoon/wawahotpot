<?php

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
    return view('auth.login');
});

//mail sending
Route::post('sendbasicemail','MailController@basic_email')->name('sendbasicemail');

Route::get('/menus/count','FoodController@getcountmenu')
	->name('menu.getcount');

Route::group(['middleware' => ['role:Admin']], function () {
    // backend
	Route::get('/Admin/dashboard',function(){
		return view('backend/admin-dashboard');
	})->name('admin.dashboard');


	Route::resource('/menu','MenuController');

	Route::resource('/food','FoodController');

	Route::get('/getDataBycatID/{id}','FoodController@getDataBycatID')->name('menu.getData');

	Route::get('/meat/index','FoodController@meatPage')->name('meat.index');


	Route::get('/seafood/index','FoodController@seafoodPage')->name('seafood.index');

	Route::get('/vegetable/index','FoodController@vegetablePage')->name('vegetable.index');

	Route::get('/curry/index','FoodController@curryPage')->name('curry.index');

	//for the dashboard report and annual report route fro admin

	

	Route::resource('/expense','ExpenseController');

	Route::get('/getExpense','ExpenseController@getExpense')->name('getExpense');

	Route::post('/searchReport','ExpenseController@searchReport')->name('searchReport');
	Route::get('/getOrder','FoodController@getOrder')->name('getOrder');
	Route::post('/getOrderDetailByV','FoodController@getOrderDetailByV')->name('getOrderDetailByV');

	Route::get('/orderDestory/{id}','FoodController@orderDestory')->name('orderDestory');
});

Route::group(['middleware' => ['role:Staff']], function () {
    Route::get('/front/home','FrontendController@homepage')->name('front.home');
	Route::get('/front/meat','FrontendController@meat')->name('front.meat');
	Route::get('/front/curry','FrontendController@curry')->name('front.curry');

	//for table counter getting

	Route::get('/front/getCounter','FrontendController@getCounter')->name('front.getCounter');

	Route::post('/checkout','FrontendController@checkout')->name('front.checkout');

});









//front end route


//checkout



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
