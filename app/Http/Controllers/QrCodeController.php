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
        $scan                        = new QrCode();
        $scan->no_induk              = $request->induk;
        $scan->no_lot                = $request->lot;
        $scan->no_seri               = $request->seri;
        $scan->jenis_tanaman         = $request->jenis;
        $scan->varietas              = $request->varietas;
        $scan->no_kelompok           = $request->kelompok;
        $scan->berat_bersih          = $request->bersih;
        $scan->tanggal_panen         = $request->panen;
        $scan->tanggal_selesai_uji   = $request->uji;
        $scan->tanggal_akhir_label   = $request->akhir;
        $scan->kadar_air             = $request->kadar;
        $scan->benih_murni           = $request->benih;
        $scan->camp_var_lain         = $request->campuran;
        $scan->kotoran_benih         = $request->kotoran;
        $scan->benih_tanaman_lain    = $request->benih_lain;
        $scan->daya_berkecambah      = $request->daya;
        $scan->biji_gulma            = $request->biji;
        $scan->save();
        return redirect()->route('scan.index')->with('success', 'User berhasil di tambahkan');
    }
}
