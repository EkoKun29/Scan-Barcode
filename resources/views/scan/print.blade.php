<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Inventaris</title>
    <style>
        * {
            font-family: 'Times New Roman';
        }

        .border {
            text-align: center;
            border: 2px solid #000; /* Border style */
            padding: 3px; /* Padding for the frame effect */
            display: inline-flex; /* Mengubah display menjadi inline-flex */
            align-items: center; /* Mengatur konten berada di tengah vertikal */
            width: 59mm; /* Lebar keseluruhan konten */
            height: 36mm; /* Tinggi keseluruhan konten */
        }

        .centered {
            text-align: center;
            border: 2px solid #000; 
            display: flex; /* Mengubah display menjadi flex */
            align-items: center; /* Mengatur konten berada di tengah vertikal */
            flex-direction: row; /* Mengatur tata letak menjadi horizontal */
            justify-content: space-between; /* Menempatkan elemen di sepanjang sumbu utama */
            width: 22mm; /* Menyesuaikan lebar dengan konten utama */
            height: 35mm; /* Tinggi keseluruhan konten */
        }

        .logo-container {
            padding:2px; /* Padding untuk logo dan teks */
            border-right: 2px solid #000; /* Garis pemisah */
            font-size: 6px;
        }

        .logo {
            width: 15mm; /* Lebar logo */
            height: auto; /* Tinggi logo menyesuaikan proporsinya */
        }

        .text p{
            font-size: 12px; /* Ukuran font teks */
            margin-bottom: 4px;
            margin-left: 1px;
            color: black;
            font-weight: bold;
        }

        .sub_text p{
            font-size: 14px; /* Ukuran font teks */
            margin: 0px;
            color: black;
            font-weight: bold;
        }

        .nomor p {
            text-align: center;
            align-items: center;
            border: 1px solid #000;
            color: black;
            font-size: 12px;
            margin-right: 2.5px;
        }

        .barcode {
            text-align: center;
            align-items: center; /* Mengatur konten berada di tengah vertikal */
            color: black;
            margin-right: 1px;
            margin-bottom: 0px;
            width: 15mm; /* Lebar nomor barcode */
            height: 15mm; /* Tinggi nomor barcode */
            padding-right: 70px;
            padding-bottom: 81px;
            padding-left: 1.7px;
        }

        @media print {
            .hidden-print,
            .hidden-print * {
                display: none !important;
            }
        }
    </style>
</head>
<body>
<img src="https://quickchart.io/chart?chs=139x139&cht=qr&chl=http://127.0.0.1:8000/scan/{{ $scan->uuid }}"/>

<script>
        window.print();
    </script>
</body>
</html>

@push('js')

@endpush