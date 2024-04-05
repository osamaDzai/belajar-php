<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Landing Page Pendaftaran Anggota Organisasi Kampus</title>
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<div class="sidebar">
  <h1 class="logo">Organisasi Kampus</h1>
  <ul class="sidebar-links">
    <li><a href="#">Beranda</a></li>
    <li><a href="#">Tentang Kami</a></li>
    <li><a href="#">Acara</a></li>
    <li><a href="#">Kontak</a></li>
    <li><a href="dashboard.html">Dashboard</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="product.php">Produk</a></li>
  </ul>
</div>

<div class="content">
  <nav class="navbar">
    <span class="toggle-button">&#9776;</span>
  </nav>

  <section class="hero">
    <div class="hero-content">
      <h1>Selamat Datang di Organisasi Kampus</h1>
      <p>Daftarkan dirimu sekarang untuk menjadi bagian dari komunitas kami!</p>
      <a href="form.html" class="btn">Daftar Sekarang</a>
    </div>
  </section>

  <section class="carousel">
    <div class="slider">
      <div><img src="assets/picture/a.jfif" alt="Slide 1"></div>
      <div><img src="assets/picture/b.jfif" alt="Slide 2"></div>
      <div><img src="assets/picture/c.jfif" alt="Slide 3"></div>
    </div>
  </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
  $(document).ready(function(){
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      dots: true,
      arrows: false
    });

    $('.toggle-button').click(function(){
      $('.sidebar').toggleClass('active');
    });
  });
</script>

</body>
</html>
