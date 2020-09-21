<?php include THEME_DIR . '/section/navbar.php' ?>
<div class="panel panel-default">
  <div class="panel-body">
    <h3>Selamat Datang di Layanan Mandiri</h3>
    <p>Anda sedang mengkases Layanan Mandiri pada
      <?= sprintf('%s %s %s',
			$this->setting->website_title,
			ucwords($this->setting->sebutan_desa),
			@$desa['nama_desa']
    ) ?>
    </p>
  </div>
  <table class="table table-lg">
    <tr>
      <td width="25%">Nama</td>
      <td width="2%">:</td>
      <td width="73%">
        <?php echo $_SESSION['nama'];?>
      </td>
    </tr>
    <tr>
      <td>NIK</td>
      <td>:</td>
      <td>
        <?php echo $_SESSION['nik'];?>
      </td>
    </tr>
    <tr>
      <td>No KK</td>
      <td>:</td>
      <td>
        <?php echo $_SESSION['no_kk']?>
      </td>
    </tr>
  </table>
  <div class="panel-body">
    <?php if ($flash_message): ?>
    <div class="alert alert-danger">
      <?= $flash_message?>
    </div>
    <?php endif; ?>

<!--     <?php if(isset($_SESSION['lg']) AND $_SESSION['lg']==1): ?>
    <div class="alert alert-warning">
      Untuk keamanan silahkan ubah kode PIN Anda.
      <a class="btn btn-sm btn-info" href="<?= site_url('mandiri_web/mandiri/1/5') ?>">Klik Disini untuk Ubah PIN</a>
    </div>
    <?php elseif(isset($_SESSION['lg']) AND $_SESSION['lg']==2):
        unset($_SESSION['lg']); ?>
    <div class="alert alert-success">
      PIN Baru berhasil Disimpan!
    </div>
    <?php endif ?> -->
  </div>
</div>