<?php
$TITLE = (isset($TITLE) ? "$TITLE - " : "") . 
        sprintf('%s %s %s',
            $this->setting->website_title,
            ucwords($this->setting->sebutan_desa),
            @$desa['nama_desa']
        );
?>
<html>
<head>
	<title><?= htmlentities($TITLE) ?></title>
	
    <meta content="utf-8" http-equiv="encoding">
    <meta content="width=device-width,initial-scale=1" name=viewport>
    <meta name="keywords" content="OpenSID, SID, Sistem, Informasi, Desa, <?= $desa['nama_desa'];?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:site_name" content="<?= $desa['nama_desa'];?>"/>
    <meta property="og:type" content="article"/>
    <?php if(isset($single_artikel)): ?>
        <meta property="og:title" content="<?= $single_artikel["judul"];?>"/>
        <meta property="og:url" content="<?= base_url()?>index.php/first/artikel/<?= $single_artikel['id'];?>"/>
        <meta property="og:image" content="<?= base_url()?><?= LOKASI_FOTO_ARTIKEL?>sedang_<?= $single_artikel['gambar'];?>"/>
        <meta property="og:description" content="<?= potong_teks($single_artikel['isi'], 300)?> ..."/>
        <meta name="description" content="<?= potong_teks($single_artikel['isi'], 300)?> ..."/>
    <?php else: ?>
        <meta property="og:title" content="<?= $TITLE ?>"/>
        <meta property="og:image" content="<?= $folder_themes ?>/img/logo.png"/>
        <meta name="og:description" content="Website <?= ucwords($this->setting->sebutan_desa).' '.$desa['nama_desa'];?>"/>
        <meta name="description" content="Website <?= ucwords($this->setting->sebutan_desa).' '.$desa['nama_desa'];?>"/>
    <?php endif; ?>
    <?php if(is_file(LOKASI_LOGO_DESA . "favicon.ico")): ?>
        <link rel="shortcut icon" href="<?= base_url()?><?= LOKASI_LOGO_DESA?>favicon.ico" />
    <?php else: ?>
        <link rel="shortcut icon" href="<?= $folder_themes ?>/img/favicon.ico" />
    <?php endif; ?>
    <link rel="icon" href="<?= $folder_themes ?>/img/logo-32x32.png" sizes="32x32" />
    <link rel="icon" href="<?= $folder_themes ?>/img/logo-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="<?= $folder_themes ?>/img/logo-180x180.png" />
    <meta name="msapplication-TileImage" content="<?= $folder_themes ?>/img/logo.png" />

    <link type='text/css' href="<?= base_url()?>assets/css/font-awesome.min.css" rel='Stylesheet' />
    <link type='text/css' href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css" rel='Stylesheet' />
    
    <link type='text/css' href="<?= $folder_themes . '/css/style-v1.css'?>" rel='Stylesheet' />
    <?php if(is_file("desa/css/".$this->theme."/desa-web.css")): ?>
        <link type='text/css' href="<?= base_url()?>desa/css/<?= $this->theme ?>/desa-web.css" rel='Stylesheet' />
    <?php endif; ?>

    <script src="<?= base_url()?>assets/bootstrap/js/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>