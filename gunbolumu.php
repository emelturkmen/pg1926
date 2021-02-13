<?php
date_default_timezone_set('Europe/Istanbul');
$d = date("H:i");
$saat = $d;
echo "Saat " .$saat."<br>";
if((int)$saat > "06" && (int)$saat < "10" )
{
    echo "Günaydın";
}
if((int)$saat > "10" && (int)$saat < "17" )
{
    echo "İyi günler";
}
if((int)$saat > "17" && (int)$saat < "20" )
{
    echo "İyi akşamlar";
}
if((int)$saat > "20" && (int)$saat < "24" )
{
    echo "İyi geceler";
}
if((int)$saat > "24" && (int)$saat < "06" )
{
    echo "Esenlikler dilerim";
}
  
?>
