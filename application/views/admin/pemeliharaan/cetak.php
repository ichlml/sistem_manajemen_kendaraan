<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemeliharaan Dinas <?=$row->nama_opd?></title>
</head>
<style>
    body{
        margin-top: 0.25cm;
        margin-left: 0cm;
        margin-right: 0cm;
        margin-bottom: 0.5cm;
        font-family: "Times New Roman", Times, serif;
        font-size: 12px;
        text-align: justify;
    }
</style>
<body>

    <p> <center> DAFTAR PEMELIHARAAN KENDARAAN DINAS <?=$row->nama_opd?> </center>
    </p>
    <br> <br>
            <table>
                <tbody>
                    <tr>
                        <td>Nama OPD</td>
                        <td>:</td>
                        <td><?=$row->nama_opd?></td>
                    </tr>
                    <tr>
                        <td>TAHUN</td>
                        <td>:</td>
                        <td><?=$row->tahun?></td>
                    </tr>
                </tbody>
            </table>

    <br><table border="1px" width="100%">
    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nopol</th>
                        <th>Nama Kendaran</th>
                        <th>Jenis</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>Tahun Perolehan</th>
                        <th>No Mesin</th>
                        <th>Nama Pemakai</th>
                        <th>Biaya Pemeliharaan 1 Tahun</th>
                    </tr>
                </thead>
                <?php
                    $no=1;
                    foreach ($data as $row) {
                ?>
                <tbody>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$row->nopol;?></td>
                        <td><?=$row->nama_kendaraan;?></td>
                        <td><?=$row->jenis;?></td>
                        <td><?=$row->merk;?></td>
                        <td><?=$row->type;?></td>
                        <td><?=$row->tgl_perolehan?></td>
                        <td><?=$row->no_mesin;?></td>
                        <td><?=$row->nama_peminjam;?></td>
                        <td>Rp. <?=number_format($row->total, 2);?></td>
                    </tr>
                </tbody>
                <?php } ?>
</body>
</html>



