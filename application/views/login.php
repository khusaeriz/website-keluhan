<?php
$this->load->view('inc/head');
?>

<body>

    <div class="container" style="padding-top:20px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                    if ($this->session->flashdata('errorLogin')){
                ?>
                <div class='alert alert-info'><?php echo $this->session->flashdata('errorLogin'); ?></div>
                <?php } ?>
                        <form method="post" action="<?php echo site_url('welcome/auth'); ?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="username" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control"name="password" type="password" >
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                               <input type="submit"  class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/js/metisMenu.min.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('js/sb-admin-2.js');?>"></script>

</body>

</html>
