<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Spor Haberleri</title>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
 <link href="fotorama.css" rel="stylesheet">
  <script src="fotorama.js"></script>
  <?php
  error_reporting(0);
  ?>


 


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
	height: 560px;
	z-index: 2;
	margin-top:10px;
	margin-bottom:50px;
}
#icerik1 {
	position: relative;
	margin: auto;
	width: 70%;
	height: 680px;
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
	margin:auto;
	width: 80%;
	height: auto;
	z-index: 2;
	
	
}
#habericerik
{
	position:relative;
	margin:auto;
	width:300px;
	height:320px;
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
      <li><a  href="ekonomi.php">Ekonomi</a></li>
      <li><a  href="guncel.php">Güncel</a></li>
       <li><a style="background-color:#2da187" href="spor.php">Spor</a></li>
        <li><a href="magazin.php">Magazin</a></li>
         <li><a href="teknoloji.php">Teknoloji</a></li>
          <li><a href="koronavirus.php">Koronavirüs</a></li>
           <li><a href="saglik.php">Sağlık</a></li>
          
    </ul>
  </div>
  <div id="icerik_kapsayici">
    <div id="icerik1">
<div class="fotorama" data-content-theme="b" data-max-width="100%" data-width="100%"   data-theme="y" >
  <?php
 include("baglanti.php");
 $listele3="select haber_id,haber_resim from tbl_haber where haber_kat_id=5 limit 2";
 $stat=$baglan->prepare($listele3);
 $stat->execute();
 $stat->bind_result($haber_id,$haber_resim);
 
 while($stat->fetch())
 {
	 $id3=$haber_id;
	 global $resim3;
	 $resim3=$haber_resim;
	 
	 ?>
   <img src="<?php echo $resim3?>" data-caption="Son Dakika Haberleri" data-max-height="100%" data-height="800px" />
     <?php
	
	
	
	 
 }
 
 ?>
  

</div>

</div>
    <div id="icerik2">
 <?php
   include("baglanti.php");
  $listele2="select haber_id,haber_resim,haber_baslik from tbl_haber where haber_kat_id=5 limit 3";
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
    include("baglanti.php");
	$listele="select haber_id,haber_resim,haber_baslik from tbl_haber where haber_kat_id=5";
	$stat2=$baglan->prepare($listele);
	$stat2->execute();
	$stat2->bind_result($haber_id,$haber_resim,$haber_baslik);

	while($stat2->fetch())
	{
	
    $id=$haber_id;
echo '<div id="habericerik" style="float:left;">';

	 
			$baslik=$haber_baslik;
			$resim=$haber_resim;
			echo "<div style='position:relative;margin-left:10px;margin-top:10px;'><img src=".$resim." width='280' height='250' /></div>";
		echo '<div style="position:relative;width:280px;color:black;margin-left:10px;margin-top:10px;text-align:center;">'."<a href=ayrinti.php?haber_id=$id>".$baslik."</a>"."</div>";
		echo '</div>';
		}
		?>	
<div id="footer_kapsayici">&copy; Bütün Hakları Saklıdır.</div>
  </div>
 
</div>
 
</body>
</html>
