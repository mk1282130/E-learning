<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        return view('user', compact('user'));
    }

    public function users()
    {
        $auth_id = Auth::user()->id;
        // 自分のユーザID
        $users = User::where('is_admin', 0)->where('id', '!=', $auth_id)->get();
        // ↑リストアップされるユーザが自分のIDを除いたものにする
        if(auth()->user()->is_admin==1){
        // is_admin==1だとAdminユーザとして認識
        // dd($users);
            return view('admin.home', compact('users'));
        }else{
            return view('users', compact('users'));
        }
    }
}
