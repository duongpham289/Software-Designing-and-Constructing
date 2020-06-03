<?php

namespace App\Http\Controllers\Client;

use App\Entities\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Hotel;
use App\Entities\Room;
use App\Entities\Account;


class HomeController extends Controller
{

    public function index()
    {
        $hotel = Hotel::get();
        $comments = Comment::with('accounts')->get();
        // $cm=$comments->accounts()->get();
        // dd($comments);
        return view('client.home.index',compact('hotel','comments'));
    }

    public function about()
    {
        $hotel = Hotel::inRandomOrder()->limit(1)->get();
        return view('client.home.about',compact('hotel'));
    }

    public function contact()
    {
        return view('client.home.contact');
    }

    public function blog(){

        return view('client.home.blog');
    }
    public function offers(){
        $hotel = Hotel::limit(6)->get();
        return view('client.home.offers',compact('hotel'));
    }

    public function single_listing($id){
        $hotel = Hotel::findOrFail($id);
        $comments = Comment::with('accounts','hotels')->where('hotel_id',$id)->get();
        // dd($comments);
        // echo $hotel; die;
        // echo $room; die;
        // $room = Room::
        return view('client.single_listing', compact('hotel','comments'));
    }

    public function booking(){
        return view('client.booking');
    }
    public function comment(Request $request,$hotel_id){
        $input = $request->only([
            'account_id',
            'hotel_id',
            'detail',
            'commenttime',

        ]);
        $comment = Comment::create($input);
        $comment->save();

        return back();
    }



}
