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
      
        $client = new Client();


     $api_url = 'https://type.fit/api/quotes';

     
     
        $json_data = file_get_contents($api_url);
        $response_data = json_decode($json_data);
        return $response_data;

    }

    public function Get_Picture($name){

$client = new Client();

$rs=Http::get('https://en.wikipedia.org/w/api.php?action=query&prop=pageimages&format=json&piprop=original&titles='.$name);

     return $rs;
        
    }
}
