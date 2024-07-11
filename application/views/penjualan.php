

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Penjualan</h1>
                   
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
                        </div>
                        <div class="card-body">
                            <a href="<?php echo base_url('penjualan/tambah') ?>"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a> &nbsp;
                            <?php
                        if ($this->session->userdata('level')=='admin') {
                         ?>
                            <a href="<?php echo base_url('penjualan/tanggal_cetak') ?>"><button class="btn btn-secondary"><i class="fa fa-print"></i></button></a>
                            <?php } ?>
                            <br><br>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Faktur</th>
                                            <th>Tanggal Penjualan</th>
                                            
                                            <th>operator</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        // $tot=0;
                                        foreach ($data as $key) {
                                            
                                            ?>
                                            <tr>
                                            <th><?php echo $no++; ?></th>
                                            <td><?php echo $key->no_faktur; ?></td>
                                            <td><?php echo date('d F Y', strtotime($key->tgl_penjualan)); ?></td>
                                            <td><?php echo $key->username; ?></td>
                                            <th>
                                            <a href="<?php echo base_url('penjualan/detail/'.$key->id_penjualan) ?>"><button class="btn btn-primary" type="button" title="detail"><i class="fa fa-list"></i></button></a>
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
    