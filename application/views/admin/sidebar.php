<aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="<?=base_url('Dashboard'); ?>" class="brand-link">
                    <img src="<?= base_url(); ?>assets/dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    
                    <span class="brand-text font-weight-light">PMS</span>
                </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-header"></li>
                            <li class="nav-item">
                                <a href="<?=base_url('Dashboard'); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-clipboard-list"></i>
                                    <p class="text">Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('Admin/listDetail'); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-list "></i>
                                    <p class="text">Patient Records</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('Admin/admitDetail'); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-notes-medical "></i>
                                    <p class="text">Admit Records</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('admin/dischargeDetail'); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-clipboard "></i>
                                    <p class="text">Discharge Records</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('Dashboard/admit'); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-user-plus "></i>
                                    <p class="text">Admit</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('Dashboard/addtest'); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-vial "></i>
                                    <p class="text">Add Test</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?=base_url('Dashboard/p_discharge'); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-user-minus"></i>
                                    <p class="text">Discharge</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a onclick="return confirm('Are you want to Logout ?');" href="<?= base_url('Admin/logout'); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-lock"></i>
                                    <p class="text">Logout</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>