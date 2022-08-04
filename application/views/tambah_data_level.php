<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">TAMBAH DATA LEVEL </h6>
<br>
<form method="post" action ="<?php echo base_url ('Level/tambah_data_level'); ?>">
  <div class="from-gruop row">
    <label for="level" class="col-sm-2 col-form-label">Level jabatan</label>
    <div class = "col-sm-5">
    <input type="number" class="from-control" name="level">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">Jabatan</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="nama">
  </div>
</div>
<div class="from-gruop row">
    <label for="" class="col-sm-2 col-form-label"></label>
    <div class = "col-sm-5">
    <button type="submit" class="btn btn-primary">Simpan</button>

  </div>
</div>
</form>
</div>
</div>
</div>