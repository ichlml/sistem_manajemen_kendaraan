<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Acara <?=$row->nopol?></title>
</head>
<style>
    body{
        margin-top: 0.25cm;
        margin-left: 2cm;
        margin-right: 2.09cm;
        margin-bottom: 0.5cm;
        font-family: "Times New Roman", Times, serif;
        font-size: 12px;
        text-align: justify;
    }
</style>
<body>

    <p> <center> BERITA  ACARA  SERAH  TERIMA <br>
    PENGGUNAAN KENDARAAN DINAS PERORANGAN<br>
    MILIK PEMERINTAH KABUPATEN KUDUS <br> <strong> Nomor : </strong><?=$row->no_ba_pinjam?> </center>
    </p>
    <br> <br>
    <p>Pada hari ini <?= longdate_indo($row->tgl_pinjam) ?> yang bertanda tangan dibawah ini  :</p>
    
    <ol type="I">
        <li>
            <table>
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$pengelola->nama_pengelola?></td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?=$pengelola->nip_pegelola?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?=$pengelola->jabatan?></td>
                    </tr>
                    <tr>
                        <td>OPD</td>
                        <td>:</td>
                        <td><?=$pengelola->nama_opd?></td>
                    </tr>
                </tbody>
            </table>
        </li>
        <p>Bertindak dalan jabatannya selaku Pengguna/Kuasa Pengguna Barang dan selanjutnya  disebut  PIHAK  PERTAMA.</p>
        <li>
        <table>
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$row->nama_peminjam?></td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td>:</td>
                        <td><?=$row->nip_pemakai?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?=$row->jabatan_peminjam?></td>
                    </tr>
                    <tr>
                        <td>OPD</td>
                        <td>:</td>
                        <td><?=$row->nama_opd?></td>
                    </tr>
                </tbody>
            </table>
        </li>
        <p>selanjutnya  disebut  PIHAK  KEDUA</p>
    </ol>
<p>Para pihak telah sepakat mengadakan serah terima penggunaan kendaraan dinas dari PIHAK PERTAMA  kepada  PIHAK KEDUA dengan ketentuan sebagai berikut:</p>

<ul>
    <li>PIHAK PERTAMA menyerahkan kepada PIHAK KEDUA Kendaraan Dinas dengan identitas kendaraan sebagai berikut:</li> 
    <br><table border="1px" width="100%">
        <thead>
            <tr>
                <th>Deskripsi</th>
                <th>Kterangan/Identitas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Jenis / Model</td>
                <td> <?=$row->jenis?></td>
            </tr>
            <tr>
                <td>Merk / Type</td>
                <td> <?=$row->merk?></td>
            </tr>
            <tr>
                <td>No Rangka</td>
                <td> <?=$row->no_rangka?></td>
            </tr>
            <tr>
                <td>No Mesin</td>
                <td> <?=$row->no_mesin?></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td> <?=$row->tgl_perolehan?></td>
            </tr>
            <tr>
                <td>No Polisi</td>
                <td> <?=$row->nopol?></td>
            </tr>
            <tr>
                <td>Warna TNKB</td>
                <td style="color:red;">Merah</td>
            </tr>
        </tbody>
    </table> <br>
    <li>Tujuan Penggunaan Kendaraan Dinas adalah sebagai kendaraan operasional untuk menunjang pelaksanaan kegiatan di Pemerintahan</li>
    <li>Status Kepemilikan Kendaraan Dinas adalah Barang Milik Pemerintah Kabupaten Kudus.</li>
    <li>Apabila Kendaraan tersebut hilang sebagai akibat kelalaian dan penyalahgunaan oleh PIHAK KEDUA maka PIHAK KEDUA akan menyelesaikan hal tersebut sesuai dengan ketentuan perundang-undangan yang berlaku;</li>
    <li>PIHAK KEDUA wajib mengembalikan kendaraan apabila terjadi mutasi/pindah jabatan, pensiun atau alasan kepegawaian lainnya kepada PIHAK PERTAMA; </li>
    <li>Berita Acara ini dibuat dalam rangkap  3  ( tiga ) mempunyai  isi   serta  kekuatan  hukum  yang  sama.</li>
</ul>
<br><br>
<table width="100%" style="text-align:center">
    <tr>
        <td>PIHAK KEDUA</td>
        <td>PIHAK PERTAMA</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td><?=$row->nama_peminjam?></td>
        <td><?=$pengelola->pimpinan?></td>
    </tr>
    <tr>
        <td>NIP. <?=$row->nip_pemakai?></td>
        <td>NIP. <?=$pengelola->nip_pegelola?></td>
    </tr>
</table>
<!-- <div style="page-break-inside:auto;">
    <p style="text-align:right"> Lampiran II</p>
    <p>
        <img  src="img/logo.png" width="70" style="float:left;">
        <img  src="img/logo.png" width="70" style="float:right;">  
    <center>
        <h2 style=""> PEMERINTAH KABPATEN KUDUS <br> USAHA KECIL DAN MENENGAH <br> KABUPATEN KUDUS</h2></center>
        </p>
        <hr>
</div> -->
</body>
</html>


