DERYA DEMİRKOL - 23120808031

#Bölüm 1: Genel İnternet Programlama

## 1. İnternetin temel çalışma prensibini kısaca açıklayınız.
İnternet, bilgisayar ve cihazların birbirlerine veri paketleri gönderip alarak iletişim kurduğu ağ sistemidir. Veriler, IP adresleri ve TCP/IP gibi protokoller aracılığıyla paketlenip aktarılır, hedefte yeniden birleştirilir.

## 2. IP adresi ve DNS arasındaki farkı açıklayınız.
- *IP adresi:*  İnternetteki her cihazın sahip olduğu benzersiz sayısal kimliktir (ör. 192.158.1.38).
- *DNS:* İnsanların hatırlaması kolay alan isimlerini (ör. google.com) IP adreslerine çeviren sistemdir.

## 3. TCP ve UDP arasındaki farkları belirtiniz.
- *TCP:* Bağlantı tabanlıdır, verilerin doğru iletilmesini garanti eder, veriler doğru sırayla kullanıcıya ulaşır ve bu sebeplerden ötürü UDP’ye göre daha yavaştır.
- *UDP:* Bağlantısızdır, verilerin ulaşma garantisi yoktur, veriler karışık sırayla gelebilir ve bu hata kontrol mekanizmalarının eksikliğinden ötürü TCP’ye göre daha hızlı iletim sağlar. 

## 4. HTTP protokolü hangi katmanda çalışır ve temel özellikleri nelerdir?
-HTTP protokolü uygulama katmanında çalışır. Bağlantısız (yani her istek ve yanıtı birbirinden bağımsızdır.), durum bilgisini tutmayan ve medya bağımsız bir protokoldür. 

## 5. Web tarayıcıları nasıl çalışır? Bir web sayfasını yükleme sürecini adım adım açıklayınız.
1. •	İstemci makinenin kullanıcısı web tarayıcısında bir hyperlink’e tıklar. 
2. Tarayıcı DNS sorgusu yapar ve IP adresini alır  
3. Tarayıcı sunucuya TCP/IP ile bağlanır  
4. HTTP isteği (GET veya POST) gönderilir  
5. Sunucudan yanıt gelir; HTML, CSS ve JS dosyaları alınır
6. Web server HTTP üzerinden sayfayı web browser’a gönderir, böylece kullanıcının göreceği web sayfası oluşturulmuş olur. 

## 6. Frontend ve Backend arasındaki fark nedir? Örneklerle açıklayınız.
- *Frontend:* Kullanıcının etkileşime geçtiği görsel kısımdır. Örnek: HTML, CSS, menüler, butonlar, fiyat bilgileri.
- *Backend:* Görünmeyen tarafta çalışan, verileri işleyen kısımdır. Örnek: Giriş sistemi, veritabanı işlemleri, sunucu tarafı kodlar

## 7. JSON ve XML arasındaki farkları açıklayınız.
- *JSON:* Daha sade, hızlı, JavaScript ile uyumludur. Modern web servisleri (ör. REST API, Firebase, MongoDB) genellikle JSON kullanır.
- *XML:* Etiket yapısı karmaşıktır ama güçlüdür. Genelde eski sistemlerde veya veri tanımlama dosyalarında (ör. RSS, SOAP servisleri) kullanılır.

## 8. Restful API nedir? Ne amaçla kullanılır?
*RESTful API*, HTTP üzerinden çalışan, kaynaklara dayalı (ör. kullanıcı, ürün, sipariş) veri alışverişi yapan web servisidir.
*Kullanım Amacı:* Farklı sistemlerin birbirine standart bir şekilde veri göndermesini ve almasını sağlar.

## 9. Güvenli internet iletişimi için kullanılan HTTPS protokolünün avantajlarını açıklayınız.
- HTTPS, tarayıcı ve sunucu arasındaki tüm veri akışını şifreler. Böylece üçüncü bir parti, anlamlı bir bilgiye erişemez. (ör. kredi kartı, kimlik, şifre bilgileri)
- Sunucunun kimliği sertifikalar aracılığıyla doğrulanır.
- Veri içeriğinin iletişim sırasında korunmasını sağlar

