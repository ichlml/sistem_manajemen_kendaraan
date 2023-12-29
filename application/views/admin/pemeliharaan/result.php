<div class="card card-danger">
    <div class="card-header">
        <a href="<?= base_url('laporan/pemeliharaanAd/'.$opd.'/'.$tahun)?>" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Print</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="tabel2">
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
            </table>
        </div>
    </div>
</div>
