<section class="section">
    <div class="section-header">
        <h1>Form <?=ucfirst($page)?> Vehicle</h1>
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
                        <input type="text" name="nopol" class="form-control" autocomplete="off" required autofocus value="<?=$row->nopol?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nama OPD</label>
                        <input type="text" id="nama_opd" name="nama_opd" class="form-control" autocomplete="off" required autofocus value="<?=$row->nama_opd?>">
                        <input type="hidden" name="kode_opd" class="form-control" autocomplete="off" required autofocus id="kode_opd" value="<?=$row->nopol?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_kendaraan">Nama Kendaraan</label>
                        <input type="text" name="nama_kendaraan" class="form-control" autocomplete="off" required value="<?=$row->nama_kendaraan?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Kendaraan</label>
                        <select name="jenis" class="form-control" required>
                            <option value="">Jenis Kendaraan ...</option>
                            <option value="Motor">Motor</option>
                            <option value="Mobil">Mobil</option>
                            <option value="Ransus">Ransus</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_penyimpanan">No Penyimpanan</label>
                        <input type="text" name="no_penyimpanan" class="form-control" autocomplete="off" required value="<?=$row->no_penyimpanan?>">
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk Kendaraan</label>
                        <input type="text" name="merk" class="form-control" autocomplete="off" required value="<?=$row->merk?>">
                    </div>
                    <div class="form-group">
                        <label for="type">Type Kendaraan</label>
                        <input type="text" name="type" class="form-control" autocomplete="off" required value="<?=$row->type?>">
                    </div>
                    
                <button type="submit" name="<?=$page?>" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-paper-plane"></i>Simpan Data</button>
                </div>
                <div class="col-md-6">
                <div class="section-title">
                    Vehicle
                    </div>
                    <div class="form-group">
                        <label for="tgl_perolehan">Tahun Perolehan</label>
                        <input type="number" name="tgl_perolehan" class="form-control" autocomplete="off" required value="<?=$row->tgl_perolehan?>">
                    </div>
                    <div class="form-group">
                        <label for="no_rangka">Nomer Rangka</label>
                        <input type="text" name="no_rangka" class="form-control" autocomplete="off" required value="<?=$row->no_rangka?>">
                    </div>
                    <div class="form-group">
                        <label for="no_mesin">Nomer Mesin</label>
                        <input type="text" name="no_mesin" class="form-control" autocomplete="off" required value="<?=$row->no_mesin?>">
                    </div>
                    <div class="form-group">
                        <label for="no_bpkb">Nomer BPKB</label>
                        <input type="text" name="no_bpkb" class="form-control" autocomplete="off" required value="<?=$row->no_bpkb?>">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" class="form-control" autocomplete="off" required value="<?=$row->harga?>">
                    </div>
                    <div class="form-group">
                        <label for="idpemda">IDPemda</label>
                        <input type="text" name="idpemda" class="form-control" autocomplete="off" required value="<?=$row->idpemda?>">
                    </div>
                    <div class="form-group">
                        <label for="cc">CC Kendaraan</label>
                        <input type="text" name="cc" class="form-control" autocomplete="off" required value="<?=$row->cc?>">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
    $(document).ready(function(){
        $('#nama_opd').autocomplete({
            source : "<?= site_url('kendaraan/getNamaOpd')?>",

            select: function (event, ui) {
                    console.log(ui.item.value)
                    $.ajax({
                        url : "<?= site_url('kendaraan/getOPD/')?>",
                        data : {
                            nama_opd : ui.item.value
                        },
                        type : "post",
                        dataType : "json",

                        success : function(res)
                        {
                            $('#kode_opd').val(res.kode_opd);
                        }
                    });
                }
        });
    });
</script>
                    <!-- <div class="form-group">
                        <label for="tgl_pajak">Tanggal Pajak</label>
                        <input type="date" name="tgl_pajak" class="form-control" autocomplete="off" required value="<?=$row->tgl_pajak?>">
                    </div> -->