<div class="card card-danger">
    <div class="card-header">
        <a href="<?= base_url('laporan/kapemAd/'.$nopol.'/'.$tahun)?>" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Print</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="tabel2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Polisi</th>
                        <th>Nama OPD</th>
                        <th>Tahun</th>
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
                        <td><?=$row->nopol;?></td>
                        <td><?=$row->nama_opd;?></td>
                        <td><?=$row->tahun;?></td>
                        <td><?=$row->jenis_pemeliharaan;?></td>
                        <td><?=date('d F Y', strtotime($row->tgl_pemeliharaan))?></td>
                        <td><?=$row->qty;?></td>
                        <td><?=$row->satuan;?></td>
                        <td>Rp. <?=number_format($row->anu, 2);?></td>
                        <td>Rp. <?=number_format($row->total, 2);?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
