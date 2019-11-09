<div class="panel panel-default">
    <div class="panel-body">
        <h1 class="text-center">DAFTAR REKAM CETAK SURAT</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th align="left">Nomor Surat</th>
                    <th align="left">Jenis Surat</th>
                    <th align="left">Nama Staf</th>
                    <th align="left">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($surat_keluar as $data): ?>
                <tr>
                    <td align="center" width="2">
                        <?php echo $data['no']?>
                    </td>
                    <td>
                        <?php echo $data['no_surat']?>
                    </td>
                    <td>
                        <?php echo $data['format']?>
                    </td>
                    <td>
                        <?php echo $data['pamong']?>
                    </td>
                    <td>
                        <?php echo tgl_indo2($data['tanggal'])?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php if(empty($surat_keluar)): ?>
        <div class="alert alert-info text-center">
            Tidak ada data
        </div>
        <?php endif ?>
    </div>
</div>