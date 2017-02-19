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

//diversos
Route::get('routes', function() {
    \Artisan::call('route:list');
    return "<pre>".\Artisan::output();
});

Route::group(['prefix' => 'user'], function () {

    Route::auth();//coloco as rotas de auth no prefix user

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/home', 'HomeController@index');
    });
});

Route::name('checkout')
    //->middleware('auth')
    ->get('checkout', 'Site\SiteController@getCheckout');

Route::get('/', 'Site\SiteController@index');
Route::get('all', 'Site\SiteController@getProductsAll');

//rotas para gerir carrinho na sessao
Route::resource('shop', 'Site\SiteController', ['only' => ['index', 'show']]);
Route::resource('cart', 'Site\CartController',
    ['only' =>[
        'index',
        'store',
        'destroy'
    ]]);
Route::get('cart/{id}', 'Site\CartController@update');
Route::post('switchToWishlist/{id}', 'Site\CartController@switchToWishlist');
Route::delete('emptyCart', 'Site\CartController@emptyCart');
Route::resource('wishlist', 'Site\WishlistController');
Route::delete('emptyWishlist', 'Site\WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'Site\WishlistController@switchToCart');

//rotas pelo cmd adminlte
Route::group(['middleware' => 'auth'], function () {

    //Route::auth();
    //Route::get('/home', 'HomeController@index');

    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

//diversos
//Route::get('/', function () {
/*
$banco = "(DESCRIPTION=(ADDRESS = (PROTOCOL = TCP)(HOST=192.168.60.131)(PORT=1521))(CONNECT_DATA=(SID=orcl)))";

$conn = oci_connect('hr', 'oracle', $banco);

if ($conn) {
    print "Connected to Oracle!";
}
*/
//   Debugbar::warning('Watch out…');
//    return view('welcome');
//});
