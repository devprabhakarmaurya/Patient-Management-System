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
                    <h1 class="m-0">Test Detail</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?=base_url('Dashboard'); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?=base_url('Dashboard/addTest'); ?>">Add Test</a>
                        </li>
                        <li class="breadcrumb-item active">Test Detail</li>
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
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        Patient Detail
                    </div>
                    <div class="card-body">
                        <form action="<?=base_url('Dashboard/saveTest');?>" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="pid" class="form-label mt-2">Patient ID <sup>*</sup></label>
                                <input type="text" class="form-control mt-2" id="pid" name="pid" value="<?= $p_detail->pid; ?>" readonly>
                                <label for="fullname" class="form-label mt-2">Patient Name <sup>*</sup></label>
                                <input type="text" class="form-control mt-2" id="pid" name="" value="<?= $p_detail->fullname; ?>" readonly>
                                <label for="" class="form-label mt-2">Test Name<sup>*</sup></label>
                                <input type="hidden" name="user_id" value="<?= $p_detail->id ?>">
                                <input type="text" class="form-control mt-2" id="" name="test_name"  required>
                                <label for="image" class="form-label mt-2">Test Report<sup>*</sup></label>
                                <input type="file" class="form-control mt-2" id="image" name="image" required>
                                <div class="text-center">
                                <input type="submit" class="btn btn-outline-success mt-3" value="ADD"></input>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>

    </div>
<!-- /.content-wrapper -->
<?php
$this->load->view('admin/footer');
?>    