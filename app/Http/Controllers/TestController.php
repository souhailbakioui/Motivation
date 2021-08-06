<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    //
    public function contact(){
        echo 'i am from Conatact ';
        $client = new Client();
        $res = $client->request('GET', 'https://type.fit/api/quotes');
      $rs=Http::get('https://api.itbook.store/1.0/');
        print_r ($rs->json());
    }
}
