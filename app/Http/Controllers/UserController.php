<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(){
        $user = User::query()->orderby('name')->paginate(10);

        return view('user.index', compact('user'));
    }

    public function create(){
        // return view('user.create');
    }

    public function store(Request $request){
        $user = new User();
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('user.index')->with('success', 'User berhasil di tambahkan');
    }
}
