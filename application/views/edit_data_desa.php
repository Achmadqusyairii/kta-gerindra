<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">EDIT DATA DESA </h6>
<br>

<form method="post" action ="<?php echo base_url ('desa/edit_data_desa'); ?>">
<input type="hidden" name="id" value="<?php echo  $tbl_desa['id'];?>">

  <div class="from-gruop row">
    <label for="id" class="col-sm-2 col-form-label">KODE PROVINSI</label>
    <div class = "col-sm-5">
    <select name="kd_p" id="kd">
      <?php
        foreach ($tbl_provinsi as $prov) {?>
          <option value="<?= $prov['kd_prov'] ?>" <?= $prov['kd_prov'] == $tbl_desa['kd_prov'] ? 'selected' : '' ?>><?= $prov['provinsi'] ?></option>
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
          <option value="<?= $kab['kd_kab'] ?>" <?= $kab['kd_kab'] == $tbl_desa['kd_kab'] ? 'selected' : '' ?>><?= $kab['kabupaten'] ?></option>
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
          <option value="<?= $kec['kd_kec'] ?>" <?= $kec['kd_kec'] == $tbl_desa['kd_kec'] ? 'selected' : '' ?>><?= $kec['kecamatan'] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">KODE DESA</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="kd_desa"
    required="" value="<?php echo $tbl_desa['kd_desa'];?>">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">DESA</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="desa"
    required="" value="<?php echo $tbl_desa['desa'];?>">
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