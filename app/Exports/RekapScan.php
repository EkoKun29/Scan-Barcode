<?php

namespace App\Exports;

use App\Models\QrCode;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RekapScan implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    use Exportable;

    private $start_date;
    private $end_date;

    public function __construct($start_date, $end_date)
    {
        $this->start_date = $start_date;
        if ($end_date) {
            $this->end_date   = $end_date;
        } else {
            $this->end_date = now();
        }
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $scan = QrCode::where([
            ['created_at', '>=', $this->start_date],
            ['created_at', '<=', $this->end_date],
        ])->get();
        
        // MENGGABUNGKAN DATA
        $data = collect();

        $data->push($scan);

        $new_data = collect();
        foreach ($data as $key => $value) {
            foreach ($value as $value2) {
                $new_data->push($value2);
            }
        }

        return $new_data;
    }

    public function headings(): array
    {
        return [
            'Link',
            'Nomor Induk',
            'Nomor Lot',
            'No Seri Awal',
            'No Seri Akhir',
            'Jenis Tanaman',
            'Varietas',
            'No Kelompok',
            'Berat Bersih',
            'Tanggal Panen',
            'Tanggal Selesai Uji',
            'Tanggal Akhir Label',
            'Kadar Air',
            'Benih Murni',
            'Campuran Var Lain',
            'Kotoran Benih',
            'Benih Tanaman Lain',
            'Daya Berkecambah',
            'Biji Gulma',
        ];
    }

    public function map($scan): array
{
    return [
        $scan->no_induk,
        $scan->no_lot,
        $scan->no_seri,
        $scan->no_seri_akhir,
        $scan->jenis_tanaman,
        $scan->varietas,
        $scan->no_kelompok,
        $scan->berat_bersih,
        Carbon::parse($scan->tanggal_panen)->format('d-m-Y'),
        Carbon::parse($scan->tanggal_selesai_uji)->format('d-m-Y'),
        Carbon::parse($scan->tanggal_akhir_label)->format('d-m-Y'),
        $scan->kadar_air !== null ? $scan->kadar_air . '%' : '0%', // Jika tidak null, tambahkan '%', jika null, isi dengan '0%'
        $scan->benih_murni !== null ? $scan->benih_murni . '%' : '0%',
        $scan->camp_var_lain !== null ? $scan->camp_var_lain . '%' : '0%',
        $scan->kotoran_benih !== null ? $scan->kotoran_benih . '%' : '0%',
        $scan->benih_tanaman_lain !== null ? $scan->benih_tanaman_lain . '%' : '0%',
        $scan->daya_berkecambah !== null ? $scan->daya_berkecambah . '%' : '0%',
        $scan->biji_gulma !== null ? $scan->biji_gulma . '%' : '0%',
    ];
}

}
