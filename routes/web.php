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

// Route::get('/', function () {
//     return view('personal');
// });






// Fornt section all manue route (start)
Route::get('/','Front\FrontController@index');
Route::get('/services','Front\FrontController@services')->name('services');
Route::get('/portfolio','Front\FrontController@portfolio')->name('portfolio');
Route::get('/blog','Front\FrontController@blog')->name('blog');
Route::get('/contact','Front\FrontController@contact')->name('contact');
// Fornt section all manue route (start)


// Admin section all routs (start)
Route::get('/admin/dashboard','Admin\AdminController@index')->name('admin-dashboard');

Route::get('/admin','Admin\LoginController@showLoginForm')->name('admin-login');
Route::post('/admin/login','Admin\LoginController@login')->name('admin-login-action');
Route::get('/admin/logout','Admin\LoginController@logout')->name('admin-logout');

Route::get('/admin/logo','Admin\FrontController@index')->name('admin-logo');
Route::post('/admin/logo/save','Admin\FrontController@generalsettings')->name('admin-logo-action');

Route::get('/admin/header','Admin\FrontController@header')->name('admin-header');
Route::post('/admin/header/save','Admin\FrontController@headeraction')->name('admin-header-action');

Route::get('/admin/banner','Admin\FrontController@banner')->name('admin-banner');
Route::get('/admin/brand/list','Admin\FrontController@brandlist')->name('admin-brand-list');
Route::get('/admin/brand','Admin\FrontController@brand')->name('admin-brand');
Route::post('/admin/brand/save','Admin\FrontController@brandaction')->name('admin-brand-action');
Route::get('/admin/brand/edit/{id}','Admin\FrontController@brandedit')->name('admin-brand-edit');
Route::post('/admin/brand/update/{id}','Admin\FrontController@brandupdate')->name('admin-brand-update');
Route::get('/admin/brand/destroy/{id}','Admin\FrontController@branddestroy')->name('admin-brand-destroy');

Route::get('/admin/portfolioslist','Admin\FrontController@portfolioslist')->name('admin-portfolios-list');
Route::get('/admin/portfolios','Admin\FrontController@portfolios')->name('admin-portfolios');
Route::post('/admin/portfolio/save','Admin\FrontController@portfolioaction')->name('admin-portfolio-action');
Route::get('/admin/portfolios/update/{id}','Admin\FrontController@portfolioupdate')->name('admin-portfolio-edit');
Route::post('/admin/portfolio/updateaction/{id}','Admin\FrontController@portfolioupdateaction')->name('admin-portfolio-update');
Route::get('/admin/portfolios/view/{id}','Admin\FrontController@portfolioview')->name('admin-portfolio-view');
Route::get('/admin/portfolios/destroy/{id}','Admin\FrontController@destroy')->name('admin-portfolios-destroy');

Route::get('admin/category','Admin\CategoryController@index')->name('admin-category');
Route::get('admin/category/create','Admin\CategoryController@create')->name('category-create');
Route::post('/admin/category/store','Admin\CategoryController@store')->name('admin-category-store');
Route::get('/admin/category/edit/{id}','Admin\CategoryController@edit')->name('admin-category-edit');
Route::post('/admin/category/update/{id}','Admin\CategoryController@update')->name('admin-category-update');
Route::get('admin/category/destroy/{id}','Admin\CategoryController@destroy')->name('admin-category-destroy');

Route::get('/admin/service','Admin\ServiceController@index')->name('admin-service');
Route::get('/admin/service/create','Admin\ServiceController@create')->name('admin-create');
Route::post('/admin/service/store','Admin\ServiceController@store')->name('admin-service-create');
Route::get('/admin/service/show/{id}','Admin\ServiceController@show')->name('admin-service-view');
Route::get('/admin/service/edit/{id}','Admin\ServiceController@edit')->name('admin-service-edit');
Route::post('/admin/service/update/{id}','Admin\ServiceController@update')->name('admin-service-update');
Route::get('/admin/service/destroy/{id}','Admin\ServiceController@destroy')->name('admin-service-destroy');

