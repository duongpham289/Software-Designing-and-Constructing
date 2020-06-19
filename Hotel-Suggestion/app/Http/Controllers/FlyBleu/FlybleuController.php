<?php

namespace App\Http\Controllers\FlyBleu;

use App\Entities\Flights;
use App\Entities\oneway_ticket;
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

    // public function postBookticket(Request $req){
    //     $type_ticket = $req->type_ticket;
    //     $id_start_airport = $req->start_airport;
    //     $id_end_airport = $req->end_airport;
    //     $date_departure = $req->date_departure;
    //     $id_luggage = $req->luggage;
    //     // $flight_departure = flight::where([
    //     //     ['id_start_airport',$id_start_airport],
    //     //     ['id_end_airport',$id_end_airport],
    //     //     ['departure_date',$date_departure],
    //     // ])->get();
    //     $airport = airport::get();
    //     $seat = seat::get();
    //     if($type_ticket=="twoway"){
    //         $date_return = $req->date_return;
    //         $flight_return = flight::where([
    //             ['id_start_airport',$id_end_airport],
    //             ['id_end_airport',$id_start_airport],
    //             ['departure_date',$date_return]
    //         ])->get();
    //         return view('customer/buyticket2way',[
    //             'ticket'=>'2',
    //             'flight_departure'=>$flight_departure,
    //             'airport'=>$airport,
    //             'id_luggage'=>$id_luggage,
    //             'seat'=>$seat,
    //             'flight_return'=>$flight_return,
    //         ]);
    //     }
    //     else{
    //         return view('customer/buyticketoneway',[
    //             'ticket'=>'1',
    //             'flight_departure'=>$flight_departure,
    //             'airport'=>$airport,
    //             'id_luggage'=>$id_luggage,
    //             'seat'=>$seat,
    //         ]);
    //     }
    // }

    // public function confirmBuy1(Request $request){
    //     if($request->get('id_seat')) {
    //         $id_flight = $request->get('id_flight_departure');
    //         $id_seat = $request->get('id_seat');
    //         $id_luggage = $request->get('id_luggage');
    //         $flight = flight::where('id', $id_flight)->first();
    //         $luggage = luggage::where('id', $id_luggage)->first();
    //         $price = $flight->price_flight + $luggage->price_luggage;
    //         oneway_ticket::insert([
    //             'id_customer'=>Auth::user()->id,
    //             'id_flight'=>$id_flight,
    //             'id_luggage'=>$id_luggage,
    //             'id_seat'=>$id_seat,
    //             'price'=>$price,
    //             'status_ticket'=>'2',
    //         ]);
    //         return "Vui lòng thanh toán.";
    //     }
    //     return "???";
    // }

    public function store(Request $request){
        $input = $request->only([
            // 'type_ticket',
            'from',
            'to',
            'departure',
        ]);

        oneway_ticket::create($input);
        return redirect("http://127.0.0.1:8001");
    }

}

