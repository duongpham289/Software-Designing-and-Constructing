<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateHotelRequest;

class HotelController extends Controller
{
    public function index(){
        // DB::table('hotels') //truy vấn cả db
        $hotels = Hotel::paginate(5);
        return view('admin.hotels.index',compact('hotels'));
    }

    public function create(){
        return view('admin.hotels.create');
    }

    public function store(UpdateHotelRequest $r){

        $input = $r->only([
            'name',
            'suggest_price',
            'detail',
            'address'
        ]);

            if ($r->hasFile('images')){
                $imgName=uniqid('hotels').".".$r->images->getClientOriginalExtension();
                $destinationDir = public_path('/files/images/hotels');
                $r->images->move($destinationDir,$imgName);
                $input['images'] = asset("files/images/hotels/{$imgName}");
            }

            //.gitignore ignore mọi thứ (.) thư mục trừ file .gitigore
            // print_r($input);die;
            $hotel = Hotel::create($input);
            return redirect("/admin/hotels");
        // print_r($request->all());die;
    }
    public function edit($hotel){
        //public function edit(hotel $hotel){
        $hotel = Hotel::findOrFail($hotel);
        //if (!$hotel) abort(404);
        return view('admin.hotels.edit', compact('hotel'));
      //<=>
      //return view('admin.hotels.edit',['hotel' => $hotel]);
    }
    public function update(UpdateHotelRequest $r, $hotel){
        $input = $r->only([
            'name',
            'suggest_price',
            'detail',
            'address'
        ]);
        if ($r->hasFile('images')){
            $imgName=uniqid('hotels').".".$r->images->getClientOriginalExtension();
            $destinationDir = public_path('/files/images/hotels');
            $r->images->move($destinationDir,$imgName);
            $input['images'] = asset("files/images/hotels/{$imgName}");
        }

        $hotel = Hotel::findOrFail($hotel);
        $hotel->fill($input);
        $hotel->save();
        return redirect("/admin/hotels");
    }
    public function destroy($hotel){
        $deleted = Hotel::destroy($hotel);  //Trả về 1,2,3 nếu tìm thấy 1,2,3 bản ghi ngược lại là 0
        if ($deleted){
            return response()->json([], 204); //204 No Content: Server đã xử lý thành công request nhưng không trả về bất cứ content nào.
        }
        return response()->json(['message'=>'Khách sạn cần xóa không tồn tại.'], 404); //404 Not Found: Các tài nguyên hiện tại không được tìm thấy nhưng có thể có trong tương lai. Các request tiếp theo của Client được chấp nhận.
    }

    // private function getSubCategories($parentId, $ignoreId =null)
    // {
    //     $categories = Category::whereParentId($parentId)
    //     ->where('id','<>', $ignoreId)
    //     ->get();
    //     $categories->map(function($category) use($ignoreId){ // Đệ quy dừng khi $categories = NULL , map : lặp tất cả trong cate tìm đến sub của nó
    //         $category->sub = $this->getSubCategories($category->id, $ignoreId); // Tìm parentId, gọi $ignoreId vào đệ quy
    //         // print_r($categories->toArray());
    //         return $category;
    //     });
    //     return $categories;
    // }



}

