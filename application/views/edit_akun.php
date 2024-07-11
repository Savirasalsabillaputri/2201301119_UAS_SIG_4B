

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Data Akun</h1>
                   <div class="row">
                    <div class="col-md-3">
</div>
<div class="col-md-6">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Akun</h6>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('akun/proses_edit_akun') ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $data->id ?>">
                                        <input type="text" class="form-control" name="username" value="<?php echo $data->username ?>">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" class="form-control" name="password" value="<?php echo $data->password ?>">

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Level</label>
                                        <!-- <input type="text" class="form-control" name="level" value="<?php echo $data->level ?>"> -->
                                        <select class="form-control" name="level">
                                        <option <?php echo $data->level=='admin'?'selected':'' ?>>admin</option>
                                        <option <?php echo $data->level=='karyawan'?'selected':'' ?>>karyawan</option>

                                     </select>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" value="simpan" class="btn btn-primary">
                                </div>
                                <div class="col-md-2">
                                    <input type="reset" value="  reset  " class="btn btn-success">
                                </div>
                                <div class="col-md-2">
                                    <a href="<?php echo base_url('akun') ?>" class="btn btn-secondary">Kembali</a>
                                </div>
                                

                            </div>


                            </form>
                            
                        </div>
                    </div>
</div>
</div>
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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
    