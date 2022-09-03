<?php
$links = array(
    array(
        'link' => 'first',
        'text' => 'Beranda'
    ),
    array(
        'link' => 'mandiri_web/mandiri/1/1',
        'text' => 'Biodata'
    ),
    array(
        'link' => 'mandiri_web/mandiri/1/2',
        'text' => 'Layanan'
    ),
    array(
        'link' => 'mandiri_web/mandiri/1/3',
        'text' => 'Pelaporan'
    ),
    array(
        'link' => 'mandiri_web/mandiri/1/4',
        'text' => 'Bantuan'
    )
);

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
                <span class="sr-only">Navigasi</span>
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= site_url('first') ?>">
                <img src="<?= $folder_themes ?>/img/logo-32x32.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <?php
                $current_url = trim( $this->uri->uri_string(), '/' );
                foreach( $links as $link )
                {
                    printf('<li class="%s"><a href="%s">%s</a></li>',
                        $current_url === $link['link'] ?  'active' : '',
                        site_url($link['link']),
                        $link['text']
                    );
                }
                ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false"><?= htmlentities($_SESSION['nama']) ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <!-- <li><a href="<?= site_url('mandiri_web/mandiri/1/5') ?>">Ganti PIN</a></li>
                        <li role="separator" class="divider"></li> -->
                        <li><a href="<?= site_url('first/logout') ?>">Keluar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
