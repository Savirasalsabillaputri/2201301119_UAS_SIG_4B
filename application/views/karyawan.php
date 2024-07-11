

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Karyawan</h1>
                   
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
                        </div>
                        <div class="card-body">
                            <a href="<?php echo base_url('karyawan/tambah') ?>"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a>
                            <br><br>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Karyawan</th>
                                            <th>Tanggal Lahir</th>
                                            <th>No hp</th>
                                            <th>Alamat</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $key) {
                                            ?>
                                            <tr>
                                            <th><?php echo $no++; ?></th>
                                            <th><?php echo $key->nama_karyawan ?></th>
                                            <td><?php echo date('d F Y', strtotime($key->tgl_lahir)); ?></td>
                                            <th><?php echo $key->no_hp?></th>
                                            <th><?php echo $key->alamat?></th>
                                            <th><a href="./file/<?php echo $key->foto ?>" target="_blank"><img src="./file/<?php echo $key->foto ?>" width="80px" height="80px"></a></th>
                                            <th>
                                                <a href="<?php echo base_url('karyawan/edit/'.$key->id_karyawan) ?>"><button class="btn btn-warning" type="button"><i class="fa fa-edit"></i></button></a>
                                                <a href="<?php echo base_url('karyawan/hapus/'.$key->id_karyawan) ?>" onclick="confirm('apakah yakin ingin menghapus ?')"><button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button></a>
                                            </th>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    