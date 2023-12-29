<section class="section">
    <div class="section-body">
        <h2 class="section-title">Data Kendaraan</h2>
        <p class="section-lead">Hanya menampilkan data kendaraan berdasarkan opd</p>
        <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-danger">
            <div class="card-body">
                <form action="<?= base_url('laporan/pemeliharaan')?>" method="post" class="form-inline">
                    <select name="tahun" id="tahun" class="form-control">
                        <option value="">Pilih Tahun </option>
                        <?php foreach ($tahun as $key) { ?>
                        <option value="<?=$key->tahun?>"><?=$key->tahun?></option>
                        <?php } ?>
                    </select> &nbsp;&nbsp;&nbsp;
                    <button type="submit" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> cetak</button>
                </form>
            </div>
        </div>
            <div class="card card-primary">
                <!-- <div class="card-header"><h4>List Of Vehicle</h4></div> -->
                <div class="card-body">
                <!-- <a href="<?= base_url('laporan/lapKenda/')?>" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Filter</a> -->
                    <!-- <br><br> -->
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
                                    <a href="<?=site_url('pengguna/addPemeliharaan/').$du->id_pendataan?>" class="btn btn-icon icon-left btn-info btn-sm btn-block" title="Pemeliharaan"><i class="fas fa-tools"></i></a>
                                    <a href="<?=site_url('pengguna/kartuPemeliharaan/').$du->id_pendataan?>" class="btn btn-icon icon-left btn-danger btn-sm btn-block" title="Kartu Pemeliharaan"><i class="far fa-credit-card"></i></a>
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