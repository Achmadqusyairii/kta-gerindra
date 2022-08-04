

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">KABUPATEN
                            <a href="<?php echo base_url('kabupaten/tambah_data'); ?>" 
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
      <td>KABUPATEN</td>
      <td>AKSI</td>
      </tr>
      </thead>
  <tbody>
    <?php 
    $no=1;
    foreach ($tbl_kabupatenn as $kab) : ?>  
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $kab['kd_prov']; ?></td>
      <td><?php echo $kab['kd_kab']; ?></td>
      <td><?php echo $kab['kabupaten']; ?></td>
    <td>
      <a href="<?php echo base_url() ?>kabupaten/edit_data/<?php echo $kab['id']; ?>" class="badge badge-primary"><i class="fa-solid fa-pen"></i></a>
      <a href="<?php echo base_url() ?>kabupaten/hapus_data/<?php echo $kab['id']; ?>" class="badge badge-danger"><i class="fa-solid fa-trash-can"></i></a></td>
    </tr>
    
    <?php endforeach ?>
</tbody>
</table>      

</div>
</div>
</div>
</div>