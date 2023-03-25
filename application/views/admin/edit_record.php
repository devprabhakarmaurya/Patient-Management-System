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
                    <h1 class="m-0">Edit Record</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?=base_url('Login/dashboard'); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?=base_url('Admin/listDetail'); ?>">Patient Record</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Record</li>
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
            <div class="card">
                <div class="card-body"> 
        
       <?php if(isset($update_detail)){ ?>
       <div class="row clearfix">
                <div class="col-md-6">
                    <form action="<?=base_url('Admin/updateDetail/patient_record/'.$update_detail['id']) ;?>" method="POST" enctype="multipart/form-data" >
                        <div class="mb-3"> 
                            <label for="name" class="form-label">Full Name <sup>*</sup>
                            </label>
                            <input type="text" class="form-control" id="name" value="<?= $update_detail['fullname']?>" name="fullname" required>
                        </div>
                        <div class="mb-3">
                            <label for="fathername" class="form-label">Father's Name <sup>*</sup>
                            </label>
                            <input type="text" class="form-control" id="fathername" value="<?= $update_detail['fathername']?>" name="fathername" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age<sup>*</sup>
                            </label>
                            <input type="number" class="form-control" id="age" value="<?= $update_detail['age']?>" name="age" required>
                        </div>
                        <div class="mb-3">
                            <label for="add" class="form-label">Address <sup>*</sup>
                            </label>
                            <input type="text" class="form-control" id="add" value="<?= $update_detail['address']?>" name="address" required>
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="weight" class="form-label">Weight (in kg) </label>
                        <input type="number" class="form-control" id="weight" value="<?= $update_detail['weight']?>" name="weight">
                    </div>
                    <div class="mb-3">
                        <label for="height" class="form-label">Height (in cm) </label>
                        <input type="number" class="form-control" id="height" value="<?= $update_detail['height']?>" name="height">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description <sup>*</sup>
                        </label>
                        <input type="text" class="form-control" id="description" value="<?= $update_detail['description']?>" name="description" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="bloodgroup" class="form-label">Blood Group</label>
                                <br>
                                <select id="bloodgroup" style="margin:6px;" value="<?= $update_detail['bloodgroup']?>" name="bloodgroup">
                                    <option value="">Select Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="A-">A-</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="unknown">Unknown</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="department" class="form-label">Department</label>
                                <br>
                                <select class="form-select" id="department" style="margin:6px;" value="<?= $update_detail['department']?>" name="department" required>
                                    <option value="">Select Department</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Nuerology">Nuerology</option>
                                    <option value="Orthopedics">Orthopedics</option>
                                    <option value="General Physician">General Physician</option>
                                    <option value="Other Department">Other Department</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label for="gender">
                             Gender   
                            </label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="<?= $update_detail['gender']?>" name="gender" id="male" value="Male">
                                <label class="form-check-label" for="male">
                                Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="<?= $update_detail['gender']?>" name="gender" id="female" value="Female">
                                <label class="form-check-label" for="female">
                                Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="<?= $update_detail['gender']?>" name="gender" id="other" value="Other">
                                <label class="form-check-label" for="other">
                                Other
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <input type="submit" class="btn btn-outline-success "></input>
                </div>
            </div>
            </form>
        </div>
        <?php } ?> 
            </div>
        </section>
</div>
<!-- /.content-wrapper -->
<?php
$this->load->view('admin/footer');
?>          