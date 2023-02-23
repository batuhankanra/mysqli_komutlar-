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
*/

$baglan=new mysqli("localhost","root","","baglantı");
?>
