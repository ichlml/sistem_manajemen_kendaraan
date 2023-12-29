<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-warning">
                    <div class="card-body">
                        <form action="" id="Formlaporan">
                            <div class="form-group">
                                <label for="">Filter Bulan</label>
                                <select name="bulan" id="bulan" class="form-control" required>
                                    <option value="0">Tampilkan Semua</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="12">November</option>
                                    <option value="12">Desember</option>
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
        $("#Formlaporan").submit(function(e){
            e.preventDefault();
            var id = $("#bulan").val();
            // console.log(id);
            var url = "<?= site_url('pengguna/result/')?>" + id;
            $('#result').load(url);
        })
    });
</script>
