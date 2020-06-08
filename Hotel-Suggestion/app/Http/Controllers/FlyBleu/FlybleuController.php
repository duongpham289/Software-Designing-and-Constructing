<?php

namespace App\Http\Controllers\FlyBleu;

use App\Entities\Flights;
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
        $res = $client->request('GET', 'airline');
        // dd($res);
        $str=(string)$res->getBody()->getContents();
        // dd($str);
        $flights=json_decode($str);
        // dd($flights);

        // Flights::insert($flights);

        // Flights::insert([
        //     [
        //         'name'=>'Vn3214',
        //         'from'=>'Đà Lạt',
        //         'to'=>'Cao Bằng',
        //         'depature'=>'2020-09-19',
        //         'return'=>null,
        //         'price'=>'1000000',
        //         'time'=>'07:30:00',

        //     ]
        // ]);
        foreach($flights as $item){
        // if (!(isset($item->name))) {
            Flights::insert([$item]);
            // dd($item);
        // }

        }
        //đưa lên csdl

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
    public function book($id)
    {

        return view('flybleu.book');
    }
}
