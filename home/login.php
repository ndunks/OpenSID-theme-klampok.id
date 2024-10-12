<?php
$TITLE = sprintf('%s %s %s',
            $this->setting->website_title,
            ucwords($this->setting->sebutan_desa),
            @$desa['nama_desa']
);
?>
<header class="header-title">
    <div>
        <h1>
            Akses Login
        </h1>
    </div>
</header>
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2  d-flex justify-content-center">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <img src="<?= $folder_themes ?>/img/logo-small.png">
                <h3 class="panel-title text-center" style="display: inline"><?= $TITLE ?></h3>
            </div>
            <div class="panel-body text-center">
                <a style="margin-bottom: 10px;" href="/layanan-mandiri" class="btn btn-lg btn-info"><i class="fa fa-user"></i> Login Warga</a>
                <a style="margin-bottom: 10px;" href="/siteman" class="btn btn-lg btn-success"><i class="fa fa-user-circle"></i> Login Perangkat</a>
            </div>
        </div>
    </div>
</div>
<script>
    (function () {
        $('.nav-tabs a').click(function (e) {
            location.href = this.href
        })
        if (location.hash.indexOf('perangkat') > 0) {
            $('.tab-perangkat').addClass('in active');
        } else {
            //class="active" in active
            $('.tab-warga').addClass('in active');
        }
        if (location.hash.endsWith("error")) {
            $('.tab-content').append('<div class="alert alert-warning" role="alert">Login gagal, cek username password anda.</div>')
        }

        /**
        * Aktifkan ajax dengan cara set class "ajax" pada form element, example: <form class="ajax" action="/login" ...>
        * didalam form harus ada .placeholder dan .btn[type=submit]
        */
        function login_ajax(e) {

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

            $.post($form.attr('action'), $form.serialize(), function (result) {
                if (typeof result == 'string') {
                    result = JSON.parse(result)
                }
                placeholder.removeClass('alert-warning')
                if (result && result.sukses) {
                    placeholder.toggleClass('alert-success', true).html("Login berhasil, memuat ulang halaman...");
                    // Siteman login have redirect, mandiri login not
                    document.location = result.redirect || '/index.php/layanan-mandiri';
                } else {
                    placeholder.toggleClass('alert-danger', true).html(result.pesan || "Login gagal")
                }
                btn.removeAttr('disabled');
            })
            return false;
        }
        $('form.ajax').on('submit', login_ajax)
    })();
</script>