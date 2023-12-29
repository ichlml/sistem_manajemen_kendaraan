<section class="section">
    <div class="section-header">
        <h1>Form <?=ucfirst($page)?> User</h1>
    </div>
    <div class="section-body">
        <form action="<?=site_url('user/tambahAdmin')?>" method="post">
            <div class="d-flex">
                <div class="col-md-6">
                <div class="section-title">
                    Data
                    </div>
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?=$row->id_admin?>">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" class="form-control" autocomplete="off" required autofocus value="<?=$row->nip?>">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" autocomplete="off" required value="<?=$row->nama_admin?>">
                    </div>
                    <div class="form-group">
                        <label for="jkel">Jenis Kelamin</label>
                        <select name="jkel" class="form-control" required>
                            <option value="">Jenis Kelamin ...</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" cols="10" rows="10"><?=$row->alamat?></textarea>
                    </div>
                <button type="submit" name="<?=$page?>" class="btn btn-icon icon-left btn-primary btn-sm"><i class="fas fa-paper-plane"></i>Simpan Data</button>
                </div>
                <div class="col-md-6">
                    <div class="section-title">
                    Account
                    </div>
                    <div class="form-group">
                        <label for="user">Username</label>
                        <input type="text" name="user" class="form-control" autocomplete="off" required value="<?=$row->user?>">
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" class="form-control" autocomplete="off" required value="<?=$row->pass?>">
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
