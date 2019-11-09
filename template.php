<?php include THEME_DIR . '/section/header.php'; ?>
	<section class="container">
		<?php
			$IS_LOGIN_MANDIRI = isset($_SESSION['mandiri']) && $_SESSION['mandiri'] == 1;
			include $IS_LOGIN_MANDIRI ? 
				THEME_DIR . '/home/dash.php' :
				THEME_DIR . '/home/login.php'
		?>
	</section>
<?php include THEME_DIR . '/section/footer.php'; ?>