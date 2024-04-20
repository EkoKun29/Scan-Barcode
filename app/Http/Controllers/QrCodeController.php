<?php

namespace App\Http\Controllers;

use App\Models\QrCode;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    public function index(){
        $scan = QrCode::query()->orderby('id','desc')->paginate(10);

        return view('scan.index', compact('scan'));
    }

    public function create(){
        // return view('user.create');
    }

    public function store(Request $request){
        $scan = new QrCode();
        $scan->no_induk = $request->nama;
        $scan->no_lot = $request->email;
        $scan->no_seri = $request->role;
        $scan->save();

        return redirect()->route('scan.index')->with('success', 'User berhasil di tambahkan');
    }
}
