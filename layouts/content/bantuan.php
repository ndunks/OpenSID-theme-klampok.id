<div class="panel panel-default">
    <div class="panel-body">
        <h1 class="text-center">DAFTAR BANTUAN</h1>

        <table class="table table-striped">
            <?php if(!empty($daftar_bantuan)): ?>
            <table class="table table-bordered">
                <caption>
                    <h3>Daftar Bantuan Yang Diterima (Sasaran Perorangan)</h3>
                </caption>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Awal</th>
                        <th>Akhir</th>
                        <th>ID KARTU</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($daftar_bantuan as $bantuan) : ?>
                    <tr>
                        <td>
                            <?php echo $bantuan['nama']?>
                        </td>
                        <td>
                            <?php echo tgl_indo($bantuan['sdate'])?>
                        </td>
                        <td>
                            <?php echo tgl_indo($bantuan['edate'])?>
                        </td>
                        <td>
                            <?php if($bantuan['no_id_kartu']) : ?>
                            <button type="button" target="kartu_peserta" title="Kartu Peserta" href="<?php echo site_url('first/kartu_peserta/'.$bantuan['id'])?>"
                                onclick="show_kartu_peserta($(this));" class="uibutton special"><span class="fa fa-print">&nbsp;</span>
                                <?php echo $bantuan['no_id_kartu']?></button>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
            <div class="alert alert-info text-center">
                Tidak ada data
            </div>
            <?php endif; ?>
        </table>
    </div>
</div>

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui-1.12.1.css">
<script src="<?php echo base_url()?>assets/js/jquery-ui.min.js"></script>
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->

<script>
    function show_kartu_peserta(elem) {
        var id = elem.attr('target');
        var title = elem.attr('title');
        var url = elem.attr('href');
        $('#' + id + '').remove();

        $('body').append('<div id="' + id + '" title="' + title + '" style="display:none;position:relative;overflow:scroll;"></div>');

        $('#' + id + '').dialog({
            resizable: true,
            draggable: true,
            width: 500,
            height: 'auto',
            open: function (event, ui) {
                $('#' + id + '').load(url);
            }
        });
        $('#' + id + '').dialog('open');
    }
</script>