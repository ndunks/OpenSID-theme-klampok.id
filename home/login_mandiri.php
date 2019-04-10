<?php if( @$_SESSION['mandiri_wait']==1 ): ?>
    <div class="alert alert-danger" role="alert">
        Gagal 3 kali, silakan coba kembali dalam <?php echo waktu_ind((time()- $_SESSION['mandiri_timeout'])*(-1));?> detik lagi
    </div>
<?php else: ?>

    <h4 class="text-center">Masukan NIK dan PIN</h4>

    <form action="<?= site_url('first/auth')?>" class="ajax" method="post">
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
<script type="text/javascript">
$(function(){

    /**
    * Aktifkan ajax dengan cara set class "ajax" pada form element, example: <form class="ajax" action="/login" ...>
    * didalam form harus ada .placeholder dan .btn[type=submit]
    */
    function login_ajax(e)
    {
    
        var $form = $(this),
            placeholder = $form.find('.placeholder'),
            btn = $form.find('.btn[type=submit]');

        e.preventDefault();
        
        // Reset waiting state
        placeholder.removeClass('alert-success')
                    .removeClass('alert-danger')
                    .removeClass('hidden')
                    .toggleClass('alert-warning', true)
                    .html('<i class="fa fa-spin fa-spinner"></i><br/>Memproses Login...');
        
        // Disable btn, agar tidak multiple click
        btn.attr('disabled', 'true');
        
        $.post($form.attr('action') || '/index.php/first/auth', $form.serialize(), function(result) {

            placeholder.removeClass('alert-warning')
            if( result && result.sukses )
            {
                placeholder.toggleClass('alert-success', true).html("Login berhasil, memuat ulang halaman...");
                document.location.reload();
            }else
            {
                placeholder.toggleClass('alert-danger', true).html( result.pesan || "Login gagal" )
            }
            btn.removeAttr('disabled');
        })
        return false;
    }
    $('form.ajax').on('submit', login_ajax)
})
</script>