<?php if ($this->session->userdata('role_id') == 3) { ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>

        <!-- Content Row -->
        <div class="contanier">
            <div class="row">
                <div class="card shadow mb-4 border-left-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">User Profile</h6>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="<?= base_url('assets/') ?>img/default.jpg" class="card-img">
                            </div>
                            <div class="col-lg-8">
                                <p class="card-text">Name : <?= $this->session->userdata('nama'); ?></p>
                                <p class="card-text">NRP : <?= $this->session->userdata('nrp'); ?></p>
                                <p class="card-text">Email : <?= $email; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
<?php } else { ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
        </div>

        <!-- Content Row -->
        <div class="contanier">
            <div class="row">
                <div class="card shadow mb-4 border-left-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">User Profile</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="<?= base_url('assets/') ?>img/default.jpg" class="card-img">
                            </div>
                            <div class="col-lg-8">
                                <p class="card-text">Name : <?= $this->session->userdata('nama'); ?></p>
                                <p class="card-text">NIP : <?= $this->session->userdata('nrp'); ?></p>
                                <p class="card-text">Email : <?= $email; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
<?php } ?>