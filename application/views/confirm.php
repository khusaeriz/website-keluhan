<?php
$this->load->view('inc/head');
?>

<body style="padding-top:100px;">
<?php
$this->load->view('navbar');
 ?>
<h1 align="center">Terima Kasih Telah Menggunakan Layanan Kami.</h1>
    <form class="form-horizontal" style=" margin-left:400px;">
     <div class="form-group">
        <label  class="col-sm-3 control-label">Nomor Tiket Antrian Anda</label>
        <div class="col-sm-2">
        <?php foreach ($list as $row ); { ?>

          <table>
          	<tr>
            	<input type="text" readonly value="<?php echo $row->no_tiket; ?>" >
          	</tr>
          </table>
        </div>
      </div>

      <p align="left"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jika ingin melihat status antrian, Klik di bawah ini.</p>
     
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-3">
         <?php echo anchor('welcome/cari/'.$row->no_tiket, 'Lihat','class="btn btn-primary"'); ?>
          <?php echo anchor('welcome', 'Kembali','class="btn btn-primary"'); ?>
        </div>
      </div>
    </form>
        <?php }?>
    <?php
$this->load->view('foot');
 ?>
</body>
</html>