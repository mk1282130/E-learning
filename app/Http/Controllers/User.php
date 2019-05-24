<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function users()
    {
        $auth_id = Auth::user()->id;
        // 自分のユーザID
        $users = User::where('id', '!=', $auth_id)->get();
        // ↑リストアップされるユーザが自分のIDを除いたものにする
        return view('users', compact('users'));

        AdminとUserを分けるコードを追加する
    }
}
