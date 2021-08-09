<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use App\Http\Controllers\TestController;
use Procfile;


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
  
 /*   $client = new GuzzleHttp\Client();
    $res = $client->get('https://type.fit/api/quotes');
   //echo $res->getStatusCode(); // 200
    //echo $res->getBody();
    if ($res->getStatusCode() == 200) { // 200 OK
// $res->getBody()->getContents();
echo 'true';
    }
   // echo $res;
    //print_r($res);
    foreach ($res as $a  ) {
        echo($a);
        echo "<br>";
    }
    echo $res->getBody();

    //echo $res;*/
    $users = DB::table('why_motivation')->get();
    $long_stories = DB::table('long_stories')->get();
   //foreach ( $users as $a )
//print_r( $a);
    return view('welcome',['users'=>$users,
    'long_stories'=>$long_stories
]);
});
Route::get('/c', 'TestController@contact');
Route::get('/GetMaqoloat', 'MaqolatController@GetMaqolat');
Route::get('/GetMaqoloat/{name}', 'MaqolatController@Get_Picture');