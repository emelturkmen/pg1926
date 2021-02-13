<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giriş Yap</title>
<style type="text/css">
*
{
	font-family:"Raleway";
}
#giris {
	position: relative;
	margin:auto;
	width: 300px;
	height: 300px;
	z-index: 1;
	border-radius:7px;
	border:5px solid #48423f;
}
#apDiv1 {
	position: relative;
	width: 300px;
	height: 50px;
	z-index: 1;
	background-color: #f2652f;
	color:white;
	line-height:50px;
	text-align:center;
	font-weight:bold;
}
#apDiv2 {
	position: relative;
	width: 300px;
	height: 250px;
	z-index: 2;
	background-color:white;
	
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

<body bgcolor="#2f2e2a">
<div id="giris">
  <div id="apDiv1">HESABINIZLA GİRİŞ YAPIN</div>
  <div id="apDiv2">
    <form id="form1" name="form1" method="post" action="">
      <table width="100%" border="0" cellpadding="10" cellspacing="20">
        <tr>
          <th scope="row"><label for="textfield"></label>
          <input type="text" name="ad" id="textfield" placeholder="Kullanıcı Adı" /></th>
        </tr>
        <tr>
          <th scope="row"><label for="textfield2"></label>
          <input type="text" name="sifre" id="textfield2" placeholder="Şifre" /></th>
        </tr>
        <tr>
          <th scope="row"><input type="submit" name="button" id="button" value="Giriş Yap" /></th>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
        </tr>
      </table>
    </form>
  </div>
</div>
<?php
include("../baglanti.php");
session_start();
$ad=@$_POST["ad"];
$sifre=@$_POST["sifre"];
$giris = "select adi,sifre from tbl_admin";
$stat = $baglan->prepare($giris);
$stat->execute();
$stat->bind_result($adi,$asifre);
while($stat->fetch())
{
	if($ad == $adi && $sifre == $asifre)
	{
		$_SESSION["oturum"] = $adi;
		header("Location:index.php");
	}
	
}

?>
</body>
</html>