
<section class="section">
    <div class="section-body">
        <div class="row">
        <div class="col-lg-3">
            <div class="card card-danger">
            <div class="card-body">
                <form action="" id="kapem">
                    <input type="hidden" name="nopol" id="nopol" value="<?=$dt->nopol?>">
                    <div class="form-group">
                        <label for="">Tahun Pemeliharaan</label>
                        <select name="tahun" id="tahun" class="form-control contoh" required>
                            <option value="">Pilih Tahun Pemeliharaan ...</option>
                            <?php foreach ($tahun as $ay) { ?>
                            <option value="<?=$ay->tahun?>"><?=$ay->tahun?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-block btn-warning">Tampilkan Data</button>
                </form>
            </div>
            </div>
        </div>
            <div class="col-lg-9">
                <div id="result"></div>  
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
            var nopol = $("#nopol").val();
        $("#kapem").submit(function(e){
            e.preventDefault();
            var tahun = $("#tahun").val();
            // console.log(nopol);
            var url = "<?= site_url('pengguna/kapem/')?>" + nopol + "/" +tahun ;
            $('#result').load(url);
        })
    });
</script>