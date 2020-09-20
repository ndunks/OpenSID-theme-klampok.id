<header class="header-title">
    <div>
        <img src="<?= THEME_URL ?>/img/logo-small.png">
        <h1><?= $TITLE ?></h1>
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
(function(){
    if(location.hash.startsWith('#perangkat')){
        $('.tab-perangkat').addClass('in active');
    }else{
        //class="active" in active
        $('.tab-warga').addClass('in active');
    }
    if( location.hash.endsWith("error")){
        $('.tab-content').append('<div class="alert alert-warning" role="alert">Login gagal, cek username password anda.</div>')
    }
})();
</script>