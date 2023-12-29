<section class="section">
    <div class="section-header">
            <h1>Kendaraan</h1>
          </div>
    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header"><h4>List Of Vehicle</h4></div>
                <div class="card-body">
                    <a href="<?=base_url('admin/addKendaraan')?>" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabel1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Polisi</th>
                                <th>Nama Kendaraan</th>
                                <th>Jenis</th>
                                <th>Merk</th>
                                <th>Type</th>
                                <th>Tahun Perolehan</th>
                                <th>Harga</th>
                                <th>Id Pemda</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if ($kendaraan == null)
                            {
                                echo "<tr>";
                                echo "<td class=\"text-center\" colspan=\"6\">Data Kosong</td>";
                                echo "</tr>";
                            }
                            $no = 1;
                            foreach ($kendaraan as $du) {
                        ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$du->nopol?></td>
                                <td><?=$du->nama_kendaraan?></td>
                                <td><?=$du->jenis?></td>
                                <td><?=$du->merk?></td>
                                <td><?=$du->type?></td>
                                <td><?=$du->tgl_perolehan?></td>
                                <td><?=$du->harga?></td>
                                <!-- <td><?=date('F Y', strtotime($du->tgl_pajak))?></td> -->
                                <td><?=$du->idpemda?></td>
                              <td>
                                    <a href="<?=site_url('admin/editKendaraan/').$du->kd_kendaraan?>" class="btn btn-icon icon-left btn-info btn-sm btn-block"><i class="fas fa-user-edit"></i></a>
                                    <a href="<?=site_url('admin/detailKendaraan/').$du->kd_kendaraan?>" class="btn btn-icon icon-left btn-success btn-sm btn-block"><i class="fas fa-ellipsis-h"></i></a>
                                    <a href="<?=site_url('kendaraan/del/').$du->kd_kendaraan?>" class="btn btn-block btn-icon icon-left btn-danger btn-sm btn-block" onClick="return confirm('Yakin ingin menghapus ?')"><i class="fas fa-trash-alt"></i></a>
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