<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- Content Row -->

    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NRP</th>
                            <th>Timestamp</th>
                        </tr>
                        <?php foreach ($absen as $abs) : ?>
                            <?php if ($abs['nrp'] != $this->session->userdata('nrp')) { ?>
                                <tr>
                                    <td><?= $abs['nrp']; ?></td>
                                    <td><?= $abs['timestamp']; ?></td>
                                </tr>
                            <?php } ?>
                        <?php endforeach; ?>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->