<?php
session_start();
require_once 'connect.php';

if(!isset($_SESSION['kulad']) || $_SESSION['rol'] != 'uye'){
    header("Location: login.php");
    exit();
}


if(isset($_GET['logout'])){
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kullanıcı Paneli - MSB Library</title>
  <link rel="stylesheet" href="css/genel.css">
</head>
<body class="body">
<div id="container">
<header id="header">
  <div id="logo"><a href="index.html"><img src="images/logo.png" alt="MSB Logo"></a></div>
  <nav id="main-nav">
    <ul>
      <li>Hoşgeldiniz, <?php echo htmlspecialchars($_SESSION['kulad']); ?></li>
      <li><a href="logout.php" class="btn secondary">Çıkış</a></li>

    </ul>
  </nav>
</header>

<main id="content">
  <h2>Kullanıcı Paneli</h2>

  <section class="admin-grid">
    <div class="admin-card">
      <h3>Kitaplarım</h3>
      <p>Ödünç aldığınız kitapları görebilir ve durumlarını kontrol edebilirsiniz.</p>
      <a href="#" class="btn">Kitap Listesi</a>
    </div>

    <div class="admin-card">
      <h3>Profilim</h3>
      <p>Kişisel bilgilerinizi güncelleyebilirsiniz.</p>
      <a href="#" class="btn">Profili Düzenle</a>
    </div>

    <div class="admin-card">
      <h3>İsteklerim</h3>
      <p>Kitap isteklerinizi görüntüleyebilirsiniz.</p>
      <a href="#" class="btn">İsteklerim</a>
    </div>
  </section>
</main>

<footer id="footer">
  <p>© <span id="year8"></span> MSB Library</p>
</footer>
</div>

<script>document.getElementById('year8').textContent = new Date().getFullYear();</script>
</body>
</html>