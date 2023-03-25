<?php $this->load->view('website/header'); ?>
<!-- Page Content Start -->
<div class="page-section" style="padding:20px">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-4" style="display:flex; position:relative; justify-content:center;">
            <div class="login-box">
                <div class="login-logo">
                    <b>Admin</b> PMS </a>
                </div>
                <!-- /.login-logo -->
                <div class="card" style="margin:0px 0px 30px 0px; display:flex; jusify-content:center; align-items:center;">

                    <div class="card-body login-card-body">
                        <?php if($this->session->flashdata('error')){
                            echo "<div class='alert alert-danger'>".$this->session->flashdata('error')."</div>";
                        }elseif($this->session->flashdata('success')){
                            echo "<div class='alert alert-success'>".$this->session->flashdata('success')."</div>";
                        } ?>
                        <p class="login-box-msg">Sign in to start your session</p>
                        <form action="<?=base_url('Admin/authenticate');?>" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username" name="username" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->
    </div>
</div>
</div>
<!-- Page Content End --> <?php $this->load->view('website/footer'); ?>