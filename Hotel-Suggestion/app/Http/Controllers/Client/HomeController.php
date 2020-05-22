<?php

namespace App\Http\Controllers\Client;

use App\Entities\Room;
use App\Entities\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('client.home.index');
    }

    public function about()
    {
        return view('client.home.about');
    }

    public function contact()
    {
        return view('client.home.contact');
    }

    public function blog(){
        return view('client.home.blog');
    }
    public function offers(){
        $hotel = Hotel::get();
        return view('client.home.offers',compact('hotel'));
    }

    public function single_listing($id){
        $hotel = Hotel::findOrFail($id);
        // echo $hotel; die;
        
        // echo $room; die;
        // $room = Room::
        return view('client.single_listing', compact('hotel'));
    }

    public function booking(){
        return view('client.booking');
    }
}
