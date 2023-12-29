<section class="section">
    <div class="section-header">
            <h1>OPD</h1>
          </div>
    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header"><h4>List Of OPD Users</h4></div>
                <div class="card-body">
                    <a href="<?=base_url('admin/addOpd')?>" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabel1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode OPD</th>
                                <th>Nama OPD</th>
                                <th>NIP OPD</th>
                                <th>Pimpinan</th>
                                <th>Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if ($user == null)
                            {
                                echo "<tr>";
                                echo "<td class=\"text-center\" colspan=\"6\">Data Kosong</td>";
                                echo "</tr>";
                            }
                            $no = 1;
                            foreach ($user as $du) {
                        ?>
                            <tr>
                                <td><?=$no++?></td>
                                <td><?=$du->kode_opd?></td>
                                <td><?=$du->nama_opd?></td>
                                <td><?=$du->nip_opd?></td>
                                <td><?=$du->pimpinan?></td>
                                <td><?=$du->jabatan?></td>
                              <td>
                                    <a href="<?=site_url('admin/editOpd/').$du->kode_opd?>" class="btn btn-icon icon-left btn-info btn-sm"><i class="fas fa-user-edit"></i></a>
                                    <a href="<?=site_url('user/delOpd/').$du->kode_opd?>" class="btn btn-icon icon-left btn-danger btn-sm" onClick="return confirm('Yakin ingin menghapus ?')"><i class="fas fa-trash-alt"></i></a>
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