<header class="header-title">
    <div>
        <img src="<?= $folder_themes ?>/img/logo-small.png">
        <h1>
            <?= $TITLE ?>
        </h1>
    </div>
</header>
<div class="row">
    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="tab-warga">
                <a href="#login-warga" aria-controls="login-warga" role="tab" data-toggle="tab">
                    <i class="fa fa-user"></i> Login Warga
                </a>
            </li>
            <li role="presentation" class="tab-perangkat">
                <a href="#login-perangkat" aria-controls="login-perangkat" role="tab" data-toggle="tab">
                    <i class="fa fa-user-circle"></i> Login Perangkat
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="panel panel-default no-top-border">
            <div class="panel-body">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade tab-warga" id="login-warga">
                        <?php include __DIR__ . '/login_mandiri.php' ?>
                    </div>
                    <div role="tabpanel" class="tab-pane fade tab-perangkat" id="login-perangkat">
                        <?php include __DIR__ . '/login_perangkat.php' ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (function () {
        if (location.hash.startsWith('#perangkat')) {
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