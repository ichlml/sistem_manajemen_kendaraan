<script>
    $(document).ready(function() {
        $('#tambah').hide();
        $(document).on('click', '#tamPem', function () {
            $('#tambah').show();
        })
    });

    
    function minn(id) {
        var harga_satuan = $("#harga_satuan"+id).val();
        var banyak = $("#banyak"+id).val();
        var jumlah = harga_satuan * banyak;
        $("#total"+id).val(jumlah);
        // console.log(jumlah)
    }
    function hitung() {
        var harga_satuan = $("#hargaE").val();
        var banyak = $("#qtyE").val();
        var jumlah = harga_satuan * banyak;
        $("#totalE").val(jumlah);
        // console.log(banyak);
    }

    function hapusElemen(idf) {
            $('#'+idf).remove();
            // console.log(idf);
        }

    function barangBaru() {
        var idf = document.getElementById('idf').value;
        var stre;
        stre="<div id='srow" + idf + "'><div class='form-inline'><input type='text' name='jns_pemeliharaan[]' class='form-control form-control' maxlength='20' id='jns_pemeliharaan" + idf + "' required placeholder='Nama Barang'>&nbsp;&nbsp;&nbsp; <input type='text' name='satuan[]' class='form-control form-control' maxlength='20' id='satuan" + idf + "' required placeholder='Satuan'>&nbsp;&nbsp;&nbsp; <input type='number' min='0' name='harga_satuan[]' class='form-control form-control' maxlength='20' id='harga_satuan" + idf + "' min='0' required placeholder='Harga Satuan'>&nbsp;&nbsp;&nbsp; <input type='number' min='0' name='banyak[]' id='banyak" + idf + "' class='form-control form-control' maxlength='50' required placeholder='QTY' onkeyup='minn("+ idf +")'>&nbsp;&nbsp;&nbsp; <input type='number' name='total[]' id='total" + idf + "' class='form-control form-control'  rows='4' maxlength='50' required placeholder='Total' readonly>&nbsp;&nbsp;&nbsp; <button type='button' class='btn btn-danger btn-md' onclick='hapusElemen(\"srow" + idf + "\"); return false;'>Hapus</button><input type='hidden' name='rows[]' value='"+ idf +"'></div></div> <br><br>";

        $("#divbarang").append(stre); 
        idf = (idf-1) + 2;
        document.getElementById("idf").value = idf;
    }
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Pemeliharaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url('pemeliharaan/editPem')?>" method="post">
      <div class="modal-body">
        
        <div class="form-group">
                <label for="">Nopol</label>
                <input type="hidden" class="form-control" name="id_pemeliharaan" id="id_pemeliharaan">
                <input type="hidden" class="form-control" name="id_penda" id="id_penda">
                <input type="text" class="form-control" name="nopol" id="nopol1" required readonly autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Tanggal</label>
                <input type="date" class="form-control" name="tgl" id="tgl" required>
            </div>
            <div class="form-group">
                <label for="">Barang</label>
                <input type="text" class="form-control" name="jenis_pemeliharaan" id="jenis_pemeliharaan" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Satuan</label>
                <input type="text" class="form-control" name="satuan" id="satuan" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="number" class="form-control" name="harga" id="hargaE" required autocomplete="off" onkeyup="hitung()">
            </div>
            <div class="form-group">
                <label for="">QTY</label>
                <input type="number" class="form-control" name="qty" id="qtyE" onkeyup="hitung()" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="">Total</label>
                <input type="number" class="form-control" name="total" id="totalE" required autocomplete="off" readonly>
            </div>
        <button type="submit" name="edt" class="btn btn-primary">Simpan Data</button>


        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</form>
    </div>
  </div>
</div>

