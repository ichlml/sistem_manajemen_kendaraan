<div class="card card-danger">
    <div class="card-header">
        <a href="<?= base_url('laporan/lapKendaopd/'.$id)?>" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Print</a>
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
                        <th>CC</th>
                        <th>Tanggal Perolehn</th>
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
                        <td><?=$row->cc;?></td>
                        <td><?=date('F Y', strtotime($row->tgl_perolehan))?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
