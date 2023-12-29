<section class="section">
    <div class="section-header">
            <h1>Pengelola</h1>
          </div>
    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header"><h4>List Of Pengelola</h4></div>
                <div class="card-body">
                    <!-- <a href="<?=base_url('admin/addOpd')?>" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a> -->
                    <div class="table-responsive">
                        <table class="table table-striped" id="tabel1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pengelola</th>
                                <th>NIP Pengelola</th>
                                <th>Pimpinan</th>
                                <th>Jabatan</th>
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
                                <td><?=$du->nama_pengelola?></td>
                                <td><?=$du->nip_pegelola?></td>
                                <td><?=$du->pimpinan?></td>
                                <td><?=$du->jabatan?></td>
                              <td>
                                    <a href="<?=site_url('admin/editPengelola/').$du->id_pengelola?>" class="btn btn-icon icon-left btn-info btn-sm" title="Edit"><i class="fas fa-user-edit"></i></a>
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