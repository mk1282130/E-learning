<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function editProfile($id)
    {
        $user = User::find($id);
        return view('editProfile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->save();

        return redirect()->route('profile', compact('id'));
    }

    public function addAdmin()
    {
        return view('admin.addAdmin');
    }

    public function saveAdmin(Request $request)
    {
        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user['is_admin'] = '1';
        $user->save();
        return redirect('/users');

        // return User::create([
        //     'first_name' => $data['first_name'] = $request->input('first_name'),
        //     'last_name' => $data['last_name'] = $request->input('last_name'),
        //     'email' => $data['email'] = $request->input('email'),
        //     'password' => Hash::make($data['password']) = $request->input('password'),
        //     $date['is_admin']='1',
        // ]);
    }

    public function category()
    {
        return view('admin.category');
    }

    public function follow($id)
    {
        $user = User::find($id);
        Auth::user()->following()->save($user);
        return back();
    }

    public function unfollow($id)
    {
        auth()->user()->following()->detach($id);
        // detach: 中間テーブルからデータを削除
        return back();
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return back();
    }
}
