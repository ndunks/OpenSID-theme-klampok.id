<div class="panel">
    <div class="panel-body">
        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <h1 class="text-center">Pelaporan</h1>
            <p>Silakan laporkan sesuatu hal yang menurut anda penting, bisa mencakup perubahan data kependudukan anda atau informasi lainnya.</p>
            <?php if ($flash_message): ?>
                <div class="alert alert-<?= !empty($_SESSION['validation_error']) ? 'danger' : 'info' ?>">
                    <?= $flash_message?>
                </div>
            <?php endif; ?>
            <form action="<?= site_url()?>lapor_web/insert" method="POST">
                <div class="form-group">
                    <textarea name="komentar" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>