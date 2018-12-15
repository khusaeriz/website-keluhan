<?php
$this->load->view('inc/head');
?>

<body style="padding-top:100px;">
<?php
$this->load->view('navbar');
 ?>

     <?php 
     foreach ($edit_Data->result() as $row) {
     	
     ?>
   <div class="container">
 
 
 <form method="post" action="<?php echo site_url('C_Admin/update'); ?>">
   <div class="form-horizontal">
 	<input type="hidden" value="<?php echo $row->id; ?>" name="id">
          <div class="form-group">
            <label  class="col-sm-2 control-label">No Tiket</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" value="<?php echo $row->no_tiket; ?>" readonly="">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-2 control-label">Nama Pengguna Layanan</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" value="<?php echo $row->nama_pengguna; ?>" readonly="">
            </div>
          </div>

             <div class="form-group">
            <label  class="col-sm-2 control-label">Jenis Keluhan</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" value="<?php echo $row->kel_layanan; ?>" readonly="">
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
            <div class="col-sm-6">
            <div class="radio">
			  <label>
			    <input type="radio" name="status" id="1" value="bd" checked>
			    Belum Di Tinjau
			  </label>

			   <label>
			    <input type="radio" name="status" id="2"  value="op" checked>
			    Sedang Di Proses
			  </label>

			   <label>
			    <input type="radio" name="status" id="3" value="ok" checked>
			    Sudah selesai di perbaiki
			  </label>
			</div>
               <!--  <textarea class="form-control" name="isi_keluhan" ><?php
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
            </textarea>  -->
              </div>

              <?php } ?>
        </div>
  </div>
  <input type="submit"  class="btn btn-lg btn-success btn-block" value="Procces" >
  </form>
<?php
$this->load->view('foot');
 ?>
</body>
</html>