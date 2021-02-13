<?php 
session_start();
if(!isset($_SESSION["oturum"]))
       header('location:admin/index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/haber-admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://kit.fontawesome.com/98aaa3370a.js" crossorigin="anonymous"></script>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Admin Paneli</title>


<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<style type="text/css">
*
{
	box-sizing:border-box;
	margin:0;
}
.wrapper {
	position: relative;
	width: 100%;
	height: auto;
	z-index: 1;
}
.nav {
	position: relative;
	width: 11%;
	height: 700px;
	z-index: 2;
	background-color:#344a7c;
}
.nav ul
{
	padding:0;
	margin:0;
	list-style-type:none;
	
}
.nav ul li a
{
	display:block;
	text-align:center;
	color:white;
	text-decoration:none;
	width:150px;
	height:80px;
	line-height:10px;
	font-family:"Raleway";
	padding:20px;
	font-size:13px;
	transition:all 0.6s ease;
	
}
.nav ul li a:hover
{
	background-color:#3c568c;
}
.icerik {
	position: relative;
	width:89%;
	height: 115px;
	z-index: 2;
	height:700px;
	
}
.column
{
	float:left;
}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.baslik {
	position: relative;
	width:100%;
	height: 100px;
	z-index: 2;
    border-bottom:1px solid black;
	padding:10px;
	line-height:80px;
	font-size:36px;
	font-weight:bold;
	
}
.duzenle {
	position: relative;
	width:100%;
	height: 600px;
	z-index: 2;
	
	padding:10px;
	
}
</style>

</head>
<?php
session_start();

?>
<body>
<div class="wrapper">
<div class="clearfix">
  <div class="column nav">
  
  <ul><br />
  <li><a href="index.php"><i class="fas fa-home"></i><br /><br />ANASAYFA</a></li>
  <li><a href="haberekle.php"><i class="fas fa-newspaper"></i><br /><br />HABER EKLE</a></li>
  <li><a href="haberduzenle.php"><i class="fas fa-newspaper"></i><br /><br />HABER DÜZENLE</a></li>
  <li><a href="habersill.php"><i class="fas fa-newspaper"></i><br /><br />HABER SİL</a></li>
  <li><a href="ayarlar.php"><i class="fas fa-cog"></i><br /><br />AYARLAR</a></li>
  <li><a href="cikis.php"><i class="fas fa-sign-out-alt"></i><br /><br />ÇIKIŞ YAP</a></li>
  </ul>
  </div>
  <div class="column icerik">
  <div class="baslik"><!-- InstanceBeginEditable name="başlık" --><?php
 error_reporting(0);
  echo "Hoşgeldin ".$_SESSION["oturum"];
  
  ?><!-- InstanceEndEditable --></div>
  <div class="duzenle"><!-- InstanceBeginEditable name="İçerik" --><b>Haber Düzenle</b>
  <br />
  <?php
  include("../baglanti.php");
  $sorgu = "select haber_id,haber_baslik,haber_icerik,haber_resim,haber_kat_id from tbl_haber";
  $statement = $baglan->prepare($sorgu);
  $statement->execute();
  $statement->bind_result($haberid,$baslik,$icerik,$resim,$katid);
  echo '<div style="padding:5px;border:3px solid black;margin-bottom:5px;">';
    echo "<table cellspacing='6' border='0' cellpadding='5' width='100%'>";
	   echo "<tr>";
	   echo "<td><b>Haber Başlığı</b></td>";
	   echo "<td><b>Haber İçeriği</b></td>";
	   echo "<td><b>Haber Resim</b></td>";
	   echo "<td><b>Kategori İD</b></td>";
	 
	   
		 echo "<td><b>Sil</b></td>";
	   echo "</tr>";
  while($statement->fetch())
  {
	  
	
	   echo "<tr>";
	   echo "<td>".$baslik."</td>";
	    echo "<td>"."<textarea name='icerik'>".$icerik."</textarea></td>";
		echo "<td>"."<img src=../".$resim." width='50' height='50' />"."</td>";
		echo "<td>".$katid."</td>";
		
	
		echo "<td><a style=text-decoration:none;color:red;font-weight:bold; href=habersil.php?id=$haberid>Sil</a></td>";
		
	   echo "</tr>";
	 
  }
  echo "</table>";
	  echo "</div>";
  ?><!-- InstanceEndEditable --></div>
   
  </div>
  </div>
  <?php
  session_start();
  if($_SESSION["oturum"]==false)
  {
	  header("Location:giris.php");
  }
  
  ?>
</div>
</body>
<!-- InstanceEnd --></html>
