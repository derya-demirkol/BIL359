<?php
$host = "localhost";
$db   = "kutuphane";
$user = "root";
$pass = ""; 

$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error) die("Bağlantı hatası: " . $conn->connect_error);

$hata = "";
$basari = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $kulad = $_POST['kadi'];
    
    $sifre = hash('sha256', $_POST['sifre']);
    
    $rol = "uye";

    $check_sql = "SELECT * FROM kullanicilar WHERE kulad='$kulad'";
    $check_res = $conn->query($check_sql);

    if($check_res->num_rows > 0){
        $hata = "Bu kullanıcı adı zaten alınmış! Lütfen başka bir tane seçin.";
    } else {
        $insert_sql = "INSERT INTO kullanicilar (kulad, sifre, rol) VALUES ('$kulad', '$sifre', '$rol')";

        if($conn->query($insert_sql) === TRUE){
            header("Location: login.html?kayit=basarili");
            exit();
        } else {
            $hata = "Kayıt sırasında bir hata oluştu: " . $conn->error;
        }
    }
}
?>

<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kayıt Ol - MSB Library</title>
  <link rel="stylesheet" href="css/genel.css">
</head>
<body class="body">
  <div id="container">
    <header id="header">
      <div id="logo"><a href="index.html"><img src="images/logo.png" alt="MSB Logo"></a></div>
      <nav id="main-nav">
        <ul>
          <li><a href="index.html">Anasayfa</a></li>
          <li><a href="hakkimizda.html">Hakkımızda</a></li>
          <li><a href="misyon.html">Misyon</a></li>
          <li><a href="vizyon.html">Vizyon</a></li>
          <li><a href="iletisim.html">İletişim</a></li>
          <li><a href="login.html">Giriş</a></li>
        </ul>
      </nav>
    </header>

    <main id="content">
      <h2>Yeni Üye Kaydı</h2>
      <div class="form-card">
        
        <form action="kayit-ol.php" method="post" novalidate>
          <label for="kadi">Kullanıcı Adı Seçin</label>
          <input id="kadi" name="kadi" type="text" required placeholder="Kullanıcı adınız">

          <label for="sifre">Şifre Belirleyin</label>
          <input id="sifre" name="sifre" type="password" required placeholder="Şifreniz">

          <div class="form-actions">
            <button type="submit" class="btn">Kayıt Ol</button>
            <a href="login.html" class="btn secondary">Zaten Üyeyim (Giriş Yap)</a>
          </div>

          <?php 
            if($hata != "") echo "<p style='color:red;margin-top:15px;'>$hata</p>"; 
            if($basari != "") echo "<p style='color:green;margin-top:15px;'>$basari</p>"; 
          ?>
        </form>
      </div>
     
    </main>

    <footer id="footer">
      <p>© <span id="year_kayit"></span> MSB Library</p>
    </footer>
  </div>
  <script>document.getElementById('year_kayit').textContent = new Date().getFullYear();</script>
</body>
</html>