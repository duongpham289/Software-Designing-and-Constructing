<?php

namespace App\Http\Controllers\Admin;

use App\Entities\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateHotelRequest;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        // DB::table('hotels') //truy vấn cả db
        $hotels = Hotel::get();
        return view('admin.hotels.index',compact('hotels'));
    }

    public function create(){
        return view('admin.hotels.create');
    }

    public function store(Request $request){
        $request->validate([
            'category_id' => 'required',
            'sku' => 'required',
            'name' => 'required|',
            'price' =>'required|numeric|min:0',
            'img' => 'sometimes|image',
        ]);
        $input = $request->only([
            'category_id',
            'sku',
            'name',
            'price',
            'featured',
            'detail',
            'description',
        ]);

            if ($request->hasFile('img')){
                $imgName=uniqid('img'). '.' . $request->img->getClientOriginalExtension();  //Đổi tên unique cho ảnh để không trùng ,getClientOriginalExtension : lấy ra phần đuôi (tên file mở rộng)
                $destinationDir = public_path('/files/images/hotels_img'); //Directory , public_path : Trả tới địa chỉ đang có trên pc (hardaddress)
                $request->img->move($destinationDir,$imgName);  //move($Location,$filesName), $Location: Là thư mục chứa file upload lên Sever, $filesName: Là tên mới của file.
                $input['avatar'] = asset("/files/images/hotels_img/{$imgName}"); //asset trả tới địa chỉ đường dẫn trên server(browser) (softaddress)
            }

            //.gitignore ignore mọi thứ (.) thư mục trừ file .gitigore
            // print_r($request ->all());
            $hotel = Hotel::create($input);
            return redirect("/admin/hotels/{$hotel->id}/edit");
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
    public function update(UpdateHotelRequest $request, $hotel){
        $input = $request->only([
            'category_id',
            'sku',
            'name',
            'price',
            'img',
            'featured',
            'detail',
            'description',
        ]);
        $hotel = Hotel::findOrFail($hotel);
        $hotel->fill($input);
        $hotel->save();
        return back();
    }
    public function destroy($hotel){
        $deleted = Hotel::destroy($hotel);  //Trả về 1,2,3 nếu tìm thấy 1,2,3 bản ghi ngược lại là 0
        if ($deleted){
            return response()->json([], 204); //204 No Content: Server đã xử lý thành công request nhưng không trả về bất cứ content nào.
        }
        return response()->json(['message'=>'Sản phẩm cần xóa không tồn tại.'], 404); //404 Not Found: Các tài nguyên hiện tại không được tìm thấy nhưng có thể có trong tương lai. Các request tiếp theo của Client được chấp nhận.
    }

    private function getSubCategories($parentId, $ignoreId =null)
    {
        $categories = Category::whereParentId($parentId)
        ->where('id','<>', $ignoreId)
        ->get();
        $categories->map(function($category) use($ignoreId){ // Đệ quy dừng khi $categories = NULL , map : lặp tất cả trong cate tìm đến sub của nó
            $category->sub = $this->getSubCategories($category->id, $ignoreId); // Tìm parentId, gọi $ignoreId vào đệ quy
            // print_r($categories->toArray());
            return $category;
        });
        return $categories;
    }

}

