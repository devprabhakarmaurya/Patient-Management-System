<?php
$this->load->view('admin/header');
$this->load->view('admin/sidebar');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Test</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?=base_url('Dashboard'); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Add Test</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content" style="max-height:100vh;">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                    <?php
                    if($this->session->flashdata('success')){
                        echo "<div class='alert alert-success'>".$this->session->flashdata('success')."</div>";
                    }
                ?>    
                        <div class="row clearfix">
                            <div class="col-4"></div>
                            <div class="col-4" style="display:flex; justify-content:center; align-items:center;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <form action="<?=base_url('Dashboard/addTestDetail');?>" method="post">
                                            <div class="mb-3">
                                                <label for="pid" class="form-label">Patient ID<sup>*</sup>
                                                </label>
                                                <input type="number" class="form-control" id="pid" name="pid" style="width:200px;" required>
                                                <div class="text-center">
                                                <input type="submit" class="btn btn-outline-success mt-3"></input>
                                                </div>
                                            </div>    
                                        </form>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        
        </section>

    </div>
<!-- /.content-wrapper -->
<?php
$this->load->view('admin/footer');
?>   