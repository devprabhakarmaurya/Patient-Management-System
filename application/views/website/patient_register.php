<?php $this->load->view('website/header'); ?>
<!-- Page Content Staart -->
<div class="page-section" style="padding:20px">
    <div class="card" style="margin:50px 50px;">
        <div class="card-header">
            <h3>Patient Registration</h3>
        </div>
        <div class="card-body"> 
        <?php 
            if($this->session->flashdata('success')){
        echo "
			<div class='alert alert-success'>".$this->session->flashdata('success')."</div>";
       }
       ?> 
       <div class="row clearfix">
                <div class="col-md-6">
                    <form action="<?=base_url('Register/saveRecord');?>" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name<sup>*</sup>
                            </label>
                            <input type="text" class="form-control" id="name" name="fullname" required>
                        </div>
                        <div class="mb-3">
                            <label for="fathername" class="form-label">Father's Name <sup>*</sup>
                            </label>
                            <input type="text" class="form-control" id="fathername" name="fathername" required>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age<sup>*</sup>
                            </label>
                            <input type="number" class="form-control" id="age" name="age"  required>
                        </div>
                        <div class="mb-3">
                            <label for="add" class="form-label">Address <sup>*</sup>
                            </label>
                            <input type="text" class="form-control" id="add" name="address" required>
                            <input type="hidden" name="pid" value="<?php echo rand(100,999); ?>">
                        </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="weight" class="form-label">Weight (in kg) </label>
                        <input type="number" class="form-control" id="weight" max="999" name="weight">
                    </div>
                    <div class="mb-3">
                        <label for="ht" class="form-label">Height (in cm) </label>
                        <input type="number" class="form-control" id="ht" max="999" name="height">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description<sup>*</sup>
                        </label>
                        <input type="text" class="form-control" id="description" name="description" required>
                    </div>
                    <div class="row clearfix" >
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="bloodgroup" class="form-label">Blood Group</label>
                                <br>
                                <select id="bloodgroup" style="margin:6px;" name="bloodgroup">
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
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="department" class="form-label">Department<sup>*</sup></label>
                                <br>
                                <select id="department" style="margin:6px;" name="department" required>
                                    <option value="">Select Department</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Nuerology">Nuerology</option>
                                    <option value="Orthopedics">Orthopedics</option>
                                    <option value="General Physician">General Physician</option>
                                    <option value="Other Department">Other Department</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="gender">
                             Gender<sup>*</sup>   
                            </label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
                                <label class="form-check-label" for="male">
                                Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                                <label class="form-check-label" for="female">
                                Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
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
                    <input type="submit" class="btn btn-outline-success"></input>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Page Content End --> <?php $this->load->view('website/footer'); ?>