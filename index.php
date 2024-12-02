<?php
ob_start();
include 'header.php';

?>

<style>
  @keyframes fadeInScale {
    0% {
      opacity: 0;
      transform: scale(0.8);
    }
    100% {
      opacity: 1;
      transform: scale(1);
    }
  }

  .hero-content h1 {
    animation: fadeInScale 1s ease-out;
  }

  .hero-content p {
    animation: fadeInScale 1.5s ease-out;
  }

  .hero-content .btn {
    animation: fadeInScale 2s ease-out;
  }

</style>

<!-- Hero Section -->
<div class="container-fluid py-5 my-5">
  <div class="d-flex align-items-center justify-content-center text-center text-white">
    <div class="overlay"></div>
    <div class="hero-content">
      <h1>Welcome to RupaCraft</h1>
      <p>Ayo Temukan Barang Kesukaan mu Sekarang !!</p>
      <a href="#products" class="btn btn-primary btn-lg">Beli Sekarang </a>
    </div>
  </div>
</div>

<!-- Main content area -->
<div class="container my-5" id="products">
  <?php include './template/_products.php'; ?>
</div>

<?php
include 'footer.php';
?>