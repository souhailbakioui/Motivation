<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use App\Http\Controllers\Auth;


class MaqolatController extends Controller
{
    //
    public function GetMaqolat(){
       // echo 'i am from Conatact ';
        $client = new Client();

     /*   $res = $client->request('GET', 'https://type.fit/api/quotes');
     $rs=Http::get('http://dummy.restapiexample.com/api/v1/employees"');*/
     $api_url = 'https://type.fit/api/quotes';

     
     
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        return $response_data;

    }

    public function Get_Picture($name){
/*$response = Http::withHeaders([
    'x-rapidapi-key' => '8dc8319816msh35e6ae096ea8286p1f71d4jsn8c7bb7a90601',
    'x-rapidapi-host' => 'bing-image-search1.p.rapidapi.com'
])->get("https://bing-image-search1.p.rapidapi.com/images/search",["q"=>$name])->json();*/
$client = new Client();
//$response = $client->request('GET',' https://en.wikipedia.org/w/api.php?action=query&prop=pageimages&format=json')->json();
$rs=Http::get('https://en.wikipedia.org/w/api.php?action=query&prop=pageimages&format=json&piprop=original&titles='.$name);
//$api_url = 'https://nl.wikipedia.org/wiki/Eleanor_Roosevelt';
  //  $response_data = json_decode($json_data);
     return $rs;
        
    }
}
