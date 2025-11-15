<?php
session_start();
require_once 'connect.php';

if(!isset($_SESSION['kulad']) || $_SESSION['rol'] != 'admin'){
    header("Location: login.php");
    exit();
}

if(isset($_GET['sil'])){
    $id = intval($_GET['sil']);
    $conn->query("DELETE FROM kitaplar WHERE id=$id");
    header("Location: kitaplar.php");
    exit();
}

$kitaplar = $conn->query("SELECT * FROM kitaplar ORDER BY id DESC");
?>

<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Kitap Listesi - Admin</title>
<link rel="stylesheet" href="css/genel.css">
</head>
<body>
<div id="container">
<header id="header">
    <div id="logo"><a href="index.html"><img src="images/logo.png" alt="MSB Logo"></a></div>
    <nav id="main-nav">
        <ul>
            <li><a href="admin.php" class="btn">Kontrol Paneli</a></li>
            <li><a href="kitapekle.php" class="btn">Yeni Kitap Ekle</a></li>
            <li><a href="logout.php" class="btn secondary">Çıkış</a></li>
        </ul>
    </nav>
</header>

<main id="content">
<h2>Katalog Yönetimi</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Eser Başlığı</th>
        <th>Yazar</th>
        <th>Basım Yılı</th>
        <th>İşlemler</th>
    </tr>
    <?php while($k = $kitaplar->fetch_assoc()): ?>
    <tr>
        <td><?= $k['id'] ?></td>
        <td><?= htmlspecialchars($k['baslik']) ?></td>
        <td><?= htmlspecialchars($k['yazar']) ?></td>
        <td><?= $k['yayin_yili'] ?></td>
        <td>
            <a href="kitapguncelle.php?id=<?= $k['id'] ?>" class="btn">Düzenle</a>
            <a href="kitaplar.php?sil=<?= $k['id'] ?>" class="btn secondary" onclick="return confirm('Bu eseri silmek istediğinize emin misiniz?');">Sil</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</main>
<footer id="footer">
  <p>© <span id="year15"></span> MSB Library</p>
</footer>
</div>
<script>document.getElementById('year15').textContent = new Date().getFullYear();</script>
</body>
</html>