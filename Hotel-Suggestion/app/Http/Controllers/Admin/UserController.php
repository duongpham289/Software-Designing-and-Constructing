<?php

namespace App\Http\Controllers\Admin;
// use App\Entities\Users;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Entities\Account;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

         $accounts = Account::get();

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
        return redirect("/flybleu");
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
