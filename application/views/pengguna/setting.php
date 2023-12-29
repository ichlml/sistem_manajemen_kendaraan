<section class="section">
    <div class="card card-primary">
    <div class="card-body">
        <form action="<?= site_url('pengguna/editOPD')?>" method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="kode_opd" class="col-md-2 col-form-label"> <strong> Kode OPD </strong></label>
                    <div class="col-md-8">
                        <input type="text" name="kode_opd" id="kode_opd" class="form-control" value="<?=$row->kode_opd?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_opd" class="col-md-2 col-form-label"> <strong> Nama OPD </strong></label>
                    <div class="col-md-8">
                        <input type="text" name="nama_opd" id="nama_opd" class="form-control" autocomplete="off" value="<?=$row->nama_opd?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pass" class="col-md-2 col-form-label"> <strong> Password </strong></label>
                    <div class="col-md-8">
                        <input type="password" name="pass" id="pass" class="form-control" autocomplete="off" value="<?=$row->pass?>" >
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group row">
                    <label for="nip_opd" class="col-md-2 col-form-label"> <strong> NIP OPD </strong></label>
                    <div class="col-md-8">
                        <input type="text" name="nip_opd" id="nip_opd" class="form-control" autocomplete="off" value="<?=$row->nip_opd?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pimpinan" class="col-md-2 col-form-label"> <strong> Pimpinan </strong></label>
                    <div class="col-md-8">
                        <input type="text" name="pimpinan" id="pimpinan" class="form-control" autocomplete="off" value="<?=$row->pimpinan?>" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jabatan" class="col-md-2 col-form-label"> <strong> Jabatan </strong></label>
                    <div class="col-md-8">
                        <input type="text" name="jabatan" id="jabatan" class="form-control" autocomplete="off" value="<?=$row->jabatan?>" >
                    </div>
                </div>
                
                <div class="d-flex justify-content-end">
                    <input type="submit" value="Simpan" class="btn btn-md btn-success">
                </div>

            </div>
        </div>
        </form>
    </div>
    </div>
</section>

