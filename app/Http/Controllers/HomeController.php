<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        // $auth_id = Auth::user()->id;
        // $users = User::where('is_admin', 1)->where('id', '!=', $auth_id)->get();
        // if(auth()->user()->is_admin==1){
        // // is_admin==1だとAdminユーザとして認識
        // // dd($users);
        //     return view('admin.home', compact('users'));
        // }else{
            return redirect('/users');
        // }
    }
}   
