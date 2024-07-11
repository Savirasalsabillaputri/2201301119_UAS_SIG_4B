<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Taman</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Taman Di Tanah Laut</h6>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url('taman/tambah') ?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</button></a>
            <br><br>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Taman</th>
                            <th>Alamat</th>
                            <th>LatLong</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $key) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $key->nama_taman; ?></td>
                                <td><?php echo $key->alamat; ?></td>
                                <td><?php echo $key->lat . ',' . $key->lng; ?></td>
                                <td>
                                    <a href="./file/<?php echo $key->foto; ?>"><img src="./file/<?php echo $key->foto; ?>" width="80px" height="80px" alt="Foto Taman"></a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('taman/edit/' . $key->id_taman); ?>"><button class="btn btn-warning" type="button"><i class="fa fa-edit"></i></button></a>
                                    <a href="<?php echo base_url('taman/hapus/' . $key->id_taman); ?>" onclick="return confirm('Apakah yakin ingin menghapus?')"><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>