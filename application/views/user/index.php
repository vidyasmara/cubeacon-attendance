<!-- Login Mahasiswa -->
<?php if ($this->session->userdata('role_id') == 3) { ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Absensi Kehadiran</h1>
        </div>

        <!-- Content Row -->
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>Timestamp</th>

                        </tr>
                        <?php foreach ($absen as $abs) : ?>
                            <tr>
                                <?php $nama_matkul = $this->db->get_where('tb_matakuliah', ['id_matkul' => $abs['id_matkul']])->row_array(); ?>
                                <td><?= $nama_matkul['nama_matkul']; ?></td>
                                <td><?= $abs['timestamp']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </thead>
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


<?php } else if ($this->session->userdata('role_id') == 2) { ?>
    <!-- Begin Page Content -->
    <!-- <style>
        div.scrollmenu {
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }
    </style> -->
    <!-- <div class="scrollmenu"> -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        </div>

        <!-- Content Row -->

        <div class="row">
            <div class="col">
                <div class="card shadow mb-4 border-left-primary" style="width:200%">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary" style="width:200%"><?= $this->session->userdata('nama'); ?></h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="<?= base_url('assets/') ?>img/default.jpg" class="card-img">
                                </div>
                                <div class="col-lg-4">
                                    <p class="card-text">NIP : <?= $this->session->userdata('nrp'); ?></p>
                                    <p class="card-text">Email : <?= $user['email']; ?></p>
                                </div>
                            </div>
                            <div class="row mt-5 ml-3">
                                <h4>Jadwal Mengajar</h4>

                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Mata Kuliah</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Waktu Kuliah</th>
                                            <th scope="col">Jumlah Mahasiswa</th>
                                            <th scope="col">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $i = 0; ?>
                                            <?php foreach ($matkul as $mk) : ?>
                                                <?php $i++;
                                                        $detMk = $this->db->get_where('tb_matakuliah', ['id_matkul' => $mk['id_matkul']])->row_array(); ?>
                                                <td>
                                                    <?= $i; ?>
                                                </td>
                                                <td><?= $detMk['nama_matkul']; ?></td>
                                                <td><?= $detMk['ruang']; ?></td>
                                                <td><?= $detMk['waktu_mulai']; ?>.00 - <?= $detMk['waktu_selesai']; ?>.50</td>
                                                <td>21</td>
                                                <td><a class="btn btn-warning" href="<?= base_url('dosen/') ?>detailmatkul/<?= $mk['id_matkul']; ?>">Detail</a></td>
                                            <?php endforeach; ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Content Wrapper -->
    </div>
    <!-- </div> -->
    <!-- End of Page Wrapper -->

<?php } else if ($this->session->userdata('role_id') == 1) { ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Civitas Akademika</h1>
        </div>

        <!-- Content Row -->
        <div class="container">
            <div class="row">
                <div class="col mr-5">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="<?= base_url('staff/matkul') ?>" class="btn btn-fix text-left">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h5 class="card-title text-dark ">Data MK</h5>
                                </div>
                                <div class="col-sm-auto">
                                    <i class="fas fa-book fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col mr-5">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="<?= base_url('staff/dosen') ?>" class="btn btn-fix text-left">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-dark ">Data Dosen</h5>
                                </div>
                                <div class="col">
                                    <i class="fas fa-chalkboard-teacher fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col mr-5">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="<?= base_url('staff/mahasiswa') ?>" class="btn btn-fix text-left">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-dark ">Data Mahasiswa</h5>
                                </div>
                                <div class="col">
                                    <i class="fas fa-address-card fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
<?php } ?>