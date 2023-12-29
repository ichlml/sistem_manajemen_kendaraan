<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kendaraan Dinas <?=$as->nama_opd?></title>
</head>
<style>
    body{
        margin-top: 0.25cm;
        margin-left: 0cm;
        margin-right: 0cm;
        margin-bottom: 0.5cm;
        font-family: "Times New Roman", Times, serif;
        font-size: 10px;
        text-align: justify;
    }
</style>
<body>
    <p><center> DAFTAR KENDARAAN DINAS <?=strtoupper($as->nama_opd)?></center></p>
 <br><br>
 <table border="1" width="100%">
 <thead>
 <tr>
                        <th>No</th>
                        <th>Nama OPD</th>
                        <th>Nomor Polisi</th>
                        <th>Nama Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>No Penyimpanan</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>CC</th>
                        <th>Tanggal Perolehan</th>
                        <th>No Rangka</th>
                        <th>No Mesin</th>
                        <th>No BPKB</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <?php
                    $no=1;
                    foreach ($roww as $row) {
                ?>
                <tbody>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$row->nama_opd;?></td>
                        <td><?=$row->nopol;?></td>
                        <td><?=$row->nama_kendaraan;?></td>
                        <td><?=$row->jenis;?></td>
                        <td><?=$row->no_penyimpanan;?></td>
                        <td><?=$row->merk;?></td>
                        <td><?=$row->type;?></td>
                        <td><?=$row->cc;?></td>
                        <td><?=date('F Y', strtotime($row->tgl_perolehan))?></td>
                        <td><?=$row->no_rangka;?></td>
                        <td><?=$row->no_mesin;?></td>
                        <td><?=$row->no_bpkb;?></td>
                        <td>Rp. <?=number_format($row->harga, 2);?></td>
                    </tr>
                </tbody>
                <?php } ?>
    </tbody>
 </table>
</body>
</html>