Route::get('/admin/serviceitem','Admin\ServiceitemController@index')->name('admin-serviceitem');
Route::get('/admin/serviceitem/create','Admin\ServiceitemController@create')->name('admin-serviceitem-create');
Route::post('/admin/serviceitem/store','Admin\ServiceitemController@store')->name('admin-serviceitem-store');
Route::get('/admin/serviceitem/show/{id}','Admin\ServiceitemController@show')->name('admin-service-item-view');
Route::get('/admin/serviceitem/edit/{id}','Admin\ServiceitemController@edit')->name('admin-serviceitem-edit');
Route::post('/admin/serviceitem/update/{id}','Admin\ServiceitemController@update')->name('admin-serviceitem-update');
Route::get('/admin/serviceitem/destroy/{id}','Admin\ServiceitemController@destroy')->name('admin-serviceitem-destroy');

Route::get('/admin/price','Admin\PriceController@index')->name('admin-service-price');
Route::get('/admin/price/create','Admin\PriceController@create')->name('price-create');
Route::post('/admin/price/store','Admin\PriceController@store')->name('admin-price-store');
Route::get('/admin/price/show/{id}','Admin\PriceController@show')->name('admin-price-view');
Route::get('/admin/price/edit/{id}','Admin\PriceController@edit')->name('admin-price-edit');
Route::post('/admin/price/update/{id}','Admin\PriceController@update')->name('admin-price-update');
Route::get('/admin/price/destroy/{id}','Admin\PriceController@destroy')->name('admin-price-destroy');

Route::get('/admin/currency','Admin\CurrencyController@index')->name('admin-currency');
Route::get('/admin/currency/create','Admin\CurrencyController@create')->name('currency-create');
Route::post('/admin/currency/store','Admin\CurrencyController@store')->name('admin-currency-store');
Route::get('/admin/currency/edit/{id}','Admin\CurrencyController@edit')->name('admin-currency-edit');
Route::post('/admin/currency/update/{id}','Admin\CurrencyController@update')->name('admin-currency-update');
Route::get('admin/currency/destroy/{id}','Admin\CurrencyController@destroy')->name('admin-currency-destroy');

Route::get('admin/chooseus','Admin\ChooseusController@index')->name('admin-chooseus');
Route::post('/admin/chooseus/update','Admin\ChooseusController@update')->name('admin-chooseus-update');


Route::get('/admin/footer','Admin\FooterController@index')->name('admin-footer');
Route::post('/admin/footer/update','Admin\FooterController@update')->name('admin-footer-update');

Route::get('/admin/contact','Admin\ContactController@index')->name('admin-contact');
Route::post('/admin/contact/update','Admin\ContactController@update')->name('admin-contact-update');

Route::get('/admin/social','Admin\FooterController@social')->name('admin-social');
Route::post('/admin/footer/socialaction','Admin\FooterController@socialaction')->name('admin-footer-update-social');
// Admin section all routs (end)


// our goal all routes(start)
Route::get('admin/ourgoal','Admin\OurgoalsController@index')->name('admin-ourgoal');
Route::get('admin/ourgoal/create','Admin\OurgoalsController@create')->name('admin-ourgoal-create');
Route::post('admin/ourgoal/store','Admin\OurgoalsController@store')->name('admin-ourgoal-store');
Route::get('admin/ourgoal/edit/{id}','Admin\OurgoalsController@edit')->name('admin-ourgoal-edit');
Route::post('admin/ourgoal/update/{id}','Admin\OurgoalsController@update')->name('admin-ourgoal-update');
Route::get('/admin/ourgoal/destroy/{id}','Admin\OurgoalsController@destroy')->name('admin-ourgoal-destroy');

// our goal all routes(start)





// Route::prefix('/')->group(function() {
// });



Route::get('test','TestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