## 10. Çerezler (Cookies) nedir? Web sitelerinde nasıl kullanılır?
*Çerezler (Cookies):* Çerezler, ziyaret ettiğimiz web sitelerinin sunucusu tarafından oluşturulup cihazımıza kaydedilen küçük, metin tabanlı dosyalardır. Çerezler aracılığıyla web siteleri bir sonraki ziyaretimizde seçimlerimizi hatırlar. 
*Kullanım alanları:*  
- Beni hatırla özelliği
- Tema, dil gibi kullanıcı tercihlerinin hatırlanması  
- Alışveriş sitelerinde karşımıza çıkan reklamlar için kullanıcı bilgisi toplama

#Bölüm 2: HTML ve CSS

## 1. Aşağıdaki HTML kodunun çıktısını tahmin ediniz:
html
<!DOCTYPE html>
<html>
<head>
 <title>Örnek Sayfa</title>
</head>
<body>
 <h1>Merhaba Dünya!</h1>
 <p>Bu bir paragraf.</p>
 <a href="https://www.google.com">Google'a git</a>
</body>
</html>

*Çıktı:*

Merhaba Dünya!  (büyük ve kalın başlık)
Bu bir paragraf.
Google'a git (renklidir ve tıklandığında Google’a yönlendirir.)


## 2. <div> ve <span> etiketleri arasındaki farkı açıklayınız
- *<div>:* Mantıksal bölüm oluşturur. Blok düzeyinde bir etikettir; kullanımından önce ve sonra yeni bir satır oluşturur. Örn. bir menü, başlık veya alt bilgi.
- *<span>:* Blok içi küçük bir bölümü gruplandırır yani satır içi bir etikettir. Örn. cümle içinde bazı sözcüklerin kalın veya italik yazılarak vurgulanmasında kullanılır. 

## 3. HTML’de form elemanlarından en az 5 tanesini açıklayınız.
1. <input> – Kullanıcıdan tek satırlık veri girişi (metin, parola, e-posta vb.)  
2. <select> – Açılır, seçim yapılabilir bir menü oluşturur.
3. <option> – Açılır listede seçenek tanımlamak için kullanılır. 
4. <button> – Tıklanabilir bir buton oluşturur. 
5. <textarea> – Kullanıcıdan çok satırlı metin girişi (adres, mesaj, yorum vb.)

## 4. CSS’te ID ve Class seçicilerinin farkı ve örnekleri
### 4.1 ID ve Class farkı
- *ID (#)*: Sayfadaki spesifik bir elemana özel bir stil tanımlamak için kullanılır.
- *Class (.)*: Aynı stil birden fazla elemana uygulanmak istenildiğinde kullanılır. 

html
<p id="ozel">ID örneği.</p>
<p class="pembe">Class örneği.</p>

#ozel {
  color: blue;        /* sadece bu ID'ye sahip paragraf mavi olacak. */
  font-weight: bold;  /* yazı kalın görünecek. */
}

.pembe {
  color: hotpink;     /* bu class’a sahip tüm paragraflar pembe görünecek. */
  font-style: italic; /* yazı eğik olur. */
}


### 4.2
css
p {
 color: red;
 font-size: 16px;
}

*Cevap:* <p> paragraf etiketidir. İçine yazılan metin tarayıcı tarafından paragraf olarak algılanır. Bu kod sayfadaki tüm <p> elementlerine uygulanır; böylece tüm paragraflar kırmızı renkte ve 16px boyutunda görüntülenir.

## 5. HTML5’te yeni gelen en az 3 etiketi açıklayınız.
1. <header> – Bir sayfa/bölüme başlık tanımlama
2. <section> – Bir sayfa içeriğindeki ilişkili kısımları gruplama
3. <footer> – Bir sayfa/bölümün alt bilgi kısmını tanımlama

## 6. CSS Flexbox ile bir div öğesini yatay ve dikey olarak nasıl ortalarsınız?
html
<div class="container">
  <div class="box">Merkezdeki Kutu</div>
