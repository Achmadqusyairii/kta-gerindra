<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">EDIT DATA ANGGOTA </h6>
<br>

<form method="post" action ="<?php echo base_url ('anggota/edit_data_anggota'); ?>">
<input type="hidden" name="id" value="<?php echo  $tbl_anggota['id'];?>">

  <div class="from-gruop row">
    <label for="id" class="col-sm-2 col-form-label">KODE PROVINSI</label>
    <div class = "col-sm-5">
    <select name="kd_p" id="kd">
      <?php
        foreach ($tbl_provinsi as $prov) {?>
          <option value="<?= $prov['kd_prov'] ?>" <?= $prov['kd_prov'] == $tbl_anggota['kd_prov'] ? 'selected' : '' ?>><?= $prov['provinsi'] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">KODE KABUPATEN</label>
    <div class = "col-sm-5">
    <!-- <input type="text" class="from-control" name="kd_k" -->
    <!-- required="" value="<?php echo $tbl_kabupatenn['kd_kab'];?>"> -->
    <select name="kd_k" id="kd">
      <?php
        foreach ($tbl_kabupatenn as $kab) {?>
          <option value="<?= $kab['kd_kab'] ?>" <?= $kab['kd_kab'] == $tbl_anggota['kd_kab'] ? 'selected' : '' ?>><?= $kab['kabupaten'] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">KODE KECAMATAN</label>
    <div class = "col-sm-5">
    <select name="kd_ke" id="kd_ke">
      <?php
        foreach ($tbl_kecamatan as $kec) {?>
          <option value="<?= $kec['kd_kec'] ?>" <?= $kec['kd_kec'] == $tbl_anggota['kd_kec'] ? 'selected' : '' ?>><?= $kec['kecamatan'] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">KODE DESA</label>
    <!-- <?php var_dump ($tbl_desa); ?> -->
    <div class = "col-sm-5">
    <select name="kd_de" id="kd_de">
      <?php
      
        foreach ($tbl_desa as $ds) {?>
          <option value="<?= $ds['kd_desa'] ?>" <?= $ds['kd_desa'] == $tbl_anggota['kd_desa'] ? 'selected' : '' ?>><?= $ds['desa'] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">KODE JABATAN</label>
    <div class = "col-sm-5">
    <select name="kd_jab" id="kd_jab">
      <?php
        foreach ($tbl_jabatan as $jab) {?>
          <option value="<?= $jab['level'] ?>" <?= $jab['level'] == $tbl_anggota['level'] ? 'selected' : '' ?>><?= $jab['nm_jabatan'] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="nama"
    required="" value="<?php echo $tbl_anggota['nama'];?>">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
    <div class = "col-sm-5">
    <input type="date" class="from-control" name="tgl_lahir"
    required="" value="<?php echo $tbl_anggota['tgl_lahir'];?>">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">NIK</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="nik"
    required="" value="<?php echo $tbl_anggota['nik'];?>">
  </div>
</div>
<div class="from-gruop row">
    <label for="kta" class="col-sm-2 col-form-label">KTA</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="kta"
    required="" value="<?php echo $tbl_anggota['no_kta'];?>">
  </div>
</div>
<div class="from-gruop row">
    <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="alamat"
    required="" value="<?php echo $tbl_anggota['alamat'];?>">
  </div>
</div>
<div class="from-gruop row">
    <label for="" class="col-sm-2 col-form-label"></label>
    <div class = "col-sm-5">
    <button type="submit" class="btn btn-primary">Edit</button>

  </div>
</div>
</form>
</div>
</div>
</div>