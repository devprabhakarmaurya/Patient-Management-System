<?php $this->load->view('website/header'); ?>
<!-- Page Content Start -->
<div class="page-section" style="padding:20px">
    <div class="row">
       
        <div class="col-4">
            <div class="card">
                <div class="card-body"> 
                    <?php
                    if($this->session->flashdata('confirm')){
                        echo "<div class='alert alert-success'>".$this->session->flashdata('confirm')."</div>";
                    }
                    ?> 
                    <h1 class="text-center">Contact US</h1>
                    <form action="<?=base_url('Web/saveContact'); ?>" method="post">
                        <div class="row clearfix">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="fullname">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="feedback" class="form-label">Feedback</label>
                                <input type="text" class="form-control" id="feedback" name="feedback">
                            </div>
                            <div class="row">
                                <div class="text-center">
                                    <input type="submit" class="btn btn-outline-success"></input>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.4695636814618!2d80.94059111453765!3d26.856818568960644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd0a819131cb%3A0x11553d04f3a32d9c!2sNational%20Post%20Graduate%20College!5e0!3m2!1sen!2sin!4v1678197407385!5m2!1sen!2sin" width="100%" height="390px" style="border:1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    
</div>
<!-- Page Content End -->
<?php $this->load->view('website/footer'); ?>       