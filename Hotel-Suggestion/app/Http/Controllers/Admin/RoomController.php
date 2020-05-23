<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Room;
use App\Entities\Hotel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateRoomRequest;

class RoomController extends Controller
{
    public function index(){
        $hotels= Hotel::with('rooms')->get();
        // debugbar()->info($rooms);

        // if ($request->wantsJson()) {  //API
        //     $client = new \GuzzleHttp\Client();
        //     $res = $client->request('GET', 'https://api.github.com/users/nhieu11');
        //     return response()->json([
        //         'name' => json_decode($res->getBody()->getContents())
        //     ]);
        // }


        return view('admin.rooms.index',compact('hotels'));


    }
    public function show(Request $request)
    {
        $rooms = Room::whereHotelId($request->hotel_id)->get();
        return view("admin.rooms.list", compact("rooms"))->render();
    }

    public function create(){
        return view('admin.rooms.create');
    }

    public function store(Request $request){
        $request->validate([
            'parent_id' => 'require',
            'name' => 'name',
        ]);
        $room = new Room();
        $room->name = $request->name;
        $room->parent_id = $request->parent_id;
        $room->save();
        return redirect('/admin/rooms');
    }
    public function edit($id){ //Bắt id trên uri
        $room = Room::findOrFail($id); //Model room , biến lưu bản ghi

        // $room->hotels()->get(); //Trả về 1 query builder

        // Hotel::where('id', $room);

        // $rooms = $this->getSubrooms(0, $id); //Tại view edit, biến lưu kết quả đệ quy, con trỏ $this tham chiếu
        return view('admin.rooms.edit', compact('room')); //compact truyền về view
    }
    public function update(UpdateRoomRequest $r, $room){
        // $request->validate([
        //     'parent_id'
        // ])
        $input = $r->only([
            'type',
            'price',
            'detail ',
            'status',
            ]);

        if ($r->hasFile('images')){
            $imgName=uniqid('rooms').".".$r->images->getClientOriginalExtension();
            $destinationDir = public_path('/files/images/rooms');
            $r->images->move($destinationDir,$imgName);
            $input['images'] = asset("files/images/rooms/{$imgName}");
        }
        $room = Room::findOrFail($room);
        $room->fill($input);
        $room->save();

    return redirect('/admin/rooms');
    }
    public function destroy($room){
        $deleted = Room::destroy($room);
        if($deleted){
            return respone()->json([], 204);
        }
        return response()->json(['message'=>'Phòng cần xóa không tồn tại.'], 404);
    }
}
