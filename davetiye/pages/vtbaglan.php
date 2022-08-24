<?php
$vt_host='localhost';
$vt_kullanici = 'root';
$vt_sifre = 'hecker3455';
$vt_adi = 'davetiye_db';

$baglanti = mysql_connect($vt_host, $vt_kullanici, $vt_sifre,$vt_adi);
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'");
if(!$baglanti) die("MySQL sunucusuna baglanti saglanamadi!"); 
mysql_select_db($vt_adi, $baglanti) or die ("Veritabanina baglanti saglanamadi!");
?>
