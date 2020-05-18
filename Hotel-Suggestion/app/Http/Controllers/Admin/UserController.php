<?php

namespace App\Http\Controllers\Admin;
use App\Entities\Users;
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
<<<<<<< Updated upstream
        // $users = DB::table('users')->select(['id','first_name','last_name','address','phone','nationality']);
        $users = User::select(['id','first_name','last_name','address','phone','nationality'])
        ->get();
        // $accounts = Account::select(['id','email','level'])
        // ->get();

        $accounts = DB::table('account')->select(['id','email','level'])->get();

=======
<<<<<<< Updated upstream
        //$users = DB::table('users')->select(['id','name','email','address'])
        // $users = User::select(['id','name','email','address'])
        // ->get();
=======
        // $users = DB::table('users')->select(['id','first_name','last_name','address','phone','nationality']);
        $users = Users::select(['id','first_name','last_name','address','phone','nationality'])
        ->get();
        // $accounts = Account::select(['id','email','level'])
        // ->get();

        $accounts = DB::table('account')->select(['id','email','level'])->get();

        // $accounts = Users::select(['id','email','level'])
        // ->get();
>>>>>>> Stashed changes
>>>>>>> Stashed changes
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

            // $users = User::with('roles')->get(); //roles vẫn là hàm ở Entities/User.php , lưu trên RAM, tốn bộ nhớ không tốn thời gian query

        // debugbar()->info($users);
        return view('admin.users.index',[
            'users' => $users,
            'accounts' => $accounts
        ]);
    }
    public function create(){
        return view('admin.users.create');
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'full' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
        ]);
        $input = $request->only([
            'email',
            'password',
            'full',
            'address',
            'phone',
        ]);
        $user = User::create($input);
        return redirect("/admin/user/{$user->id}/edit");
    }
    public function edit($account){ // User $user ?
        $account = Account::findOrFail($account);
        return view('admin.users.edit',compact('account'));
    }
    public function update(UpdateUserRequest $request, $account){
        $input = $request->only([
            'email',
            'password',
            'level'
        ]);
        $account = Account::findOrFail($account);
        $user->fill($input);
        $user->save();
        return back();
    }
    public function destroy($user){
        $deleted = User::destroy($user);
        if($deleted){
            return response()->json([], 204);
        }
        return response()->json(['message'=>'Sản phẩm cần xóa không tồn tại.'], 404);
    }
}
