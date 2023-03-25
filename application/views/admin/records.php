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
                    <h1 class="m-0">Patient Records</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?=base_url('Dashboard'); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Records</li>
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
                <h2 class="card-title">Patient Records</h2>
            </div>
            <div class="card-body">
            <?php 
            if($this->session->flashdata('updateMsg')){
        echo " 

			<div class=' alert alert-success'>".$this->session->flashdata('updateMsg')."</div>";
       }
       ?> 
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped ">
                        <thead class="mt-3">
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Case No.</th>
                            <th>Patient ID</th>
                            <th>Patient's Name</th>
                            <th>Father's Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Weight</th>
                            <th>Height</th>
                            <th>Description</th>
                            <th>Bloodgroup</th>
                            <th>Department</th>
                            <th>Visited on</th>
                        </thead>
                        <tbody> <?php $i=1; foreach($list as $key => $value){ ?> <tr>
                                <td>
                                    <a class="btn btn-primary" href="
										<?= base_url('Admin/viewDetail/patient_register/'.$value['id']);?>">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="
										<?= base_url('Admin/editDetail/patient_register/'.$value['id']);?>">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <a onclick="return confirm('Are you sure ?');" class="btn btn-primary" href="
										<?= base_url('admin/deleteDetail/patient_register/'.$value['id']);?>">
                                        <i class="fa-regular fa-trash-alt"></i>
                                    </a>
                                </td>
                                <td> <?= $i++; ?> </td>
                                <td> <?= $value['pid']; ?> </td>
                                <td> <?= $value['fullname']; ?> </td>
                                <td> <?= $value['fathername']; ?> </td>
                                <td> <?= $value['age']; ?> </td>
                                <td> <?= $value['gender']; ?> </td>
                                <td> <?= $value['address']; ?> </td>
                                <td> <?= $value['weight']; ?> </td>
                                <td> <?= $value['height']; ?> </td>
                                <td> <?= $value['description']; ?> </td>
                                <td> <?= $value['bloodgroup']; ?> </td>
                                <td> <?= $value['department']; ?> </td>
                                <td> <?= $value['created_at']; ?> </td>
                            </tr> <?php } ?> </tbody>
                    </table>
                </div>
            </div>
        </div>
       
    </div>
    <!-- /.container-fluid -->
</section>

</div>
<?php
$this->load->view('admin/footer');
?>           