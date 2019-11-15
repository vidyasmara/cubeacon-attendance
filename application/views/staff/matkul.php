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
            <h1 class="h3 mb-0 text-gray-800">Mata Kuliah</h1>
        </div>

        <!-- Content Row -->

        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mata Kuliah</th>
                            <th>Kelas</th>
                            <th>MAC Address Kelas</th>
                            <th>Waktu Kuliah</th>
                            <th>Dosen Pengajar</th>
                            <th>Detail</th>
                        </tr>
                        <?php $i = 0; ?>
                        <?php foreach ($matkul as $mk) : ?>
                            <?php $i++; ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $mk['nama_matkul']; ?></td>
                                <td><?= $mk['ruang']; ?></td>
                                <td><?= $mk['mac_address']; ?></td>
                                <td><?= $mk['waktu_mulai']; ?>.00 - <?= $mk['waktu_selesai']; ?>.50</td>
                                <?php $dosen = $this->db->get_where('tb_user', ['nrp' => $mk['nip_dosen']])->row_array(); ?>
                                <td><?= $dosen['nama']; ?></td>
                                <td><a class="btn btn-warning" href="<?= base_url('dosen/detailmatkul/') . $mk['id_matkul']; ?>">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </thead>
                </table>
            </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    /
</div>
<!-- End of Page Wrapper -->