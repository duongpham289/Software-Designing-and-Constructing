<?php

namespace App\Http\Controllers\Client;

use App\Entities\Account;
use App\Entities\Booking;
use App\Entities\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Room $room){
        $account=Account::get();
        // dd($room);

        return view("client.booking",compact('account','room'));
    }
    public function store(Request $request,$room_id){
        $input = $request->only([
            'account_id',
            'room_id',
            'name',
            'phone',
            'email',
            'address',
            'nationality',

        ]);
        $booking = Booking::create($input);
        $booking->save();

        // return redirect("/");
        return view('client.home.success');
    }
}
