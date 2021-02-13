<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="261" border="0" cellpadding="10">
    <tr>
      <td>Sayı Gir:</td>
      <td><label for="textfield"></label>
      <input type="text" name="txt" id="textfield" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Kontrol et" /></td>
    </tr>
  </table>
</form>
<?php
$txt = $_POST["txt"];
$asalmi = true;
if($txt == 1)
{
	echo "Sayı Asal Değildir:".$txt;
	return;
}
if($txt < 1)
{
	echo "Geçersiz Sayı:".$txt;
	return;
}
for($i=2;$i<$txt;$i++)
{
	if($txt % $i == 0)
	{$asalmi = false;}
}
if($asalmi)
{
	echo "Sayı asaldır:".$txt;
}
else 
{
	echo "Sayı asal değildir:".$txt;
}

?>
</body>
</html>