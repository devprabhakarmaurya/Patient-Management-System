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
                    <h1 class="m-0">Patient Detail</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?=base_url('Dashboard'); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?=base_url('Admin/listDetail'); ?>">Patient Record</a>
                        </li>
                        <li class="breadcrumb-item active">View Record</li>
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
                <div class="card-header" style="font-size:25px;"><?= $view_detail['fullname']; ?></div>
                <div class="card-body">
                    <table class="table table-bordered">                           
                        <tbody>
                            <tr>    
                                <td class="col-6">Patient ID</td>
                                <td><?= $view_detail['pid']; ?></td>
                            </tr>
                            <tr>
                                <td class="col-6">Full Name</td>
                                <td><?= $view_detail['fullname']; ?></td>
                            </tr>
                            <tr>
                                <td class="col-6">Father Name</td>
                                <td><?= $view_detail['fathername']; ?></td>
                            </tr>
                            <tr>
                                <td class="col-6">Age</td>
                                <td><?= $view_detail['age']; ?></td>
                            </tr>
                            <tr>
                                <td class="col-6">Gender</td>
                                <td><?= $view_detail['gender']; ?></td>
                            </tr>
                            <tr>
                                <td class="col-6">Height</td>
                                <td><?= $view_detail['height']; ?></td>
                            </tr>
                            <tr>
                                <td class="col-6">Weight</td>
                                <td><?= $view_detail['weight']; ?></td>
                            </tr>
                            <tr>
                                <td class="col-6">Bloodgroup</td>
                                <td><?= $view_detail['bloodgroup']; ?></td>
                            </tr>
                            <tr>
                                <td class="col-6">Department</td>
                                <td><?= $view_detail['department']; ?></td>
                            </tr>
                            <tr>
                                <td class="col-6">Address</td>
                                <td><?= $view_detail['address']; ?></td>
                            </tr>
                            <tr>
                                <td class="col-6">Description Of Patient</td>
                                <td><?= $view_detail['description']; ?></td>
                            </tr>
                            <tr>
                                <td class="col-6">Visited On</td>
                                <td><?= $view_detail['created_at']; ?></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
$this->load->view('admin/footer');
?>           