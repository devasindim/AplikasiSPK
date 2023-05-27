<!DOCTYPE html>
<html>
<head>
  <title>Navbar Cantik</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    
    .navbar {
      background-color: #ff69b4;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
    }
    
    .navbar-logo {
      display: flex;
      align-items: center;
    }
    
    .navbar-logo img {
      width: 40px;
      margin-right: 10px;
    }
    
    .navbar-nav {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
    }
    
    .navbar-nav li {
      margin-right: 10px;
    }
    
    .navbar-nav li a {
      color: #fff;
      text-decoration: none;
    }
    
    .content {
      margin-top: 60px;
      padding: 20px;
    }
  </style>
</head>
<body>
  <nav class="navbar">
    <div class="navbar-logo">
    <img src="asset/image/alternatif.svg"/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <button class="btn btn-pink" id="hidden"><i class="fa fa-list text-white"></i></button> -->
      <h3>Pemilihan Laptop</h3>
    </div>
    <ul class="navbar-nav">
      <li><a href="./?page=beranda">Beranda</a></li>
      <li><a href="./?page=metode">Metode</a></li>
      <li><a href="./?page=kriteria">Kriteria</a></li>
      <li><a href="./?page=alternatif">Alternatif</a></li>
      <li><a href="./?page=bobot">Bobot</a></li>
      <li><a href="./?page=nilai">Penilaian</a></li>
      <li><a href="./?page=hasil">Hasil</a></li>
      <li><a href="./logout.php" id="out">Keluar</a></li>
    </ul>
  </nav>
  
  <div class="content">
    <!-- <h1>Selamat datang di website kami!</h1>
    <p>Ini adalah halaman konten.</p> -->
  </div>
</body>
</html>
