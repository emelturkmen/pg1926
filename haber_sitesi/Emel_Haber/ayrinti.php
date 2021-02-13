<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

 <title>Ayrıntı</title>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
 <link href="fotorama.css" rel="stylesheet">
  <script src="fotorama.js"></script>


 


<style type="text/css">
*
{
		font-family:"Raleway";
		box-sizing: border-box;
}
body
{
	
  background:#fff;
}
#kapsayıcı {
	position: relative;
	margin:auto;
	width:100%;
	height: 100%;
	z-index: 1;
  
	
}
#üst_banner {
	position: relative;
	margin: auto;
	width: 80%;
	height: 40px;
	z-index: 2;
	box-shadow: 2px 2px 8px rgba(1, 1, 1, 1);
	background-color: #333333;
	margin-top:10px;
	overflow:hidden;
}
#icerik_kapsayici {
	position: relative;
		margin:auto;
	width: 80%;
	height: 700px;
	z-index: 2;
	margin-top:10px;
	margin-bottom:80px;
}
#icerik1 {
	position: relative;
	margin: auto;
	width: 70%;
	max-height: 680px;
	z-index: 2;
	box-shadow: 2px 2px 8px rgba(1, 1, 1, 1);
	float: left;
	margin-bottom:10px;
	margin-right: 5px;	
}
#icerik2 {
	position: relative;
	margin: auto;
	width: 25%;
	height: auto;
	z-index: 2;
	padding:5px;
	
	float: right;
	box-shadow:1px 1px 1px 1px #FCF;
	
}
#footer_kapsayici {
	position: relative;
	width: 100%;
	height: 80px;
	z-index: 2;
	background: white;
	box-shadow: 2px 2px 8px rgba(1, 1, 1, 1);
	background-color: red;
	line-height:80px;
	text-align:center;
	color:white;
	margin-bottom:2px;
	margin-top:10px;
	float:right;
	
	
}
#üst_banner ul
{
	padding:0;
	margin:0;
	list-style-type:none;
}
#üst_banner ul li
{
	float:left;
}
#üst_banner ul li a
{
	display:block;
	font-size:15px;
	color:white;
	line-height:37px;
	text-decoration:none;
	font-family:"Raleway";
	height:37px;
	width:118px;
	text-align:center;
	box-shadow: 2px 2px 8px rgba(1, 1, 1, 1)
	
}
#üst_banner ul li a:hover
{
	border-bottom:3px solid red;
}
#logo_banner {
	position: relative;
	margin: auto;
	width: 80%;
	height: 115px;
	z-index: 2;
	font-size:80px;
	line-height:115px;
    margin-top:10px;
}
#sondakika {
	position: relative;
	margin:auto;
	width: 100%;
	height: 30px;
	z-index: 2;
	background:red;
	color:white;
	font-weight:bold;
	line-height:30px;
	font-family:Tahoma, Geneva, sans-serif;
	font-size:24px;
	box-shadow: 2px 2px 8px rgba(1, 1, 1, 1);
}

