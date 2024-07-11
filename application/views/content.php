    <div id="beranda" class="container-fluid bg-primary hero-header mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3 class="fw-light text-white animated slideInRight">Hallo Sobat Sehat! Apa kabar hari ini?</h3>
                    <h1 class="display-4 text-white animated slideInRight">Selamat <span class="fw-light text-dark">Datang</span> Di Apotek Hafidzah</h1>
                    <p class="text-white mb-4 animated slideInRight">Kami menyediakan suplemen, obat resep, herbal, dan lain-lain.</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid animated pulse infinite" src="<?php echo base_url() ?>assets/img/obat.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <img src="file/halal.png" alt="Halal Icon" width="70" height="70">
                            <h5 class="text-white mb-0">Halal</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-tint-slash fa-3x text-dark mb-4"></i>
                            <h5 class="text-white mb-0">Bersetifikat</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item position-relative bg-primary text-center p-3">
                        <div class="border py-5 px-3">
                            <i class="fa fa-check fa-3x text-success text-dark mb-4"></i>
                            <h5 class="text-white mb-0">Aman</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Deal Start -->
    <div id="about" class="container-fluid deal bg-primary my-5 py-5">
        <div class="container py-5 h-100">
            <div class="row g-5 align-items-center h-100">
                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                </div>
                    <div class="bg-white text-center p-4 h-100">
                        <div class="border p-4 h-100 d-flex flex-column justify-content-center">
                            <h2 class="fw-bold text-uppercase mb-4">Tentang Kami</h2>
                            <h5>Apotek Hafidzah adalah sebuah toko obat yang beralamat di di Jalan A Syairani RT 09, Sarang Halang Pelaihari.
                                Apotek Hafidzah menyediakan berbagai obat yang bersertifikat halal dan dapat dibeli secara bebas.
                            </h5>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal End -->





    <!-- Product Start -->
    <div class="container-fluid py-5" id="obat">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark">Obat-Obat di</span> Apotek Hafidzah</h1>
            </div>
            <div class="row g-4">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php 
    $totalData = floor(count($data) / 4);
    $hasilArray = [];
    for($i=0; $i<$totalData; $i++){
        $hasilArray[] = 4;
    };
    if(count($data)%4!=0){
        $totalData++;
        $hasilArray[] = count($data)%4;
    }
    ?>

    <?php $akhir = 0; ?>
    <?php $awal = 0; ?>
    <?php for($i=0; $i<$totalData; $i++) :?>
    <?php $akhir += $hasilArray[$i];?>
    <?php if($i==0) :?>
    <div class="carousel-item active">
        <div class="row">
      <?php
                for($j=$awal; $j<$akhir;$j++) { 
                $key = $data[$j];
                ?>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <div class="mb-2">
                            <!-- <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(99)</small> -->
                            <img src="./file/<?php echo $key->foto ?>" width="100px" height="100px">
                        </div>
                        <a href="" class="h6 d-inline-block mb-2"><?php echo $key->nama_obat ?></a>
                        <h5 class="text-primary mb-3"><?php echo 'Rp'. number_format($key->harga,0,',','.'); ?></h5>
                    </div>
                </div>
                <?php } ?>
                </div>
    </div>
    <?php else : ?>
<div class="carousel-item">
        <div class="row">
      <?php
                for($j=$awal; $j<$akhir;$j++) { 
                $key = $data[$j];
                ?>
                <div class="col-md-6 col-lg-3" data-wow-delay="0.1s">
                    <div class="product-item text-center border h-100 p-4">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <div class="mb-2">
                            <!-- <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(99)</small> -->
                            <img src="./file/<?php echo $key->foto ?>" width="100px" height="100px">
                        </div>
                        <a href="" class="h6 d-inline-block mb-2"><?php echo $key->nama_obat ?></a>
                        <h5 class="text-primary mb-3"><?php echo 'Rp'. number_format($key->harga,0,',','.'); ?></h5>
                    </div>
                </div>
                <?php } ?>
                </div>
    </div>
    <?php endif; ?>
    <?php $awal += $hasilArray[$i]; ?>
    <?php endfor; ?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: green;"></span>
  <span class="visually-hidden">Previous</span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: green;"></span>
  <span class="visually-hidden">Next</span>
</button>

</div>

            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-primary footer">
        <div class="container py-5">
            <div id="contact" class="row d-flex justify-content-between">
                <div class="col-sm-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="index.html" class="d-inline-block mb-3">
                        <h1 class="text-white">Apotek Hafidzah</h1>
                    </a>
                <img src="file/logo.jpg" alt="" width="300px">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 wow fadeIn text-white" data-wow-delay="0.3s">
                    <h5 class="mb-4 text-white">Hubungi Kami</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Jalan A Syairani RT 09, Sarang Halang Pelaihari</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+62 821 5498 5400</p>
                    <p><i class="fa fa-envelope me-3"></i>apotekhafidzah02@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a target="_blank" class="btn btn-square btn-outline-white me-1" href="https://wa.me/62 821 5498 5400"><i class="fab fa-whatsapp text-white"></i></a>
                        <a target="_blank" class="btn btn-square btn-outline-white me-1" href="mailto:apotekhafidzah02@gmail.com"><i class="fas fa-envelope text-white"></i></a>
                        <a target="_blank" class="btn btn-square btn-outline-white me-1" href="https://www.instagram.com/apotek_hafidzah_pelaihari/"><i class="fab text-white fa-instagram"></i></a>
                        <a target="_blank" class="btn btn-square btn-outline-white me-1" href="https://maps.app.goo.gl/QGk6fdniAUCQypqk8?g_st=iw"><i class="bi bi-geo-alt text-white"></i></a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>