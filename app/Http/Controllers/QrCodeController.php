<?php

namespace App\Http\Controllers;

use App\Models\QrCode;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use Endroid\QrCode\QrCode as EndroidQrCode;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RekapScan;
use Illuminate\Support\Facades\Response;


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
        $scan->no_seri               = $request->seri_awal;
        $scan->no_seri_akhir         = $request->seri_akhir;
        $scan->jenis_tanaman         = $request->jenis;
        $scan->varietas              = $request->varietas;
        $scan->no_kelompok           = $request->kelompok;
        $scan->berat_bersih          = $request->berat;
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

    public function update(Request $request, string $id)
    {

        $scan = QrCode::findOrFail($id);
        $scan->no_induk              = $request->induk;
        $scan->no_lot                = $request->lot;
        $scan->no_seri               = $request->seri_awal;
        $scan->no_seri_akhir         = $request->seri_akhir;
        $scan->jenis_tanaman         = $request->jenis;
        $scan->varietas              = $request->varietas;
        $scan->no_kelompok           = $request->kelompok;
        $scan->berat_bersih          = $request->berat;
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

        return redirect()->route('scan.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id)
    {
    $scan = QrCode::findOrFail($id); // Find the resource by its ID or throw a 404 error if not found
    $scan->delete(); // Delete the resource
    return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function print($uuid)
    {
        $scan = QrCode::where('uuid', $uuid)->firstOrFail();
        return view('scan.print', compact('scan'));
    }

    public function scan($uuid)
    {
        // Temukan QrCode berdasarkan UUID
        $qrCode = QrCode::where('uuid', $uuid)->firstOrFail();

        return view('scan.show', compact('qrCode'));
    }

    public function download(Request $request)
    {
        $uuid = $request->uuid;

        // Temukan QrCode berdasarkan UUID
        $qrCode = QrCode::where('uuid', $uuid)->firstOrFail();

        // Mengenerate nama file
        $fileName = 'qrcode_' . $qrCode->id . '_data.xlsx';

        // Mengunduh data sebagai file Excel
        return Excel::download(new RekapScan($qrCode->id, $qrCode->uuid), $fileName);
    }

    public function search(Request $request)
{
    if ($request->has('search')) {
        $searchTerm = $request->search;

        $scan = QrCode::where(function ($query) use ($searchTerm) {
            $query->where('no_seri', 'like', '%' . $searchTerm . '%')
            ->orWhere('created_at', 'like', '%' . $searchTerm . '%')
                ->orWhere('no_seri_akhir', 'like', '%' . $searchTerm . '%')
                ->orWhere('jenis_tanaman', 'like', '%' . $searchTerm . '%')
                ->orWhere('varietas', 'like', '%' . $searchTerm . '%')
                ->orWhere('no_kelompok', 'like', '%' . $searchTerm . '%');
        })
        ->paginate(10);

        // Keep the search term when paginating
        $scan->appends(['search' => $searchTerm]);
    } else {

    }

    return view('scan.index', compact('scan'))->with('i', (request()->input('page', 1) - 1) * 10);
}

}