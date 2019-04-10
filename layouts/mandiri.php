<?php
$TITLE = "Informasi Biodata";
$contents = array(
    array(
        'content'   => 'biodata',
        'title'     => 'Biodata'
    ),
    array(
        'content'   => 'layanan',
        'title'     => 'Layanan'
    ),
    array(
        'content'   => 'lapor',
        'title'     => 'Lapor'
    ),
    array(
        'content'   => 'bantuan',
        'title'     => 'Bantuan'
    ),
    array(
        'content'   => 'ganti_pin',
        'title'     => 'Ganti Pin'
    )
);
$index = $m - 1;
if(!isset($contents[ $index ])){
    // Default page
    $index = 0;
}
$TITLE =  $contents[$index]['title'];
include THEME_DIR . '/section/header.php';
?>
<section class="container">    
    <?php
        include THEME_DIR . '/section/navbar.php';
        include THEME_DIR . '/layouts/content/' . $contents[$index]['content'] . '.php';
    ?>
</section>
<?php include THEME_DIR . '/section/footer.php'; ?>
