<div class="container-fluid"> 

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">TAMBAH DATA PROVINSI </h6>
<br>
<form method="post" action ="<?php echo base_url ('provinsi/tambah_data_provinsi'); ?>">
  <div class="from-gruop row">
    <label for="kd" class="col-sm-2 col-form-label">kode</label>
    <div class = "col-sm-5">
    <input type="number" class="from-control" name="kd">
  </div>
</div>
<div class="from-gruop row">
    <label for="nama" class="col-sm-2 col-form-label">provinsi</label>
    <div class = "col-sm-5">
    <input type="text" class="from-control" name="provinsi">
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