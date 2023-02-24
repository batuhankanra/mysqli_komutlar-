<?php
/* $baglan=mysqli_connect("localhost","root","","baglantı")or die("mysql baglantisi başarısız");
mysqli_set_charset($baglan,"utf8");
//$sorgu=mysqli_query($baglan,"insert into ayar values('','batuhan1','12345','batuhan1 kanra php koduyla ekleme')");
//$sorgu=mysqli_query($baglan,"update ayar set icerik_ad='icerik_bolum2' where (id=3)" );
//$sorgu=mysqli_query($baglan,"delete from ayar ");
//$sorgu=mysqli_query($baglan,"update ayar set icerik_ad='icerik bolüm 1'");
//$sonuc=mysqli_affected_rows($baglan);

$sorgu=mysqli_query($baglan,"select * from ayar");
while($satir=mysqli_fetch_assoc($sorgu)){
    echo "adı soyadı:$satir[kullanici_adi] - sifre=$satir[sifre]";
}

$toplam=mysqli_num_rows($sorgu);
echo "toplam $toplam kayıt bulundu";

$baglan=mysqli_connect("localhost","root","","baglantı")or die("mysql bağlantısı başarısız");
mysqli_set_charset($baglan,"utf8");



$sorgu=mysqli_query($baglan,"select * from ayar");
/*while($satir=mysqli_fetch_assoc($sorgu)){
    echo "kullanici adi: $satir[kullanici_adi]- sifresi: $satir[sifre] -aciklama : $satir[icerik_ad]";
    echo "<br>";
}
while($satir=mysqli_fetch_object($sorgu)){
    echo "kullanici adi: $satir->kullanici_adi sifresi $satir->sifre -aciklama: $satir->icerik_ad";
    echo "<br> <br>";
}
$toplam=mysqli_num_rows($sorgu);
echo "toplam $toplam kayıt bulundu <br>";
$sonuc=mysqli_affected_rows($baglan);
echo "$sonuc adet kayıt güncellendi";

mysqli_free_result($sorgu);
mysqli_close($baglan);
*/

// güvenli bir veri tabanı bağlantısı
$baglan=new mysqli("localhost","root","","baglantı")or die("bağlantı hatası");
$baglan->set_charset("utf8");

/* güvenli bir şekilde veri tabanına veri ekleme
$sorgu=$baglan->query("INSERT INTO ayar values('','batuhankan1','123456789','açıklama seti girildi')");
*/

// veri tabanındaki verileri çekme
/*$sorgu=$baglan->query("SELECT * FROM ayar");

while($satir=$sorgu->fetch_object()){
    echo "Kullanıcı adı :$satir->kullanici_adi sifresi:$satir->sifre aciklama: $satir->icerik_ad <br> <br>";
}
$sorgu->free_result();
*/

//veri tabanına kayıt ekleme

$sorgu=$baglan->prepare("INSERT INTO ayar (kullanici_adi,sifre,icerik_ad) VALUES(?,?,?)");

$sorgu->bind_param("sss",$adsoyad,$sifre,$aciklama);
$adsoyad="kullanici adi 1";
$sifre="11111";
$aciklama="nesne yönelimli açıklama1";
$sorgu->execute();

$adsoyad="kullanici adi 2";
$sifre="22222";
$aciklama="nesne yönelimli açıklama2";
$sorgu->execute();

$sorgu->close();

$baglan->close();
?>
