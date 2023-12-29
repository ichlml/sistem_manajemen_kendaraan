<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Pemeliharaan Kendaraan <?=$row->nopol?></title>
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

    <p> <center> KARTU PEMELIHARAAN KENDARAAN DINAS </center>
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
                        <td>NO KENDARAAN</td>
                        <td>:</td>
                        <td><?=$row->nopol?></td>
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
                        <th>Jenis Pemeliharaan</th>
                        <th>Tanggal</th>
                        <th>QTY</th>
                        <th>Satuan</th>
                        <th>Biaya / Satuan</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <?php
                    $no=1;
                    foreach ($data as $row) {
                ?>
                <tbody>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$row->jenis_pemeliharaan;?></td>
                        <td><?=date('d F Y', strtotime($row->tgl_pemeliharaan))?></td>
                        <td><?=$row->qty;?></td>
                        <td><?=$row->satuan;?></td>
                        <td>Rp. <?=number_format($row->anu, 2);?></td>
                        <td>Rp. <?=number_format($row->total, 2);?></td>
                    </tr>
                </tbody>
                <?php } ?>
</body>
</html>



