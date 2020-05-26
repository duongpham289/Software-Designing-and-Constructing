<?php

namespace App\Http\Controllers\Client;

use App\Entities\Account;
use App\Http\Controllers\Controller;
use App\Entities\Booking;
use App\Entities\Room;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Booking $room){
        $account=Account::get();
        $room=Room::get();

        return view("client.booking",compact('account','room'));
    }
    public function store(Request $request,$room_id){
        $input = $request->only([
            'account_id',
            'name',
            'phone',
            'email',
            'address',
            'nationality',

        ]);
        $booking = Booking::create($input);
        $room->save;
        $booking->save();

        return view("client.single_listing");
    }

}