</div>

css
.container {
  display: flex;
  justify-content: center; /* yatay eksende ortalama */
  align-items: center;     /* dikey eksende ortalama */
  height: 100vh;
}


## 7. Responsive web tasarım nedir? Örnek bir CSS media query yazınız.
Responsive web tasarım, sayfanın farklı ekran boyutlarında dinamik görünmesini sağlar.

css
body { font-size: 16px; }

@media (max-width: 600px) {
  body { font-size: 13px; }
}


## 8. HTML tablolarında satır ve sütunları birleştirmek için hangi etiketler kullanılır?
- rowspan: Satır birleştirir.
- colspan: Sütun birleştirir.

html
<td rowspan="2">2 satırı kaplar</td>
<td colspan="3">3 sütunu kaplar</td>


## 9. CSS ile bir butona hover efekti nasıl eklenir? Örnek kod yazınız.
html
<button class="btn">Tıkla Beni</button>


css
.btn {
  background-color:#9cd6c4;
  color: white;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  transition: background-color 0.25s;
}
.btn:hover {
  background-color:#28a745;
  transform: scale(1.05);
}

#Bölüm 3: Ağ Protokolleri

## 1. HTTP ve HTTPS arasındaki temel farkları açıklayınız.
- *HTTP:* Veriler şifrelenmeden iletilir, hızlıdır ama güvenli değildir.
- *HTTPS:* Veriler iletimde SSL/TLS ile şifrelenir, güvenli iletişim sağlar, kimlik doğrulaması yapılabilir; bankalar, alışveriş siteleri tarafından kullanılır. 

## 2. FTP nedir? Hangi amaçlarla kullanılır?
*FTP*, internet üzerinden dosya aktarım protokolüdür. Sunucuya web sitesi dosyaları yüklemek, yedek almak veya dosya düzenlemek için kullanılır.

## 3. SMTP ve POP3 protokolleri arasındaki farkı açıklayınız.
- *SMTP:* E-posta gönderim protokolüdür  
- *POP3:* E-postaları sunucudan çekmek için kullanılır. 

## 4. DNS nedir? Çalışma mantığını kısaca anlatınız.
*DNS*, alan adlarını IP adreslerine dönüştüren sistemdir. Tarayıcı, girilen URL için DNS sorgusu yapar, IP adresini bulur ve bağlantıyı kurar.

## 5. DHCP protokolü ne işe yarar?
*DHCP*, ağdaki cihazlara otomatik olarak IP adresi, alt ağ maskesi ve varsayılan ağ geçidi gibi bilgileri atar.

## 6. HTTP 404 ve HTTP 500 hata kodları ne anlama gelir?
- *404:* İstenen sayfa bulunamadı hatasıdır. 
- *500:* Sunucu tarafında oluşan iç hata, hatasıdır.

## 7. Telnet ve SSH arasındaki farkı açıklayınız
- *Telnet:* Veriyi şifrelemeden iletir, güvenli değildir.
- *SSH:* Verileri şifreleyerek güvenli uzak bağlantı sağlar.

## 8. VPN nedir ve hangi amaçlarla kullanılır?
*VPN*, internet trafiğini şifreleyip özel, güvenli bir ağ üzerinden yönlendirir.
*Amaçları:* Gizlilik, güvenlik, kısıtlamaları aşmak, uzak ağlara güvenli erişim

## 9. WebSockets nedir? Nasıl çalışır?
*WebSockets*, istemci ile sunucu arasında açık ve çift yönlü iletişim kuran bir protokoldür; sayfa yenilenmeden gerçek zamanlı veri aktarımına olanak tanır.

## 10. CDN (Content Delivery Network) nedir? Web sitelerinde nasıl kullanılır?
*CDN*, web içeriklerini (resim, video, CSS) dünya genelindeki sunuculara dağıtan sistemdir.  
*Kullanım:* İçerikler en yakın sunucudan yüklenir, siteyi hızlandırır ve ana sunucunun yükünü azaltır.