@keyframes hello {
  0% {
    font-weight: 100;
  }
  50% {
    font-weight: 900;
  }
  100% {
    font-weight: 100;
  }
}
#haber {
	position: relative;
	margin: auto;
	width: 80%;
	height: auto;
	z-index: 2;
	
	margin-top: 40px;
	
}
#habericerik
{
	position:relative;
	margin:auto;
	width:300px;
	height:auto;
	background-color:white;
	border-radius:5px;
	margin-right:50px;
	margin-bottom:20px;
	box-shadow:1px 1px 1px 1px #FCF;
	border: 1px solid #ccc;
	
	
	
}
#habericerik:hover
{
	transition:all 0.2s ease;
	opacity:0.9;
	font-weight:bold;
	border: 1px solid #777;
}
a
{
	text-decoration:none;
	color:black;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
 
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>
</head>

<body>
<div id="kapsayıcı">
<div id="sondakika"><marquee>Son Dakika</marquee></div>
<div id="logo_banner"><img src="images/Adsız-1.fw.png" width="202" height="120" /></div>
<div id="üst_banner">
    <ul>
       <li><a href="index.php" style="background-color:yellow;height:40px;color:black;font-weight:bold;box-shadow: 2px 2px 8px rgba(1, 1, 1, 1);animation: hello 0.5s ease-in-out infinite;">Son Dakika</a></li>
             <li><a href="dunya.php">Dünya</a></li>
      <li><a href="ekonomi.php">Ekonomi</a></li>
      <li><a href="guncel.php">Güncel</a></li>
       <li><a href="spor.php">Spor</a></li>
        <li><a href="magazin.php">Magazin</a></li>
         <li><a href="teknoloji.php">Teknoloji</a></li>
          <li><a href="koronavirus.php">Koronavirüs</a></li>
           <li><a href="saglik.php">Sağlık</a></li>
          
    </ul>
  </div>
  <div id="icerik_kapsayici">
    <div id="icerik1">
    <?php
	include("baglanti.php");
	ob_start();
$id2=$baglan->real_escape_string($_GET["haber_id"]);
$a = $id2;
	$listele="select haber_id,haber_resim,haber_icerik from tbl_haber where haber_id='$a'";
	$stat = $baglan->prepare($listele);
	$stat->execute();
	$stat->bind_result($haberid,$resim,$icerik);
	$stat->fetch();
echo "<img style='margin-top:10px;margin-left:10px;' width=550 height=239 src=".$resim." />"."<br><br>";
echo "<div style=position:relative;margin-left:10px;>".$icerik."</div>";

	?>
    <br /><br /><br />
         </div>
    <div id="icerik2">
     <?php
   include("baglanti.php");
  $listele2="select haber_id,haber_resim,haber_baslik from tbl_haber where haber_kat_id=1 limit 3";
  $stat1=$baglan->prepare($listele2);
  $stat1->execute();
  $stat1->bind_result($haber_id,$haber_resim,$haber_baslik);
   while($stat1->fetch())
   {
	   $id2=$haber_id;
	   $resim2=$haber_resim;
	   $baslik2=$haber_baslik;
	   echo "<div style='background-color:white;margin-bottom:20px;'>";
	   echo "<img src=".$resim2." width='257' height='146' /><br><br>";
	   echo "<a href=ayrinti.php?haber_id=$id2>"."<center>".$baslik2."</center>"."</a>";
	   echo "</div>";
   }
   
   ?>
    </div>
    

  </div>
 
  <div id="haber">
  <?php
	
  error_reporting(0);
  $yorumlar="select yorum_adsoyad,yorum_icerik,yorum_tarihsaat from tbl_yorum where y_haber_id=$a and yorum_onay=1";
  $yorum = $baglan->prepare($yorumlar);
  $yorum->execute();
  $yorum->bind_result($ad,$icerikyorum,$tarih);
  
  while($yorum->fetch())
  {
	  echo "<div style='max-width:100%;left:50px;height:120px;padding:10px;font-size:13px;margin-bottom:10px;margin-top:10px;background-color:white;color:black;line-height:30px;'><b>".$ad." : </b><br>".$icerikyorum."<br>Tarih : ".$tarih."</div>";
	 
  
  }
  
  ?>
  <form id="form1" name="form1" method="post" action="">
    <table width="100%" border="0" cellpadding="10">
       <tr>
         <td width="23%" scope="row"> Adı ve Soyadı</td>
         <td width="77%"><label for="textfield"></label>
           <input type="text" name="adsoyad" id="adsoyad" /></td>
       </tr>
       <tr>
         <td scope="row">Mesajınız</td>
         <td><label for="textfield2"></label>
           <input type="text" name="icerik" id="icerik" /></td>
       </tr>
       <tr>
         <th scope="row">&nbsp;</th>
         <td><input type="submit" name="button" id="button" value="Mesajı Gönder" /></td>
       </tr>
     </table>
 </form>
   
 
 
<?php

date_default_timezone_set('Europe/Istanbul');
$tarih=date('d F Y l');
$onay = 0;
if($_POST)
{
$ad=$_POST["adsoyad"];
$icerik2=$_POST["icerik"];
$kaydet="INSERT INTO tbl_yorum(yorum_adsoyad,yorum_icerik,yorum_tarihsaat,y_haber_id,yorum_onay) VALUES('$ad','$icerik2','$tarih','$a','$onay')";


$ekle = $baglan->prepare($kaydet);
$ekle->execute();



 
}

?> 

<div id="footer_kapsayici">&copy; Bütün Hakları Saklıdır.</div>
    </div>
 
</div>
 
</body>
</html>