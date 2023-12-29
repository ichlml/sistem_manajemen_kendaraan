<section class="section">
    <div class="section-header">
            <h1>User</h1>
          </div>
    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header"><h4>List Of Admin Users</h4></div>
                <div class="card-body">
                    <a href="<?=base_url('admin/addUser')?>" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped dataTable no-footer" id="tabel1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>UserName</th>
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
                                <td><?=$no?></td>
                                <td><?=$du->nip?></td>
                                <td><?=$du->nama_admin?></td>
                                <td><?=$du->jkel?></td>
                                <td><?=$du->alamat?></td>
                                <td><?=$du->user?></td>
                                <td>
                                    <a href="<?=site_url('admin/editUser/').$du->id_admin?>" class="btn btn-icon icon-left btn-info btn-sm"><i class="fas fa-user-edit"></i></a>
                                    <a href="<?=site_url('user/del/').$du->id_admin?>" class="btn btn-icon icon-left btn-danger btn-sm" onClick="return confirm('Yakin ingin menghapus ?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>