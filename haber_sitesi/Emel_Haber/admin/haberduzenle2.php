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
<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}
.a {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

.a:focus {
  border: 3px solid #555;
}
</style>

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
  <div class="duzenle"><!-- InstanceBeginEditable name="İçerik" --><p><b>Haber Düzenle</b>      </p>
 
    
    <p><br  />
    </p>
  <?php
 

  include("../baglanti.php");
  $kisi = $_GET["id"];
  $sql = "select * from tbl_haber where haber_id='$kisi'";
  $stat = $baglan->prepare($sql);
  $stat->execute();
  $stat->bind_result($haberid,$baslik,$resim,$icerik,$o,$katid);
 
  while($stat->fetch())
  {
	  
	  echo '<form id="form1" name="form1" method="post" action="haberduzenle3.php?id='.$kisi.'">
    <table width="100%" border="0" cellpadding="10" cellspacing="5">
  <tr>
    <td width="18%">Haber Başlık</td>
    <td width="82%">
      <input type="text" name="baslik" id="textfield" value="'.$baslik.'" /></td>
      
  </tr>
  <tr>
    <td>Haber Resim Link</td>
    <td>
      <input type="text" name="resim" id="textfield2"  value="'.$resim.'" /></td>
  </tr>
  <tr>
    <td>Haber İçerik</td>
    <td>
      <textarea type="text" class="a" name="icerik" id="textfield2" cols="45" rows="5" >"'.$icerik.'"</textarea></td>
  </tr>
   <tr>
    <td>Haber Kategori İD</td>
    <td>
      <input type="text" name="kategori" id="textfield2"  value="'.$katid.'" /></td>
  </tr>
  <tr>
          <td></td>
          <td><button class="button" name="button" type="submit" style="vertical-align:middle"><span>Güncelle </span></button></td>
        </tr>
</table>

    </form>';
  }
	  
	   
  
  
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
