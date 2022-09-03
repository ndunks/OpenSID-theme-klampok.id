<?php

if ( $this->session->mandiri == 1 ) {
	redirect('layanan-mandiri');
	return;
}

$this->load->view( $folder_themes . '/section/header.php' );

?>
	<section class="container">
		<?php $this->load->view( $folder_themes . '/home/login.php' ) ?>
	</section>
<?php $this->load->view( $folder_themes . '/section/footer.php' ) ?>