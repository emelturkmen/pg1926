<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="294" border="0" cellpadding="10">
    <tr>
      <td>Para üstü:</td>
      <td><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Hesapla" /></td>
    </tr>
  </table>
</form>
<?php
error_reporting(0);
$para = array(1,0.5,0.25,0.10,0.05,0.01);
$banknot = array("1 lira","50 kuruş","25 kuruş","10 kuruş","5 kuruş","1 kuruş");
$paraustu = $_POST["textfield"];
echo "Para üstünüz:".$paraustu."<br>";
for($i = 0;$i<6;$i++)
{
	$adet = ((int)($paraustu / $para[$i]));
	$paraustu = (($paraustu - $adet * $para[$i]));
	if($adet>0)
	{
		
	echo $adet." adet ".$banknot[$i]."<br>";
	}
	
	
	
}

?>
</body>
</html>