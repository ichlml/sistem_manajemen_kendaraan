<section class="section">
    <div class="section-header">
        <h1>Form <?=ucfirst($page)?> OPD</h1>
    </div>
    <div class="section-body">
        <form action="<?=site_url('user/tambahOpd')?>" method="post">
            <div class="d-flex">
                <div class="col-md-6">
                <div class="section-title">
                    Data
                    </div>
                    <div class="form-group">
                        <label for="kode_opd">Kode OPD</label>
                        <input type="text" name="kode_opd" class="form-control" autocomplete="off" required autofocus value="<?=$row->kode_opd?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_opd">Nama OPD</label>
                        <input type="text" name="nama_opd" class="form-control" autocomplete="off" required value="<?=$row->nama_opd?>">
                    </div>
                    <div class="form-group">
                        <label for="nip_opd">NIP OPD</label>
                        <input type="text" name="nip_opd" class="form-control" autocomplete="off" required value="<?=$row->nip_opd?>">
                    </div>
                    <div class="form-group">
                        <label for="pimpinan">Pimpinan</label>
                        <input type="text" name="pimpinan" class="form-control" autocomplete="off"  value="<?=$row->pimpinan?>">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" autocomplete="off" value="<?=$row->jabatan?>">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="text" maxlength="16" name="pass" class="form-control" autocomplete="off" value="<?=$row->pass?>">
                    </div>
                <button type="submit" name="<?=$page?>" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-paper-plane"></i>Simpan Data</button>
                </div>                
            </div>
        </form>
    </div>
</section>
