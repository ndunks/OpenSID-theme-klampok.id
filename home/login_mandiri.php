<?php if( @$_SESSION['mandiri_wait']==1 ): ?>
    <div class="alert alert-danger" role="alert">
        Gagal 3 kali, silakan coba kembali dalam <?php echo waktu_ind((time()- $_SESSION['mandiri_timeout'])*(-1));?> detik lagi
    </div>
<?php else: ?>

    <h4 class="text-center">Masukan NIK dan PIN</h4>

    <form action="<?= site_url('layanan-mandiri/cek')?>" class="ajax" method="post">
        <div class="form-group">
            <div class="input-group">
                <abbr class="input-group-addon" title="Nomor Induk Kependudukan">NIK</abbr>
                <input name="nik" required type="text" class="form-control" placeholder="Nomor Induk Kependudukan" value="<?= htmlentities(@$_POST['nik']) ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <abbr class="input-group-addon" title="Personal Identification Number">PIN</abbr>
                <input name="pin" required type="password" class="form-control" placeholder="Personal Identification Number">
            </div>
        </div>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Masuk</button>
        </div>
        <div class="alert alert-danger placeholder text-center h5 hidden">
            <?php if(isset($_SESSION['LOGIN_ERROR'])) {
                echo $_SESSION['LOGIN_ERROR'];
            } ?>
        </div>
        <div class="alert alert-info" role="alert">
                <i class="fa fa-question-circle"></i>
                Belum punya PIN atau lupa PIN? Silahkan hubungi Operator/Perangkat 
                <?= htmlentities( ucwords($this->setting->sebutan_desa) ) ?>
        </div>
    </form>
<?php endif; ?>
