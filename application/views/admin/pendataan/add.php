
<section class="section">
    <div class="section-header">
        <h1>Form Pendataan Kendaraan</h1>
    </div>
    <div class="section-body">
        <form action="<?=site_url('kendaraan/addPendataan')?>" method="post">
            <div class="d-flex">
                <div class="col-md-6">
                <div class="section-title">
                    Kendaraan
                    </div>
                    <div class="form-group">
                        <label for="nopol">No Polisi</label>
                        <input type="text" name="nopol" id="nopol" class="form-control">
                        <input type="hidden" name="kd_kendaraan" id="kd_kendaraan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nama_opd">Nama Opd</label>
                        <input type="text" name="nama_opd" id="nama_opd" class="form-control">
                        <!-- <input type="hidden" name="kode_opd" id="kode_opd" class="form-control"> -->
                    </div>
                    <div class="form-group">
                        <label for="nama_kendaraan">Nama Kendaraan</label>
                        <input type="text" name="nama_kendaraan" id="nama_kendaraan" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" id="jenis" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" id="merk" class="form-control" readonly>
                    </div>

                    <button type="submit" name="add" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-paper-plane"></i>Simpan Data</button>
                </div>
                <div class="col-md-6">
                <div class="section-title">
                    Pendataan
                </div>
                    <div class="form-group">
                        <label for="stts_penggunaan">Status Penggunaan</label>
                        <input type="text" name="stts_penggunaan" id="stts_penggunaan" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="no_ba">No Ba Pinjam</label>
                        <input type="text" name="no_ba" id="no_ba" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_peminjam">Nama Peminjam</label>
                        <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="nip_pemakai">NIP Pemakai</label>
                        <input type="text" name="nip_pemakai" id="nip_pemakai" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_pinjam">Tanggal Pinjam</label>
                        <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" autocomplete="off" required>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<script>
   $(document).ready(function() {
        $( "#nopol" ).autocomplete({
            source: "<?php echo site_url('kendaraan/getnopol/?');?>",


                select: function (event, ui) {
                    // console.log(ui.item.value)
                    $.ajax({
                        url : "<?= site_url('kendaraan/getKendaraan/')?>",
                        data : {
                            nopol : ui.item.value
                        },
                        type : "post",
                        dataType : "json",

                        success : function(res)
                        {
                            $('#kd_kendaraan').val(res.kd_kendaraan);
                            $('#nama_kendaraan').val(res.nama_kendaraan);
                            $('#jenis').val(res.jenis);
                            $('#merk').val(res.merk);
                            $('#nama_opd').val(res.nama_opd);
                        }
                    });
                }
        });
    });
</script>

