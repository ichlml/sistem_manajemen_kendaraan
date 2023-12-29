<section class="section">
    <label for="">NOPOL</label>
    <input type="text" class="form-control" autocomplete="off" name="kd_kendaraan" id="nopol">
</section>

<script>
    $(document).ready(function() {
        $( "#nopol" ).autocomplete({
            source: "<?php echo site_url('kendaraan/getKendaraan/?');?>"
        });
    });
</script>
