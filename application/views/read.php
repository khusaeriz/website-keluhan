<?php
$this->load->view('inc/head');
?>
<body style="padding-top:100px;">
<?php
$this->load->view('navbar');
 ?>
 <div class="container">
    <form class="form-horizontal" method="post" action="cari">
      <div class="form-group">
        <label  class="col-sm-2 control-label">Masukan Nomor Antrian Anda</label>
        <div class="col-sm-3">
          <input type="text" class="form-control"  name="cari" required>
        </div>
        <button type="submit" class="btn btn-primary">Lihat</button>
      </div>
      </form>
      </div>
      <br>
    <?php
$this->load->view('foot');
 ?>
</body>
</html>