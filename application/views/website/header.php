<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PMS</title>
        <link rel="shortcut icon" href="<?=base_url();?>assets/dist/img/website.png" type="image/x-icon">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
    </head>
    <body>
        <div class="header">
            <img src="<?= base_url(); ?>assets/dist/img/hospital.png" alt="" style="height:40px; width:43px;">
            <!-- <h2>Patient Management System</h2> -->
            <div class="menu">
                <div class="nav">
                    <ul class="nav">
                        <li>
                            <a href="<?=base_url();?>">Home</a>
                        </li>
                        <li>
                            <a href="<?=base_url('Register');?>">Patient Register</a>
                        </li>
                        <li>
                            <a href="<?=base_url('Admin');?>">Admin</a>
                        </li>
                        <li>
                            <a href="<?=base_url('web/contact');?>">Contact US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>