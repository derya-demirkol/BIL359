<?php
session_start();
require_once 'connect.php';

if(!isset($_SESSION['kulad']) || $_SESSION['rol'] != 'admin'){
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM kullanicilar";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="tr">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Kullanıcı Yönetimi - Admin</title>
<link rel="stylesheet" href="css/genel.css">
</head>
<body class="body">
<div id="container">
<header id="header">
  <div id="logo"><a href="index.html"><img src="images/logo.png" alt="MSB Logo"></a></div>
  <nav id="main-nav">
    <ul>
      <li><a href="admin.php" class="btn ">Kontrol Paneli</a></li>
      <li><a href="uyeekle.php" class="btn">Yeni Kullanıcı Ekle</a></li>
      <li><a href="logout.php" class="btn secondary">Çıkış</a></li>
    </ul>
  </nav>
</header>

<main id="content">
<h2>Kullanıcı Yönetimi</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Kullanıcı Adı</th>
        <th>Rol</th>
        <th>Durum</th>
        <th>İşlemler</th>
    </tr>
    <?php while($row = $result->fetch_assoc()): 
        $durum = isset($row['durum']) ? $row['durum'] : 'bilinmiyor';
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['kulad']) ?></td>
        <td><?= htmlspecialchars($row['rol']) ?></td>
        
        <?php if($durum == 'aktif'): ?>
            <td style="color:green; font-weight:600;">Aktif</td>
        <?php elseif($durum == 'pasif'): ?>
            <td style="color:red; font-weight:600;">Pasif</td>
        <?php else: ?>
            <td><?= htmlspecialchars($durum) ?></td>
        <?php endif; ?>

        <td>
            <a href="uyeguncelle.php?id=<?= $row['id'] ?>" class="btn">Düzenle</a>
            
            <?php if($durum == 'aktif'): ?>
                <a href="uyesil.php?id=<?= $row['id'] ?>" class="btn secondary">Pasif Yap</a>
            <?php else: ?>
                <a href="uyesil.php?id=<?= $row['id'] ?>" class="btn secondary">Aktif Yap</a>
            <?php endif; ?>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</main>

<footer id="footer">
  <p>© <span id="year9"></span> MSB Library</p>
</footer>
</div>

<script>document.getElementById('year9').textContent = new Date().getFullYear();</script>
</body>
</html>