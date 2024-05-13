<?php

namespace App\Exports;

use App\Models\QrCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AllScan implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
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
    
    public function collection()
    {
        $scan = QrCode::where([
            ['created_at', '>=', $this->start_date],
            ['created_at', '<=', $this->end_date],
        ])->get();
        
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

    public function map($header): array
    {
        return [
            route('scan.qr', $header->uuid),
            $header->no_induk,
            $header->no_lot,
            $header->no_seri,
            $header->no_seri_akhir,
            $header->jenis_tanaman,
            $header->varietas,
            $header->no_kelompok,
            $header->berat_bersih,
            Carbon::parse($header->tanggal_panen)->format('d-m-Y'),
            Carbon::parse($header->tanggal_selesai_uji)->format('d-m-Y'),
            Carbon::parse($header->tanggal_akhir_label)->format('d-m-Y'),
            $header->kadar_air !== null ? $header->kadar_air . '%' : '0%', // Jika tidak null, tambahkan '%', jika null, isi dengan '0%'
            $header->benih_murni !== null ? $header->benih_murni . '%' : '0%',
            $header->camp_var_lain !== null ? $header->camp_var_lain . '%' : '0%',
            $header->kotoran_benih !== null ? $header->kotoran_benih . '%' : '0%',
            $header->benih_tanaman_lain !== null ? $header->benih_tanaman_lain . '%' : '0%',
            $header->daya_berkecambah !== null ? $header->daya_berkecambah . '%' : '0%',
            $header->biji_gulma !== null ? $header->biji_gulma . '%' : '0%',
        ];
    }
}
