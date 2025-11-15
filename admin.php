<?php
session_start();
require_once 'connect.php';

if(!isset($_SESSION['kulad']) || $_SESSION['rol'] != 'admin'){
    header("Location: login.php");
    exit();
}

?>

<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Yönetim Paneli - MSB Library</title>
<link rel="stylesheet" href="css/genel.css">
</head>
<body class="body">
<div id="container">
<header id="header">
  <div id="logo"><a href="index.html"><img src="images/logo.png" alt="MSB Logo"></a></div>
  <nav id="main-nav">
    <ul>
      <li>Merhaba, <?php echo htmlspecialchars($_SESSION['kulad']); ?></li>
      <li><a href="logout.php" class="btn secondary">Güvenli Çıkış</a></li>
    </ul>
  </nav>
</header>

<main id="content">
<h2>Kontrol Paneli</h2>

<section class="admin-grid">
    <div class="admin-card">
      <h3>Kullanıcı İşlemleri</h3>
      <p>Yeni kullanıcı ekle, mevcutları düzenle.</p>
      <a href="uyeler.php" class="btn">Kullanıcıları Görüntüle</a>
      <a href="uyeekle.php" class="btn">Yeni Kullanıcı Ekle</a>
    </div>

    <div class="admin-card">
      <h3>Katalog Yönetimi</h3>
      <p>Kitap ekle, güncelle veya sil.</p>
      <a href="kitaplar.php" class="btn">Kitapları Görüntüle</a>
      <a href="kitapekle.php" class="btn">Yeni Kitap Ekle</a>
    </div>

    <div class="admin-card">
      <h3>Sistem Ayarları</h3>
      <p>Genel site ayarlarını yönet.</p>
      <a href="ayarlar.php" class="btn">Ayarlara Git</a>
    </div>
</section>

<section class="admin-log">
    <h3>Sistem Kayıtları (Örnek)</h3>
    <ul>
      <li>Zeynep — 14 Kas 2025 — Yeni üye eklendi</li>
      <li>Ahmet — 13 Kas 2025 — Kitap durumu güncellendi</li>
      <li>Admin — 12 Kas 2025 — Sistem ayarları güncellendi</li>
    </ul>
</section>

</main>
<footer id="footer">
  <p>© <span id="footer-year"></span> MSB Library</p>
</footer>
</div>

<script>document.getElementById('footer-year').textContent = new Date().getFullYear();</script>
</body>
</html>