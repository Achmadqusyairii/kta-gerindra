

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ANGGOTA
                            <a href="<?php echo base_url('anggota/tambah_data'); ?>" 
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
      <td>KODE DESA</td>
      <td>LEVEL</td>
      <td>NAMA</td>
      <td>TANGGAL LAHIR</td>
      <td>NIK</td>
      <td>KTA</td>
      <td>ALAMAT</td>
      <td>TAHUN</td>
      <td>AKSI</td>
      </tr>
      </thead>
  <tbody>
    <?php 
    $no=1;
    foreach ($tbl_anggota as $anggota) : ?>  
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $anggota['kd_prov']; ?></td>
      <td><?php echo $anggota['kd_kab']; ?></td>
      <td><?php echo $anggota['kd_kec']; ?></td>
      <td><?php echo $anggota['kd_desa']; ?></td>
      <td><?php echo $anggota['level']; ?></td>
      <td><?php echo $anggota['nama']; ?></td>
      <td><?php echo $anggota['tgl_lahir']; ?></td>
      <td><?php echo $anggota['nik']; ?></td>
      <td><?php echo $anggota['no_kta']; ?></td>
      <td><?php echo $anggota['alamat']; ?></td>
      <td><?php echo $anggota['tahun']; ?></td>
      
    <td>
      <a href="<?php echo base_url() ?>anggota/detail/<?php echo $anggota['id']; ?>" class="badge badge-primary"><i class="fas fa-search"></i></a>
      <a href="<?php echo base_url() ?>anggota/printkta/<?php echo $anggota['id']; ?>" class="badge badge-primary"><i class="fa-solid fa-id-card"></i> </a>
      <a href="<?php echo base_url() ?>anggota/edit_data/<?php echo $anggota['id']; ?>" class="badge badge-primary"><i class="fa-solid fa-pen"></i></a>
      <a href="<?php echo base_url() ?>anggota/hapus_data/<?php echo $anggota['id']; ?>" class="badge badge-danger"><i class="fa-solid fa-trash-can"></i></a></td>
    </tr>
    
    <?php endforeach ?>
</tbody>
</table>      

</div>
</div>
</div>
</div>