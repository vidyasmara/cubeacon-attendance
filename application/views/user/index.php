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
                            <?php for ($i = 1; $i < 17; $i++) { ?>
                                <th><?= $i; ?></th>
                            <?php } ?>
                        </tr>
                        <?php foreach ($matkul as $mk) : ?>
                            <tr>
                                <?php $nama_matkul = $this->db->get_where('tb_matakuliah', ['id_matkul' => $mk['id_matkul']])->row_array(); ?>
                                <td><?= $nama_matkul['nama_matkul']; ?></td>
                                <?php foreach ($absen as $a) { ?>
                                    <?php if ($a['id_matkul'] == $mk['id_matkul']) {
                                        ?>
                                        <td><?= $a['id_matkul']; ?></td>
                                    <?php } ?>
                                <?php } ?>
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
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Mata Kuliah</h1>
        </div>

        <!-- Content Row -->

        <div class="row">
            <div class="col">
                <div class="card shadow mb-4 border-left-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Arief Kurniawan ST, MT.</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <img src="img/default.jpg" class="card-img">
                            </div>
                            <div class="col-lg-4">
                                <p class="card-text">NIP : </p>
                                <p class="card-text">Email : </p>
                                <p class="card-text">Room/Office : </p>
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
                                        <td>1</td>
                                        <td>Jaringan Sensor Nirkabel dan IoT</td>
                                        <td>A234</td>
                                        <td>11.00 - 13.50</td>
                                        <td>21</td>
                                        <td><a class="btn btn-warning" href="detailmatkul.html">Detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>
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
                        <a href="" class="btn btn-fix text-left">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h5 class="card-title text-dark ">Data MK</h5>
                                </div>
                                <div class="col-sm-auto">
                                    <i class="fas fa-exclamation-triangle fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col mr-5">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="" class="btn btn-fix text-left">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title text-dark ">Data Dosen</h4>
                                </div>
                                <div class="col">
                                    <i class="fas fa-exclamation-triangle fa-3x"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col mr-5">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="" class="btn btn-fix text-left">
                            <div class="row">
                                <div class="col">
                                    <h4 class="card-title text-dark ">Data Mahasiswa</h4>
                                </div>
                                <div class="col">
                                    <i class="fas fa-exclamation-triangle fa-3x"></i>
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