<script>
$(document).ready(function () {
    $(document).on('click', '#edit', function () {
        var id = $(this).data('id');
        var id_penda = $(this).data('id_penda');
        var no_pol = $(this).data('nopol');
        var barang = $(this).data('barang');
        var tgl = $(this).data('tgl');
        var qty = $(this).data('qty');
        var satuan = $(this).data('satuan');
        var harga = $(this).data('harga');
        var total = $(this).data('total');
        $('#id_pemeliharaan').val(id);
        $('#id_penda').val(id_penda);
        $('#nopol1').val(no_pol);
        $('#tgl').val(tgl);
        $('#jenis_pemeliharaan').val(barang);
        $('#satuan').val(satuan);
        $('#hargaE').val(harga);
        $('#qtyE').val(qty);
        $('#totalE').val(total);
        // console.log(id_penda);
    })
})
</script>

<section class="section">
<div class="section-body">
    <div class="section-title">
        Pemeliharaan    
    </div>
    <!-- <div class="row"> -->
        <div class="col-lg-12">
            <div class="card card-info">
            <div class="card-body">
                <form action="<?=site_url('pemeliharaan/tambahData')?>" method="post">
                <div class="form-row">
                        <input type="hidden" value="1" id="idf">
                    <div class="form-group col col-md-4">
                        <label for="">Id Pendataan</label>
                        <input type="text" name="id_pendataan[]" id="id_pendataan" class="form-control" autocomplete="off" readonly value="<?=$dt->id_pendataan?>">
                    </div>
                    <div class="form-group col col-md-4">
                        <label for="">No. Polisi</label>
                        <input type="text" name="nopol[]" id="nopol" class="form-control" autocomplete="off" readonly value="<?=$dt->nopol?>">
                    </div>
                    <div class="form-group col col-md-4">
                        <label for="">Tanggal</label>
                        <input type="date" name="tgl_pemeliharaan[]" id="tgl_pemeliharaan" class="form-control" autocomplete="off" value="<?=date('Y-m-d')?>">
                    </div>
                    
                        <button id="tamPem" type="button" class="btn btn-danger
                        ml-auto" onclick="barangBaru(); return false;" >Tambah Pemeliharaan</button>
                </div>
                <br><br>
                <div class="card card-danger">
                <div class="card-header">Panel Pemeliharaan</div>
                <div class="card-body">
                    <div id="divbarang">
                    </div>
                </div>
                </div>
                    
                <button type="submit" id="tambah" name="tambah" value="Simpan Data" class="btn btn-info float-right">Simpan Data</button>


                </from>

            </div>
            </div>
        </div>
    <!-- </div> -->
    <div class="col-lg-12">
        <div class="card card-danger">
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped" id="tabel2">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nopol</th>
                        <th>Barang</th>
                        <th>Tanggal</th>
                        <th>Qty</th>
                        <th>Satuan</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; 
                        foreach ($data as $key) {
                      ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$key->nopol?></td>
                        <td><?=$key->jenis_pemeliharaan?></td>
                        <td><?=date('d F Y', strtotime($key->tgl_pemeliharaan))?></td>
                        <td><?=$key->qty?></td>
                        <td><?=$key->satuan?></td>
                        <td>Rp. <?=number_format($key->anu, 2)?></td>
                        <td>Rp. <?=number_format($key->total,2);?></td>
                        <td>
                            <button type="button" id="edit" class="btn btn-info btn-sm btn-block" 
                            data-toggle="modal" data-target="#exampleModalLong" 
                            data-id="<?=$key->id_pemeliharaan?>"
                            data-id_penda="<?=$key->id_pendataan?>"
                            data-nopol="<?=$key->nopol?>"
                            data-barang="<?=$key->jenis_pemeliharaan?>"
                            data-tgl="<?=$key->tgl_pemeliharaan?>"
                            data-qty="<?=$key->qty?>"
                            data-satuan="<?=$key->satuan?>"
                            data-harga="<?=$key->anu?>"
                            data-total="<?=$key->total?>"
                             title="Edit"><i class="far fa-edit"></i></button>
                        
                            <a href="<?=base_url('pemeliharaan/delPem/'.$key->id_pemeliharaan.'/'.$key->id_pendataan)?>" class="btn btn-danger btn-block btn-sm" title="Hapus"><i class="far fa-trash-alt"></i></a>
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


