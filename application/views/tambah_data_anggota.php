<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">TAMBAH DATA ANGGOTA </h6>
<br>
<form method="post" action ="<?php echo base_url ('anggota/tambah_data_anggota'); ?>">
  <div class="from-gruop row">
    <label for="kd_p" class="col-sm-2 col-form-label" >kode provinsi</label>
    
    <div class = "col-sm-5">
    <!-- <input type="number" class="from-control" name="kd_p"> -->
    <select name="kd_p" id="kd_p">
      <?php
        foreach ($tbl_provinsi as $prov) {?>
          <option value="<?= $prov['kd_prov'] ?>"><?= $prov['provinsi'] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="kd_k" class="col-sm-2 col-form-label">kode kabupaten</label>
    <div class = "col-sm-5">
    <!-- <input type="number" class="from-control" name="kd_k"> -->
    <select name="kd_k" id="kd_k">
      <?php
        foreach ($tbl_kabupatenn as $kab) {?>
          <option value="<?= $kab['kd_kab'] ?>"><?= $kab['kabupaten'] ?></option>
        <?php } ?>
        </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="kd_k" class="col-sm-2 col-form-label">kode kecamatan</label>
    <div class = "col-sm-5">
    <!-- <input type="number" class="from-control" name="kd_k"> -->
    <select name="kd_ke" id="kd_k">
      <?php
        foreach ($tbl_kecamatan as $kec) {?>
          <option value="<?= $kec['kd_kec'] ?>"><?= $kec['kecamatan'] ?></option>
        <?php } ?>
        </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="kd_desa" class="col-sm-2 col-form-label">kode desa</label>
    <div class = "col-sm-5">
    <!-- <input type="number" class="from-control" name="kd_k"> -->
    <select name="kd_desa" id="kd_desa">
      <?php
        foreach ($tbl_desa as $desa) {?>
          <option value="<?= $desa['kd_desa'] ?>"><?= $desa['desa'] ?></option>
        <?php } ?>
        </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="kd_jab" class="col-sm-2 col-form-label">kode jabatan</label>
    <div class = "col-sm-5">
    <!-- <input type="number" class="from-control" name="kd_k"> -->
    <select name="kd_jab" id="kd_jab">
      <?php
        foreach ($tbl_jabatan as $jab) {?>
          <option value="<?= $jab['level'] ?>"><?= $jab['nm_jabatan'] ?></option>
        <?php } ?>
        </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">nama</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="nama">
  </div>
</div>
<div class="from-gruop row">
    <label for="tgl_lahir" class="col-sm-2 col-form-label">tanggal lahir</label>
    <div class = "col-sm-5">
    <input type="date" class="from-control" name="tgl_lahir">
  </div>
</div>
<div class="from-gruop row">
    <label for="nik" class="col-sm-2 col-form-label">nik</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="nik">
  </div>
</div>
<div class="from-gruop row">
    <label for="kta" class="col-sm-2 col-form-label">no_kta</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="kta">
  </div>
</div>
<div class="from-gruop row">
    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="alamat">
  </div>
</div>
<div class="from-gruop row">
    <label for="alamat" class="col-sm-2 col-form-label">tahun</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="tahun">
  </div>
</div>
<div class="from-gruop row">
    <label for="" class="col-sm-2 col-form-label"></label>
    <div class = "col-sm-5">
    <button type="submit" class="btn btn-primary">SIMPAN</button>

  </div>
</div>
</form>
</div>
</div>
</div>
