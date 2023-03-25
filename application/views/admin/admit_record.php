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
                    <h1 class="m-0">Admit Records</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?=base_url('Dashboard'); ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Admit Records</li>
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
                        <h2 class="card-title">Admitted Patient</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped ">
                                <thead class="mt-3">
                                    <th>Case No.</th>
                                    <th>Patient ID</th>
                                    <th>Patient's Name</th>
                                    <th>Cause of Admit</th>
                                    <th>Admitted on</th>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($admit_list as $key => $value){ ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $value['pid']; ?></td>
                                        <td><?= $value['fullname']; ?></td>
                                        <td><?= $value['cause']; ?></td>
                                        <td><?= $value['created_at']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
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