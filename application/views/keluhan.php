<?php
$this->load->view('inc/head');
?>

<body>
<?php
$this->load->view('navbar');
 ?>
 <div class="container">
    <form class="form-horizontal" action="<?php echo site_url('Welcome/log_kel'); ?>" method="post" style="padding-top:120px;">
  <div class="form-group">
 <input type="hidden" name="no_tiket" value="">
    <label  class="col-sm-2 control-label">Nama Pengguna Layanan</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="nama_pengguna" required>
    </div>
  </div>
  
  <div class="form-group">
    <label  class="col-sm-2 control-label">Pilih Keluhan Layanan</label>
    <div class="col-sm-3">
      <select class="form-control" name="kel_layanan" required>
       <option value="1">Jaringan Internet</option>
       <option value="2">Proyektor</option>
       <option value="3">PC</option>
		   
	</select>
    </div>
 
  </div>
    <div class="form-group">
    <label  class="col-sm-2 control-label">Isi Keluhan</label>
    <div class="col-sm-3">
     <textarea class="form-control" name="isi_keluhan" rows="3" required></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
      <button type="submit" class="btn btn-primary">Kirim </button>
    </div>
  </div>
</form></div>
<?php
$this->load->view('foot');
 ?>
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>

</html>
