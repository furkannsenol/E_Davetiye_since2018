<?php
error_reporting(0);	 
include("vtbaglan.php");
session_start();
$gelenid=$_GET['id'];
$sql =mysql_query("delete from tbluye where uyeId='$gelenid'");
header('Location:adminpanel-kullanici.php');

?>