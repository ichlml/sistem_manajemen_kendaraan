<section class="section">
    <div class="section-header">
        <h1>Form Edit Pengelola</h1>
    </div>
    <div class="section-body">
        <form action="<?=site_url('user/EditPengelola')?>" method="post">
            <div class="d-flex">
                <div class="col-md-6">
                <div class="section-title">
                    Data
                    </div>
                    <div class="form-group">
                        <label for="kode_opd">Id Pengelola</label>
                        <input type="text" name="id_pengelola" class="form-control" autocomplete="off" required autofocus value="<?=$row->id_pengelola?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama_opd">Nama Pengelola</label>
                        <input type="text" name="nama_pengelola" class="form-control" autocomplete="off" required value="<?=$row->nama_opd?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_opd">Nama OPD</label>
                        <input type="text" name="nama_opd" class="form-control" autocomplete="off" required value="<?=$row->nama_opd?>">
                    </div>
                    <div class="form-group">
                        <label for="nip_opd">NIP Pengelola</label>
                        <input type="text" name="nip_pengelola" class="form-control" autocomplete="off" required value="<?=$row->nip_pegelola?>">
                    </div>
                    <div class="form-group">
                        <label for="pimpinan">Pimpinan</label>
                        <input type="text" name="pimpinan" class="form-control" autocomplete="off"  value="<?=$row->pimpinan?>">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" autocomplete="off" value="<?=$row->jabatan?>">
                    </div>
                <button type="submit" name="edit" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-paper-plane"></i>Simpan Data</button>
                </div>                
            </div>
        </form>
    </div>
</section>
