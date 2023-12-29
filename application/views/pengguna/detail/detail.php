
<section class="section">
    <div class="section-header">
        <h1>Detail Pendataan </h1>
    </div>
    <div class="section-body">
        <form action="<?=site_url('kendaraan/editPenda')?>" method="post">
            <div class="d-flex">
                <div class="col-md-6">
                <div class="section-title">
                    Kendaraan
                    </div>
                    <div class="form-group">
                        <label for="nopol">No Polisi</label>
                        <input type="text" name="nopol" id="nopol" value="<?= $row->nopol?>" class="form-control" readonly>
                        <input type="hidden" name="kd_kendaraan" id="kd_kendaraan" class="form-control" value="<?= $row->kd_kendaraan?>">
                        <input type="hidden" name="id" id="id" class="form-control" value="<?= $row->id_pendataan?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_opd">Nama Opd</label>
                        <input type="text" name="nama_opd" id="nama_opd" class="form-control" value="<?= $row->nama_opd?>" readonly>
                        <input type="hidden" name="kode_opd" id="kode_opd" class="form-control" value="<?= $row->kode_opd?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_kendaraan">Nama Kendaraan</label>
                        <input type="text" name="nama_kendaraan" id="nama_kendaraan" class="form-control" readonly value="<?= $row->nama_kendaraan?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" id="jenis" class="form-control" readonly value="<?= $row->jenis?>">
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" id="merk" class="form-control" readonly value="<?= $row->merk?>">
                    </div>
                    <div class="form-group">
                        <label for="tgl_pajak">Tanggal Pajak</label>
                        <input type="date" name="tgl_pajak" class="form-control" autocomplete="off" required value="<?=$row->tgl_pajak?>" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="section-title">
                    Pendataan
                </div>
                    <div class="form-group">
                        <label for="stts_penggunaan">Status Penggunaan</label>
                        <input type="text" name="stts_penggunaan" id="stts_penggunaan" class="form-control" autocomplete="off" required value="<?= $row->status_penggunaan?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="stts_penggunaan">Status Penggunaan</label>
                        <input type="text" name="stts_penggunaan" id="stts_penggunaan" class="form-control" autocomplete="off" required value="<?= $row->kondisi?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="no_ba">No Ba Pinjam</label>
                        <input type="text" name="no_ba" id="no_ba" class="form-control" autocomplete="off" required value="<?= $row->no_ba_pinjam?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama_peminjam">Nama Peminjam</label>
                        <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" autocomplete="off" required value="<?= $row->nama_peminjam?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama_peminjam">Jabatan Peminjam</label>
                        <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" autocomplete="off" required value="<?= $row->jabatan_peminjam?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nip_pemakai">NIP Pemakai</label>
                        <input type="text" name="nip_pemakai" id="nip_pemakai" class="form-control" autocomplete="off" required value="<?= $row->nip_pemakai?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tgl_pinjam">Tanggal Pinjam</label>
                        <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" autocomplete="off" required value="<?= $row->tgl_pinjam?>" readonly>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

