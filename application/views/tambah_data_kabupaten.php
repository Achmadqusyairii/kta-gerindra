<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">TAMBAH DATA PROVINSI </h6>
<br>
<form method="post" action ="<?php echo base_url ('kabupaten/tambah_data_kabupaten'); ?>">
  <div class="from-gruop row">
    <label for="kd_p" class="col-sm-2 col-form-label">kode prov</label>
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
    <input type="number" class="from-control" name="kd_k">
    <!-- <select name="kd_p" id="kd_p">
      <?php
        foreach ($tbl_kabupatenn as $kab) {?>
          <option value="<?= $kab['kd_kab'] ?>"><?= $kab['kabupaten'] ?></option>
        <?php } ?>
    </select> -->
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">kabupaten</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="kabupaten">
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
