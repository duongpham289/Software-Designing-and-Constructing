<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Room;
use App\Entities\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function index(Request $request){
        $rooms = Room::get();
        // debugbar()->info($rooms);

        // if ($request->wantsJson()) {  //API
        //     $client = new \GuzzleHttp\Client();
        //     $res = $client->request('GET', 'https://api.github.com/users/nhieu11');
        //     return response()->json([
        //         'name' => json_decode($res->getBody()->getContents())
        //     ]);
        // }

        // $rooms = $this->getSubrooms(0); // Bắt thằng gốc
        //  foreach ($rooms as $room ) {
        //      $room->sub = room::whereParentId($room->id)->get();
        //  }
        //  print_r($rooms->toArray());die;
        return view('admin.rooms.index',compact('rooms'));


    }

    // private function getSubrooms($parentId, $ignoreId =null)
    // {
    //     $rooms = room::whereParentId($parentId)
    //     ->where('id','<>', $ignoreId)
    //     ->get();
    //     $rooms->map(function($room) use($ignoreId){ // Đệ quy dừng khi $rooms = NULL , map : lặp tất cả trong cate tìm đến sub của nó
    //         $room->sub = $this->getSubrooms($room->id, $ignoreId); // Tìm parentId, gọi $ignoreId vào đệ quy
    //         // print_r($rooms->toArray());
    //         return $room;
    //     });
    //     return $rooms;
    // }

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
        return redirect('admin.rooms');
    }
    public function edit($id){ //Bắt id trên uri
        $room = Room::findOrFail($id); //Model room , biến lưu bản ghi

        $room->products()->get(); //Trả về 1 query builder

        Hotel::where('id', $room);

        // $rooms = $this->getSubrooms(0, $id); //Tại view edit, biến lưu kết quả đệ quy, con trỏ $this tham chiếu
        return view('admin.rooms.edit', compact('room')); //compact truyền về view
    }
    public function update(Request $request, Room $room){
        // $request->validate([
        //     'parent_id'
        // ])
    $room->fill($request->only(['parent_id', 'name'])); //gom tất cả những thứ đưa từ view lên
    $room->save();

    return back()->with('success','room Updated.');
    }
    public function destroy($room){
        $deleted = Room::destroy($room);
        if($deleted){
            return respone()->json([], 204);
        }
        return response()->json(['message'=>'Sản phẩm cần xóa không tồn tại.'], 404);
    }
}
