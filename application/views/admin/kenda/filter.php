<section class="section">
    <div class="section-header"> <h1>Filter Daftar Kendaraan </h1></div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-danger">
                    <div class="card-body ">
                        <form action="" id="filterOpd">
                            <div class="form-group">
                                <label for="">Filter OPD</label>
                                <select name="opd" id="opd" class="form-control contoh" required>
                                    <option value="">Pilih OPD..</option>
                                    <?php foreach ($data as $dt) { ?>
                                    <option value="<?=$dt->kode_opd?>"><?=$dt->nama_opd?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-block btn-danger">Tampilkan Data</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
            <div id="result"></div>    
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        $("#filterOpd").submit(function(e){
            e.preventDefault();
            var id = $("#opd").val();
            console.log(id);
            url = "<?= site_url('admin/resultkenda/')?>" + id;
            $('#result').load(url);
        })
    });
</script>