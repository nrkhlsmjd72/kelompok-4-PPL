<?php
use Illuminate\Support\Facades\DB;
use App\Nav_model;
$site                 = DB::table('konfigurasi')->first();
// Produk
$myproduk             = new Nav_model();
$nav_kategori_produk  = $myproduk->nav_produk();
// Nav profil
$myprofil             = new Nav_model();
$nav_profil           = $myproduk->nav_profil();
?>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="<?php echo e(asset('/')); ?>"><span>
          <img src="<?php echo e(asset('public/upload/image/'.$site->logo)); ?>" alt="Nitrico" style="min-height: 50px; width: auto;">
        </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="<?php echo e(asset('/')); ?>"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          
            <li class="active"><a href="<?php echo e(asset('/')); ?>">Home</a></li>
            <li><a href="<?php echo e(asset('berita')); ?>">Berita</a></li>
            <li class="drop-down"><a href="<?php echo e(asset('profil')); ?>review">Profil</a>
              <ul>
                <?php foreach($nav_profil as $nav_profil) { ?>
                <li><a href="<?php echo e(asset('berita/read/'.$nav_profil->slug_berita)); ?>"><?php echo $nav_profil->judul_berita ?></a></li>
                <?php } ?>
              </ul>
            </li>
           
            <li class="drop-down"><a href="<?php echo e(asset('produk')); ?>">Produk</a>
              <ul>
                <?php foreach($nav_kategori_produk as $nkp) { ?>
                <li><a href="<?php echo e(asset('produk/kategori/'.$nkp->slug_kategori_produk)); ?>"><?php echo $nkp->nama_kategori_produk ?></a></li>
                <?php } ?>
                <li><a href="#"><hr style="margin: 0; padding: 0;"></a></li>
                <li><a href="<?php echo e(asset('produk')); ?>">Semua Produk</a></li>
              </ul>
            </li>
            <li class="drop-down"><a href="#">Galeri</a>
              <ul>
                
                <li><a href="<?php echo e(asset('video')); ?>">Video Youtube</a></li>
                <li><a href="<?php echo e(asset('galeri')); ?>">Galeri Gambar</a></li>
                <li><a href="<?php echo e(asset('download')); ?>">Unduhan File</a></li>
              </ul>
            </li>
            <li><a href="<?php echo e(asset('kontak')); ?>">Kontak</a></li>
              <li>
                  <a href="<?php echo e(asset('pemesanan')); ?>" class="orange" title="Form Pemesanan"><div class="belanja"><i class="fa fa-shopping-cart"></i> Form Order</div></a>
              </li>
                     
            
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header --><!-- ======= Hero Section ======= --><?php /**PATH C:\xampp\htdocs\cmslaravel7\resources\views/layout/header.blade.php ENDPATH**/ ?>