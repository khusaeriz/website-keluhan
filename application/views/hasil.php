<?php
$this->load->view('inc/head');
?>

<body style="padding-top:100px;">
<?php
$this->load->view('navbar');
 ?>

     <?php foreach ($tampil as $row):?>
   <div class="container">
 
    <H3>Hasil Pencarian Keluhan Anda berdasarkan Nomor Tiket Antrian</H3>
 
   <div class="form-horizontal">

          <div class="form-group">
            <label  class="col-sm-2 control-label">No Tiket</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" placeholder="<?php echo $row->no_tiket; ?>" readonly="">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-2 control-label">Nama Pengguna Layanan</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" placeholder="<?php echo $row->nama_pengguna; ?>" readonly="">
            </div>
          </div>

             <div class="form-group">
            <label  class="col-sm-2 control-label">Jenis Keluhan</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" placeholder="<?php echo $row->kel_layanan; ?>" readonly="">
            </div>
          </div>

         <div class="form-group">
          <label  class="col-sm-2 control-label"> Status Keluhan Anda</label>
            <div class="col-sm-4">
                <textarea class="form-control" name="isi_keluhan" readonly=""><?php echo $row->isi_keluhan;?>
            </textarea> 
              </div>
        </div>

         <div class="form-group">
          <label  class="col-sm-2 control-label"> Status Peninjauan Data</label>
            <div class="col-sm-4">
                <textarea class="form-control" name="isi_keluhan" readonly=""><?php
                 if ($row->status == 'bd') {
                  echo 'Belum di tinjau';
                 } else
                 if ($row->status == 'op') {
                  echo 'Sedang di proses';
                 } else
                 if ($row->status == 'ok') {
                  echo 'Keluhan selesai diperbaiki';
                 }
                 ?>
            </textarea> 
              </div>

              <?php endforeach; ?>
          
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-7" style="padding-top:10px;">
             <?php echo anchor('welcome/read_kel', 'Halaman Sebelumnya','class="btn btn-primary"'); ?>
              <?php echo anchor('welcome', 'Keluar','class="btn btn-primary"'); ?>
            </div>
        </div>
        </div>
  </div>
<?php
$this->load->view('foot');
 ?>
</body>
</html>