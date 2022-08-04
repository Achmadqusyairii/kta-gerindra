<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">EDIT DATA KABUPATEN </h6>
<br>

<form method="post" action ="<?php echo base_url ('kabupaten/edit_data_kabupaten'); ?>">
<input type="hidden" name="id" value="<?php echo  $tbl_kabupatenn['id'];?>">

  <div class="from-gruop row">
    <label for="id" class="col-sm-2 col-form-label">KODE PROVINSI</label>
    <div class = "col-sm-5">
    <!-- <input type="number" class="from-control" name="kd"required="" value="<?php echo $tbl_kabupatenn['kd_prov'];?>"> -->
    <select name="kd_p" id="kd">
      <?php
        foreach ($tbl_provinsi as $prov) {?>
          <option value="<?= $prov['kd_prov'] ?>" <?= $prov['kd_prov'] == $tbl_kabupatenn['kd_prov'] ? 'selected' : '' ?>><?= $prov['provinsi'] ?></option>
        <?php } ?>
    </select>
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">KODE KABUPATEN</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="kd_k"
    required="" value="<?php echo $tbl_kabupatenn['kd_kab'];?>">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">KABUPATEN</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="kabupaten"
    required="" value="<?php echo $tbl_kabupatenn['kabupaten'];?>">
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