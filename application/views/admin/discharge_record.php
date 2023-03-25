<?php
$this->load->view('admin/header');
$this->load->view('admin/sidebar');
?>
<style>
    
        @media print{
            .hide{
                visibility:hidden;
            }
        }

</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Discharge Records</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?=base_url('Dashboard'); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Discharge Records</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section>
        <div class="container-fluid">
        <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Discharged Patient</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped ">
                                <thead class="mt-3">
                                    <th>View</th>
                                    <th>Case No.</th>
                                    <th>Patient ID</th>
                                    <th>Patient's Name</th>
                                    <th>Discharge Remark</th>
                                    <th>Document</th>
                                    <th>Discharged on</th>
                                </thead>
                                <tbody> <?php $i=1; foreach($discharge_list as $key => $value){ ?> <tr>
                                        <td>
                                            <a class="btn btn-primary" href="<?= base_url('Admin/viewDetail/patient_register/'.$value['id']);?>">
                                            <i class="fa-regular fa-eye"></i>
                                            </a>
                                        </td>
                                        <td> <?= $i++; ?> </td>
                                        <td> <?= $value['pid']; ?> </td>
                                        <td> <?= $value['fullname']; ?> </td>
                                        <td> <?= $value['discharge_remark']; ?> </td>
                                        <td>
                                            <center>
                                            <img src="<?= base_url('assets/uploads/'.$value['image']); ?>" alt="" 
                                            style="border: 1px solid; border-radius: 50%; width: 50px; height: 50px;">
                                            </center>
                                        </td>
                                        <td> <?= $value['created_at']; ?> </td>
                                    </tr> <?php } ?> </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </section>
 </div>
<?php
$this->load->view('admin/footer');
?>       