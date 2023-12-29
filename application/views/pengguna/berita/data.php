<section class="section">
    <div class="section-body">
        <h2 class="section-title">Data Kendaraan</h2>
        <p class="section-lead">Hanya menampilkan data kendaraan berdasarkan opd</p>
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header"><h4>List Of Vehicle</h4></div>
                <div class="card-body">
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
                              <td>
                              <br>
                                    <?php
                                        if($du->status_penggunaan == 'Perorangan'){
                                    ?>
                                        <a href="<?=site_url('laporan/cetak_perorangan/').$du->nopol?>" class="btn btn-icon icon-left btn-danger btn-sm btn-block" target="blank" title="Perorangan"><i class="fas fa-print"></i></a>
                                    <?php
                                        }elseif ($du->status_penggunaan == 'Jabatan') {
                                    ?>
                                        <a href="<?=site_url('laporan/cetak_jabatan/').$du->nopol?>" class="btn btn-icon icon-left btn-danger btn-sm btn-block" target="blank" title="Jabatan"><i class="fas fa-print"></i></a>
                                    <?php
                                        }elseif($du->status_penggunaan == 'Operasional'){
                                    ?>
                                         <a href="<?=site_url('laporan/cetak/').$du->nopol?>" class="btn btn-icon icon-left btn-danger btn-sm btn-block" target="blank" title="Operasional"><i class="fas fa-print"></i></a>
                                    <?php
                                        }
                                    ?>
                                    <br>
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