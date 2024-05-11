<style>
    table {
        width: auto;
        border-collapse: collapse;
        margin: 0 auto; 
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    .red {
        background-color: #E0115F;
        color: white;
    }
    .green {
        background-color: #32CD32;
        color: white;
    }
    .yellow {
        background-color: yellow;
    }
    .header-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.navbar-brand-image {
    width: 100px;
    height: auto;
    margin-right: 20px;
    margin-left: -60px;
}

.header-text {
    display: flex;
    flex-direction: column;
}

.header-text h2, .header-text h3, .header-text span {
    margin: 5px 0; /* Atur margin atas dan bawah menjadi lebih kecil */
}

.header-text h3{
    text-align: center;
}

@media only screen and (max-width: 600px) {
    .navbar-brand-image {
        margin-right: 5px;
    }
    .header-text h2 {
        font-size: 14px;
        margin: 5px 0;
    }
    .header-text h3 {
        font-size: 10px;    
        margin: 5px 0;
    }
    .header-text span {
        font-size: 11px;
        margin: 5px 0;
    }
    .header-text h2, .header-text h3, .header-text span {
        margin: 5px 0; /* Atur margin atas dan bawah */
        text-align: center;
}

}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BENIH BINA BERSERTIFIKAT</title>
<div class="header-container">
    <img src="{{ asset('assets/img/logo.png') }}" width="100" height="auto" alt="Logo Aliansyah" class="navbar-brand-image">
    <div class="header-text">
        <h2>BENIH BINA BERSERTIFIKAT</h2>
        <h3>Nomor : {{ $qrCode->no_lot }}</h3>
        <h2>PT. ARINDO UTAMA PERKASA</h2>
        <span>Alamat: Jl. Jakenan - Winong KM. 03 Jakenan - Pati</span>
    </div>
</div>
<hr style="border: 2px solid black;">
</head>
<body>
<h3 style="text-align: center;">INFORMASI BENIH UNGGUL BERSERTIFIKAT</h3>
<table>
    <tr>
        <td class="red">Jenis Tanaman</td>
        <td class="green">{{ $qrCode->jenis_tanaman }}</td>
    </tr>
    <tr>
        <td class="red">Kelas Benih</td>
        <td class="green">{{ $qrCode->kelas_benih }}</td>
    </tr>
    <tr>
        <td class="red">Varietas</td>
        <td class="green">{{ $qrCode->varietas }}</td>
    </tr>
    <tr>
        <td class="red">No. Kelompok</td>
        <td class="green">{{ $qrCode->no_kelompok }}</td>
    </tr>
    <tr>
        <td class="red">Berat Bersih</td>
        <td class="green">{{ $qrCode->berat_bersih }}</td>
    </tr>
    <tr>
        <td class="red">No. Seri Awal</td>
        <td class="green">{{ $qrCode->no_seri }}</td>
    </tr>
    <tr>
        <td class="red">No. Seri Akhir</td>
        <td class="green">{{ $qrCode->no_seri_akhir }}</td>
    </tr>
    <tr>
        <td class="red">Tgl. Panen</td>
        <td class="green">{{ \Carbon\Carbon::parse($qrCode->tanggal_panen)->format('d-m-Y') }}</td>
    </tr>
    <tr>
        <td class="red">Tgl. Selesai Uji</td>
        <td class="green">{{ \Carbon\Carbon::parse($qrCode->tanggal_selesai_uji)->format('d-m-Y') }}</td>
    </tr>
    <tr>
        <td class="red">Tgl. Akhir Label</td>
        <td class="green">{{ \Carbon\Carbon::parse($qrCode->tanggal_akhir_label)->format('d-m-Y') }}</td>
    </tr>
    <tr>
        <td class="red">No. Induk</td>
        <td class="green">{{ $qrCode->no_induk }}</td>
    </tr>
    <tr>
        <td class="red">Kadar Air</td>
        <td class="yellow">{{ $qrCode->kadar_air }} %</td>
    </tr>
    <tr>
        <td class="red">Benih Murni</td>
        <td class="yellow">{{ $qrCode->benih_murni }} %</td>
    </tr>
    <tr>
        <td class="red">Camp Var. Lain</td>
        <td class="yellow">{{ $qrCode->camp_var_lain }} %</td>
    </tr>
    <tr>
        <td class="red">Kotoran Benih</td>
        <td class="yellow">{{ $qrCode->kotoran_benih }} %</td>
    </tr>
    <tr>
        <td class="red">Benih Tanaman Lain / Biji Gulma</td>
        <td class="yellow">{{ $qrCode->benih_tanaman_lain }} %</td>
    </tr>
    <tr>
        <td class="red">Daya Berkecambah</td>
        <td class="yellow">{{ $qrCode->daya_berkecambah }} %</td>
    </tr>
</table>
</body>
<br>
<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PT ARINDO UTAMA PERKASA Tahun 2024</span>
                    </div>
                </div>
            </footer>
</html>
