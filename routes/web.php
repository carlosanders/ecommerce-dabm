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

Route::get('/', 'Site\SiteController@index');

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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
