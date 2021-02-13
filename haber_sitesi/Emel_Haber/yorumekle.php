<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<?php
include("baglanti.php");
date_default_timezone_set('Europe/Istanbul');
$tarih=date('d F Y l');
$onay = 0;
$id=$baglan->real_escape_string($_GET["haber_id"]);
$ad=$_POST["adsoyad"];
$icerik=$_POST["icerik"];
$kaydet="INSERT INTO tbl_yorum(yorum_adsoyad,yorum_icerik,yorum_tarihsaat,y_haber_id,yorum_onay) VALUES('$ad','$icerik','$tarih','$id','$onay')";
$ekle = $baglan->query($kaydet); 
?> 
</body>
</html>