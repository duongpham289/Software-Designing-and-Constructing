<?php

namespace App\Http\Controllers\Admin;
// use App\Entities\Users;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Account;
class UserController extends Controller
{
    public function index(){

        // $users = DB::table('users')->whereName('Hieu')->update([
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'email' => 'abcd@gmail.com',
        //     'name' => 'Hieu Bui',
        // ]);
        // $users = DB::table('users')->select(['id','first_name','last_name','address','phone','nationality']);
        $users = User::get();
        // $accounts = Account::select(['id','email','level'])
        // // ->get();

        // $accounts = DB::table('account')->select(['id','email','level'])->get();

        //$users = DB::table('users')->select(['id','name','email','address'])
        // $users = User::select(['id','name','email','address'])
        // ->get();
        // $users = DB::table('users')->select(['id','first_name','last_name','address','phone','nationality']);
        // $users = Users::select(['id','first_name','last_name','address','phone','nationality'])
        // ->get();
        // $accounts = Account::select(['id','email','level'])
        // ->get();
        $accounts = Account::get();

        // $accounts = Users::select(['id','email','level'])
        // ->get();
        // ->where('email','=','%o@mail.com%')
        //->whereId('2')
        //->whereName('abc')
        //->whereEmailVerifieldAt('abc')
        //->where('id','>','2') // = > < >= <= <> like
        //->limit(2)->offset(1) // bỏ qua
        //=
        //->skip(1)->take(2)
        //->get(); //lấy ra dạng mảng
        //->first(); //lấy ra chính xác 1 cái
        // print_r($users);
        // DB::table('users')->insert([
        //     'name'=>'Boss',
        //     'email'=>'boss@mail.com',
        //     'password'=>'123123123',
        // ]);
        // $users = DB::table('users')->where('email','=','boss@mail.com')->first();
        // print_r($users);
        // die;


        return view('admin.users.index',[
            'accounts' => $accounts
        ]);

    }
    public function create(){
        return view('admin.users.create');
    }
    public function store(UpdateUserRequest $request){
        $input = $request->only([
            'name',
            'email',
            'password',
            'level',
        ]);
        $account = Account::create($input);
        return redirect("/admin/users/{$account->id}/edit");
    }
    public function edit($account){
        $account = Account::findOrFail($account);
        return view('admin.users.edit',compact('account'));
    }
    public function update(UpdateUserRequest $request, $account){
        $input = $request->only([
            'email',
            'name',
            'password',
            'level',
        ]);
        $account = Account::findOrFail($account);
        $account->fill($input);
        $account->save();
        return back();
    }
    public function destroy($account){
        $deleted = Account::destroy($account);
        if($deleted){
            return response()->json([], 204);
        }
        return response()->json(['message'=>'Sản phẩm cần xóa không tồn tại.'], 404);
    }
}
