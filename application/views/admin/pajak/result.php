<div class="card card-danger">
    <div class="card-header">
        <a href="<?= base_url('laporan/lapPajakAdmin/'.$id)?>" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Print</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="tabel2">
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
                        <th>Jatuh Tempo Pajak</th>
                    </tr>
                </thead>
                <?php
                    $no=1;
                    foreach ($data as $row) {
                ?>
                <tbody>
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
                        <td><?=date('F Y', strtotime($row->tgl_pajak))?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
