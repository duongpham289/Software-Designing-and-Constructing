<?php

namespace App\Http\Controllers\FlyBleu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class FlybleuController extends Controller
{
    public function index(){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://127.0.0.1:8000/api/',
            // You can set any number of default request options.
        ]);
        $res = $client->request('GET', 'name');
        $str=(string)$res->getBody()->getContents();
        $flights=json_decode($str);
        // dd($flight);
        // $client = new Client();
        // $res = $client->request('GET', 'https://api.github.com/users/nhieu11');
        // $content = json_decode($res->getBody()->getContents());
        // foreach($str as $key => $value) {
        //     echo "{$key}: {$value}" . PHP_EOL;
        //     echo "<br>";
        // }
        // print_r($reponse->getBody()->getContents());die;
        // if ($request->wantsJson()) {
            // $client = new Client;
            //     $res = $client->request('GET', 'http://127.0.0.1:8000/api/name');

            //         json_decode($res->getBody()->getContents());
            // // }
            // // print_r($res);die;
        return view('flybleu.index',compact('flights'));
    }
}
