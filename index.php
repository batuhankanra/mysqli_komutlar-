<?php
$baglan=mysqli_connect("localhost","root","","baglantı")or die("mysql baglantisi başarısız");
mysqli_set_charset($baglan,"utf8");
//$sorgu=mysqli_query($baglan,"insert into ayar values('','batuhan1','12345','batuhan1 kanra php koduyla ekleme')");
//$sorgu=mysqli_query($baglan,"update ayar set icerik_ad='icerik_bolum2' where (id=3)" );
//$sorgu=mysqli_query($baglan,"delete from ayar ");
//$sorgu=mysqli_query($baglan,"update ayar set icerik_ad='icerik bolüm 1'");
//$sonuc=mysqli_affected_rows($baglan);

$sorgu=mysqli_query($baglan,"select * from ayar");
$satir=mysqli_fetch_row($sorgu);
echo "adı soyadı:$satir[1] - icerik adı=$satir[3]";


?>
