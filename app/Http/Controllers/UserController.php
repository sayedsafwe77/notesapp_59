<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // crud create read update delete
    public function index(){
        // eloquent model ( ORM )
        $users = User::get();
        return view('users',compact('users'));
    }
    public function destroy($id){
        $user =  User::find($id);
        $user->delete();
        return redirect()->route('user.home');
    }
    public function create(){
        return view('create_user');
    }
    public function show($id){
        $user = Product::get();
        dd($user);
        return view('show_user',compact('user'));
    }
    public function store(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.home');
    }
    public function update($id){
        $user = User::find($id);
        return view('update_user',compact('user'));
    }
    public function saveUpdate(Request $request,$id){
        $user = User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.home');
    }

}
