<?php
$this->load->view('inc/head');
?>
<body>
    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Selamat Datang</h1><h2> di Layanan Keluhan Bidang IT Fasilitas</h2><h3>Universitas Bina Sarana Informatika</h3>
                        <h3></h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                
                            </li>
                            <li>
                                <a href="<?php echo site_url('welcome/keluhan'); ?>" class="btn btn-default btn-lg"><span class=" glyphicon glyphicon-pencil"></span> Keluhan</a>
                                <a href="<?php echo site_url('welcome/read_kel'); ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-search"></span> Cek Status Keluhan</a>
                                <a href="<?php echo site_url('welcome/login'); ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                            </li>
                            <li>
                            
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->


    <!-- Footer -->
    <?php
$this->load->view('foot');
 ?>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>

</html>
