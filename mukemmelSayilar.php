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
      <input type="text" name="sayi" id="textfield" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Kontrol et" /></td>
    </tr>
  </table>
</form>
<?php
$number = $_POST["sayi"];
$toplam = 0;
//Mükemmel sayı kendisi hariç bölenlerinin toplamı osayıya eşit ise mükemmel sayıdır. 
for($i = 1;$i < $number ; $i++)
{
	if($number % $i == 0)
	{
		$toplam += $i; 
	}
}
if($toplam == $number)
{
	echo "Mükemmel sayıdır:".$number;
}
else
{
	echo "Mükemmel Sayı Değildir:".$number;
}
?>
</body>
</html>