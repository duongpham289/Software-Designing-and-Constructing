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


        $accounts = DB::table('account')->select(['id','name','email','level'])->get();

        // $accounts = Users::select(['id','email','level'])
        // ->get();


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
    public function edit($account){ // User $user ?
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
        // print_r($account);die;
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
