<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR KENDARAAN DINAS</title>
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
    <p><center> DAFTAR KENDARAAN DINAS
</center></p>
 <br><br>

 <table border="1" width="100%">
 <thead>
        <tr>
            <th>No</th>
            <th>Nama OPD</th>
            <th>Nomor Polisi</th>
            <th>Nama Kendaraan</th>
            <th>Jenis Kendaraan</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Klasifikasi</th>
            <th>Nama Pemakai</th>
            <th>Jabatan Pemakai</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $no=1;
        foreach ($roww as $row) {
    ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$row->nama_opd;?></td>
            <td><?=$row->nopol;?></td>
            <td><?=$row->nama_kendaraan;?></td>
            <td><?=$row->jenis;?></td>
            <td><?=$row->merk;?></td>
            <td><?=$row->type;?></td>
            <td><?=$row->kondisi;?></td>
            <td><?=$row->nama_peminjam;?></td>
            <td><?=$row->jabatan_peminjam;?></td>
        </tr>
    <?php } ?>
    </tbody>
 </table>
</body>
</html>

