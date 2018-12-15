<?php $this->load->view('inc/head'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php $this->load->view('navbar'); ?>
<div class="container" style="padding-top:100px;">
	<div class="table-responsive">
  	<table class="table">
    <tr class="active">
    <td class="success">ID</td>
    <td class="success">Nama Pengguna</td>
    <td class="success">Keluhan Layanan</td>
    <td class="success">Isi Keluhan</td>
    <td class="success">NO TIKET</td>
    <td class="success">Status</td>
    <td class="success">Edit</td>
    </tr>

    <?php foreach ($getdata as $row ) {
    	?>
    	<tr class="active">
	    <td class="success"><?php echo $row->id; ?></td>
	    <td class="success"><?php echo $row->nama_pengguna;?></td>
	    <td class="success"><?php echo $row->kel_layanan;?></td>
	    <td class="success"><?php echo $row->isi_keluhan; ?></td>
	    <td class="success"><?php echo $row->no_tiket; ?></td>
	    <td class="success"><?php echo $row->status; ?></td>
	    <td class="success"><a href="<?= base_url() ?>index.php/C_Admin/edit/<?= $row->id ?>">Edit</a>
		<?php if ($row->status === 'ok') : ?>
		 | <a href="<?= base_url() ?>index.php/C_Admin/delete/<?= $row->id ?>">Hapus</a></td>
		<?php endif; ?>
  	  </tr>
    <?php } ?>

  	</table>
	</div>
</div>	
</body>
</html>
