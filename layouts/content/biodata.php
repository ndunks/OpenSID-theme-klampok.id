<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="btn-group" style="margin-bottom: 16px">
  <a href="<?= site_url("first/cetak_biodata/{$penduduk['id']}") ?>" target="_blank" class="btn btn-success">Cetak
    Biodata</a>
  <a href="<?= site_url("first/cetak_kk/{$penduduk['id']}/1") ?>" target="_blank" class="btn btn-success">Cetak
    Kartu Keluarga</a>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Biodata Penduduk</div>

  <table class="table table-striped">
    <tr>
      <td width="36%">Nama</td>
      <td width="2%">:</td>
      <td width="62%">
        <?php echo strtoupper(unpenetration($penduduk['nama']))?>
      </td>
    </tr>
    <tr class="shaded">
      <td>NIK</td>
      <td>:</td>
      <td>
        <?php echo $penduduk['nik']?>
      </td>
    </tr>
    <tr>
      <td>No KK</td>
      <td>:</td>
      <td>
        <?php echo $penduduk['no_kk']?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Akta Kelahiran</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['akta_lahir'])?>
      </td>
    </tr>
    <tr>
      <td>
        <?php echo ucwords($this->setting->sebutan_dusun)?>
      </td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['dusun'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>RT/RW</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['rt'])?>/
        <?php echo $penduduk['rw']?>
      </td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['sex'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Tempat, Tanggal Lahir</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['tempatlahir'])?>,
        <?php echo strtoupper($penduduk['tanggallahir'])?>
      </td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['agama'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Pendidikan Dalam KK</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['pendidikan_kk'])?>
      </td>
    </tr>
    <tr>
      <td>Pendidikan yang sedang ditempuh</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['pendidikan_sedang'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Pekerjaan</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['pekerjaan'])?>
      </td>
    </tr>
    <tr>
      <td>Status Perkawinan</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['kawin'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Warga Negara</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['warganegara'])?>
      </td>
    </tr>
    <tr>
      <td>Dokumen Paspor</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['dokumen_pasport'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Dokumen Kitas</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['dokumen_kitas'])?>
      </td>
    </tr>
    <tr>
      <td>Alamat Sebelumnya</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['alamat_sebelumnya'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Alamat Sekarang</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['alamat'])?>
      </td>
    </tr>
    <?php if ($penduduk['status_kawin'] <> 1): ?>
    <tr>
      <td>Akta Perkawinan</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['akta_perkawinan'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Tanggal Perkawinan</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['tanggalperkawinan'])?>
      </td>
    </tr>
    <?php endif ?>
    <?php if ($penduduk['status_kawin'] <> 1 and $penduduk['status_kawin'] <> 2): ?>
    <tr>
      <td>Akta Perceraian</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['akta_perceraian'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Tanggal Perceraian</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['tanggalperceraian'])?>
      </td>
    </tr>
    <?php endif ?>
    <tr class="judul">
      <td><b>Data Orang Tua</b></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td>NIK Ayah</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['ayah_nik'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Nama Ayah</td>
      <td>:</td>
      <td>
        <?php echo strtoupper(unpenetration($penduduk['nama_ayah']))?>
      </td>
    </tr>
    <tr>
      <td>NIK Ibu</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['ibu_nik'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Nama Ibu</td>
      <td>:</td>
      <td>
        <?php echo strtoupper(unpenetration($penduduk['nama_ibu']))?>
      </td>
    </tr>
    <tr>
      <td>Cacat</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['cacat'])?>
      </td>
    </tr>
    <tr class="shaded">
      <td>Status</td>
      <td>:</td>
      <td>
        <?php echo strtoupper($penduduk['status'])?>
      </td>
    </tr>
  </table>

</div>
<div class="row">
  <div class="col-lg-6 col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading">Keanggotaan Kelompok</div>

      <table class="table table-striped">
        <tr>
          <th width="2">No</th>
          <th>Nama Kelompok</th>
          <th>Kategori Kelompok</th>
        </tr>
        <?php
        foreach($list_kelompok as $index => $kel){
          printf('<tr><td>%d</td><td>%s</td><td>%s</td></tr>', $index+1, $kel['nama'], $kel['kategori']);
        }
      ?>
      </table>
      <?php if(empty($list_kelompok)): ?>
      <div class="panel-body text-center text-muted">
        Tidak ada data
      </div>
      <?php endif ?>
    </div>
  </div>
  <div class="col-lg-6 col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading">Keanggotaan Kelompok</div>
      <table width="100%" class="table table-striped">
        <thead>
          <tr>
            <th width="2">No</th>
            <th>Nama Dokumen</th>
            <th>Berkas</th>
            <th>Tanggal Upload</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($list_dokumen as $data){?>
          <tr>
            <td align="center" width="2">
              <?php echo $data['no']?>
            </td>
            <td>
              <?php echo $data['nama']?>
            </td>
            <td><a href="<?php echo base_url().LOKASI_DOKUMEN?><?php echo urlencode($data['satuan'])?>">
                <?php echo $data['satuan']?></a></td>
            <td>
              <?php echo tgl_indo2($data['tgl_upload'])?>
            </td>
            <td></td>
          </tr>
          <?php }?>
        </tbody>
      </table>
      <?php if(empty($list_dokumen)): ?>
      <div class="panel-body text-center text-muted">
        Tidak ada data
      </div>
      <?php endif ?>
    </div>
  </div>