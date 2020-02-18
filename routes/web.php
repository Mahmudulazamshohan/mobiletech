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

use Goutte\Client;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/')->group(function (){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('/category','CategoryController');
    Route::resource('/brand','BrandController');
    Route::resource('/model','ModelController');
    Route::get('/images/{file}','FileResponseController@images')->name('image');
});

Route::get('/test',function (){
    \Illuminate\Support\Facades\Storage::put('/test','https://www.gsmarena.com.bd/images/products/amazon-fire-hd-10-2017.jpg');
//    set_time_limit(100000);
//    $client = new Client();
//    $crawler = $client->request('GET', 'https://www.gsmarena.com.bd/nokia/');
//
//    function added($va){
//        //array_push($urls,$va);
//    }
//
//    $crawler->filter('.product a')->each(function ($node) use ($client){
//        $c = $client->request('GET', $node->attr('href'));
//
//        $y = $c->filter('table tr')->each(function ($e) use ($node,$client){
//            $t=$e->filter('td')->each(function ($a) {
//
//                echo $a->html() .'<br>';
//            });
//
//
//        });
//
//        echo '......................................';
//
//    });


    //dd($crawler->filter('.product > a')->children());
});
