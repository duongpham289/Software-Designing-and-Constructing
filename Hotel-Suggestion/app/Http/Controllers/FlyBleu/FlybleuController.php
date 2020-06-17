<?php

namespace App\Http\Controllers\FlyBleu;

use App\Entities\Flights;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class FlybleuController extends Controller
{
    public function index(Flights $flights){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://127.0.0.1:8000/api/',
            // You can set any number of default request options.
        ]);
        $res = $client->request('GET', 'airline');
        // dd($res);
        $str=(string)$res->getBody()->getContents();
        // dd($str);
        $api=json_decode($str);
        // dd($api);
        // $apie =json_encode($api);
        // dd($apie);

        // $flights = F
        // dd($flights);

        // Flights::insert($api);
        // foreach($api as $item){
        // // print_r($item);
        // $name = Flights::find($item->name);
        // // dd($name);
        //     if ( empty ($name) ) {
        //         // dd($item);
        //         $input = $item->only([
        //             'name',
        //             'from',
        //             'to',
        //             'depature',
        //             'return',
        //             'price',
        //             'time'
        //         ]);
        //         // $flights->name = $item->name;
        //         // $flights->from = $item->from;
        //         // $flights->to = $item->to;
        //         // $flights->depature = $item->depature;
        //         // $flights->return = $item->return;
        //         // $flights->price = $item->price;
        //         // $flights->time = $item->time;
        //         // print_r($flights);
        //     // //     // dd($item);
        //     // //     // $item = Flights::create($input);
        //         $flights->fill($input);
        //         $flights->save();
        //         // dd($item);
        //         }
        // }






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
        return view('flybleu.index',compact('api'));
    }
    public function book(Request $request)
    {

        return redirect('http://127.0.0.1:8000',compact('request'));
    }
}
