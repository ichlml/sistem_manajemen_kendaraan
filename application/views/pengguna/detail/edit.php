
<section class="section">
    <div class="section-header">
        <h1>Form Edit Pendataan Kendaraan</h1>
    </div>
    <div class="section-body">
        <form action="<?=site_url('pengguna/editPenda')?>" method="post">
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
                        <input type="date" name="tgl_pajak" class="form-control" autocomplete="off" required value="<?=$row->tgl_pajak?>">
                    </div>
                    <button type="submit" name="<?=$page?>" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-paper-plane"></i>Update Data</button>
                </div>
                <div class="col-md-6">
                <div class="section-title">
                    Pendataan
                </div>
                <div class="form-group">
                        <label for="stts_penggunaan">Status Penggunaan</label>
                        <select  name="stts_penggunaan" id="stts_penggunaan" class="form-control" autocomplete="off" required>
                        <option value="">Pilih Status Penggunaan</option>
                        <?php
                            $data = $row->status_penggunaan;

                            if($data == 'Perorangan'){
                        ?>
                            <option value="Perorangan" selected>Perorangan</option>
                        <?php }else{ ?>
                            <option value="Perorangan">Perorangan</option>
                        <?php }
                        if($data == 'Jabatan'){ ?>
                            <option value="Jabatan" selected>Jabatan</option>
                        <?php }else{ ?>
                            <option value="Jabatan">Jabatan</option>
                        <?php }
                        if($data == 'Operasional'){ ?>
                            <option value="Operasional" selected>Operasional</option>
                        <?php } else{ ?>
                            <option value="Operasional">Operasional</option>
                        <?php }
                        if($data == 'Pinjam Pakai'){?>
                            <option value="Pinjam Pakai" selected>Pinjam Pakai</option>
                        <?php }else{ ?>
                            <option value="Pinjam Pakai">Pinjam Pakai</option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kondisi">Kondisi</label>
                        <select  name="kondisi" id="kondisi" class="form-control" autocomplete="off" required>
                        <option value="" selected>Pilih Kondisi</option>
                        <?php
                            $kondisi = $row->kondisi;
                        
                            if($kondisi == 'Baik'){
                        ?>
                            <option value="Baik" Selected>Baik</option>
                        <?php }else{?>
                            <option value="Baik">Baik</option>
                        <?php
                        }
                        if($kondisi == 'Rusak Ringan'){ ?>
                            <option value="Rusak Ringan" selected>Rusak Ringan</option>
                        <?php }else{?>
                            <option value="Rusak Ringan">Rusak Ringan</option>
                        <?php }
                        if($kondisi == 'Rusak Sedang'){ ?>
                            <option value="Rusak Sedang" selected>Rusak Sedang</option>
                        <?php }else{ ?>
                            <option value="Rusak Sedang">Rusak Sedang</option>
                        <?php }
                        if($kondisi == 'Rusak Berat'){ ?>
                            <option value="Rusak Berat">Rusak Berat</option>
                        <?php }else{ ?>
                            <option value="Rusak Berat">Rusak Berat</option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_ba">No Ba Pinjam</label>
                        <input type="text" name="no_ba" id="no_ba" class="form-control" autocomplete="off" required value="<?= $row->no_ba_pinjam?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_peminjam">Nama Peminjam</label>
                        <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" autocomplete="off" required value="<?= $row->nama_peminjam?>">
                    </div>
                    <div class="form-group">
                        <label for="jabatan_peminjam">Jabatan Peminjam</label>
                        <input type="text" name="jabatan_peminjam" id="jabatan_peminjam" class="form-control" autocomplete="off" required value="<?= $row->jabatan_peminjam?>">
                    </div>
                    <div class="form-group">
                        <label for="nip_pemakai">NIP Pemakai</label>
                        <input type="text" name="nip_pemakai" id="nip_pemakai" class="form-control" autocomplete="off" required value="<?= $row->nip_pemakai?>">
                    </div>
                    <div class="form-group">
                        <label for="tgl_pinjam">Tanggal Pinjam</label>
                        <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control" autocomplete="off" required value="<?= $row->tgl_pinjam?>">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<script>
//    $(document).ready(function() {
//         $( "#nopol" ).autocomplete({
//             source: "<?php echo site_url('kendaraan/getnopol/?');?>",


//                 select: function (event, ui) {
//                     // console.log(ui.item.value)
//                     $.ajax({
//                         url : "<?= site_url('kendaraan/getKendaraan/')?>",
//                         data : {
//                             nopol : ui.item.value
//                         },
//                         type : "post",
//                         dataType : "json",

//                         success : function(res)
//                         {
//                             $('#kd_kendaraan').val(res.kd_kendaraan);
//                             $('#nama_kendaraan').val(res.nama_kendaraan);
//                             $('#jenis').val(res.jenis);
//                             $('#merk').val(res.merk);
//                         }
//                     });
//                 }
//         });

//         $('#nama_opd').autocomplete({
//             source : "<?= site_url('kendaraan/getNamaOpd')?>",

//             select: function (event, ui) {
//                     console.log(ui.item.value)
//                     $.ajax({
//                         url : "<?= site_url('kendaraan/getOPD/')?>",
//                         data : {
//                             nama_opd : ui.item.value
//                         },
//                         type : "post",
//                         dataType : "json",

//                         success : function(res)
//                         {
//                             $('#kode_opd').val(res.kode_opd);
//                         }
//                     });
//                 }
//         });
//     });
</script>

