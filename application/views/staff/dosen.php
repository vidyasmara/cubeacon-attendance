<!-- Begin Page Content -->
<style>
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
</style>
<div class="scrollmenu">
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Dosen</h1>
        </div>

        <!-- Content Row -->

        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>MAC Address Cubeacon</th>
                        </tr>

                        <?php $i = 0; ?>
                        <?php foreach ($dosen as $ds) : ?>
                            <?php $i++; ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $ds['nrp']; ?></td>
                                <td><?= $ds['nama']; ?></td>
                                <td><?= $ds['email']; ?></td>
                                <td><?= $ds['mac_address']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </thead>
                </table>
            </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>
</div>
<!-- End of Page Wrapper -->