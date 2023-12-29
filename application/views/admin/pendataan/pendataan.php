<section class="section">
    <div class="section-header">
            <h1>Kendaraan</h1>
          </div>
    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header"><h4>List Of Vehicle</h4></div>
                <div class="card-body">
                    <!-- <a href="<?=base_url('admin/addPendataan')?>" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>
                    <br><br> -->
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabel1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Polisi</th>
                                <th>Nama Kendaraan</th>
                                <th>Nama OPD</th>
                                <th>Status Pengguna</th>
                                <th>no BA Pinjam</th>
                                <th>Nama Peminjam</th>
                                <th>NIP Pemakai</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Pajak</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if ($data == null)
                            {
                                echo "<tr>";
                                echo "<td class=\"text-center\" colspan=\"6\">Data Kosong</td>";
                                echo "</tr>";
                            }
                            $no = 1;
                            foreach ($data as $du) {
                        ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$du->nopol?></td>
                                <td><?=$du->nama_kendaraan?></td>
                                <td><?=$du->nama_opd?></td>
                                <td><?=$du->status_penggunaan?></td>
                                <td><?=$du->no_ba_pinjam?></td>
                                <td><?=$du->nama_peminjam?></td>
                                <td><?=$du->nip_pemakai?></td>
                                <td><?=date('d F Y', strtotime($du->tgl_pinjam))?></td>
                                <td><?=date('F Y', strtotime($du->tgl_pajak))?></td>
                              <td>
                              <br>
                                    <a href="<?=site_url('admin/editPendataan/').$du->id_pendataan?>" class="btn btn-icon icon-left btn-info btn-sm btn-block"><i class="fas fa-user-edit"></i></a>
                                    <a href="<?=site_url('admin/detailPenda/').$du->id_pendataan?>" class="btn btn-icon icon-left btn-success btn-sm btn-block"><i class="fas fa-ellipsis-h"></i></a>
                                    <a href="<?=site_url('kendaraan/delPenda/').$du->id_pendataan?>" class="btn btn-block btn-icon icon-left btn-danger btn-sm btn-block" onClick="return confirm('Yakin ingin menghapus ?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>