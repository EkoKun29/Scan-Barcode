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
            'No Nota',
            'Tanggal Penjualan',
            'Konsumen',
            'Total',
            'Bank',
        ];
    }

    public function map($header): array
    {
        return [
            $header->no_nota,
            Carbon::parse($header->created_at)->format('d-m-Y'),
            $header->nama_konsumen,
            $header->total,
            $header->bank,
            // $header->bayar,
        ];
    }
}
