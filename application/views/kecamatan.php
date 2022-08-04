

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">KECAMATAN
                            <a href="<?php echo base_url('kecamatan/tambah_data'); ?>" 
                            class="btn btn-primary btn-sm float-right">TAMBAH DATA <i class="fa fa-plus"></i></a>
                            
                        </div>  
                        <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
      <td>NO</td>
      <td>KODE PROVINSI</td>
      <td>KODE KABUPATEN</td>
      <td>KODE KECAMATAN</td>
      <td>KECAMATAN</td>
      <td>AKSI</td>
      </tr>
      </thead>
  <tbody>
    <?php 
    $no=1;
    foreach ($tbl_kecamatan as $kec) : ?>  
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $kec['kd_prov']; ?></td>
      <td><?php echo $kec['kd_kab']; ?></td>
      <td><?php echo $kec['kd_kec']; ?></td>
      <td><?php echo $kec['kecamatan']; ?></td>
    <td>
      <a href="<?php echo base_url() ?>kecamatan/edit_data/<?php echo $kec['id']; ?>" class="badge badge-primary"><i class="fa-solid fa-pen"></i></a>
      <a href="<?php echo base_url() ?>kecamatan/hapus_data/<?php echo $kec['id']; ?>" class="badge badge-danger"><i class="fa-solid fa-trash-can"></i></a></td>
    </tr>
    
    <?php endforeach ?>
</tbody>
</table>      

</div>
</div>
</div>
</div>