<section class="section">
    <div class="section-header">
        <h1>Detail Vehicle</h1>
    </div>
    <div class="section-body">
        <form action="<?=site_url('kendaraan/prosesKendaraan')?>" method="post">
            <div class="d-flex">
                <div class="col-md-6">
                <div class="section-title">
                    Data
                    </div>
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?=$row->kd_kendaraan?>">
                        <label for="nopol">Nomer Polisi</label>
                        <input type="text" name="nopol" class="form-control" autocomplete="off" required value="<?=$row->nopol?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama_kendaraan">Nama Kendaraan</label>
                        <input type="text" name="nama_kendaraan" class="form-control" autocomplete="off" required value="<?=$row->nama_kendaraan?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Kendaraan</label>
                        <input type="text" name="nama_kendaraan" class="form-control" autocomplete="off" required value="<?=$row->jenis?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="no_penyimpanan">No Penyimpanan</label>
                        <input type="text" name="no_penyimpanan" class="form-control" autocomplete="off" required value="<?=$row->no_penyimpanan?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk Kendaraan</label>
                        <input type="text" name="merk" class="form-control" autocomplete="off" required value="<?=$row->merk?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="type">Type Kendaraan</label>
                        <input type="text" name="type" class="form-control" autocomplete="off" required value="<?=$row->type?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="cc">CC Kendaraan</label>
                        <input type="text" name="cc" class="form-control" autocomplete="off" required value="<?=$row->cc?>" readonly>
                    </div>
                <!-- <button type="submit" name="" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-paper-plane"></i>Simpan Data</button> -->
                </div>
                <div class="col-md-6">
                <div class="section-title">
                    Vehicle
                    </div>
                    <div class="form-group">
                        <label for="tgl_perolehan">Tanggal Perolehan</label>
                        <input type="date" name="tgl_perolehan" class="form-control" autocomplete="off" required value="<?=$row->tgl_perolehan?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="no_rangka">Nomer Rangka</label>
                        <input type="text" name="no_rangka" class="form-control" autocomplete="off" required value="<?=$row->no_rangka?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="no_mesin">Nomer Mesin</label>
                        <input type="text" name="no_mesin" class="form-control" autocomplete="off" required value="<?=$row->no_mesin?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="no_bpkb">Nomer BPKB</label>
                        <input type="text" name="no_bpkb" class="form-control" autocomplete="off" required value="<?=$row->no_bpkb?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" autocomplete="off" required value="<?=$row->harga?>" readonly>
                    </div>
                    <!-- <div class="form-group">
                        <label for="tgl_pajak">Tanggal Pajak</label>
                        <input type="date" name="tgl_pajak" class="form-control" autocomplete="off" required value="<?=$row->tgl_pajak?>" readonly>
                    </div> -->
                    <div class="form-group">
                        <label for="idpemda">IDPemda</label>
                        <input type="text" name="idpemda" class="form-control" autocomplete="off" required value="<?=$row->idpemda?>" readonly>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
