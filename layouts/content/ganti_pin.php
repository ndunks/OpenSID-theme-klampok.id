<div class="panel">
    <div class="panel-body">
        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <h1 class="text-center">Ganti PIN</h1>
           
            <form action="<?php echo site_url('first/ganti')?>" method="post">
                <div class="form-group">
                    <input name="pin1" type="text" placeholder="PIN" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <input name="pin2" type="text" placeholder="Ulangi PIN" value="" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>