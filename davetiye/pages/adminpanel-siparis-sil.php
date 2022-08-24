<?php
error_reporting(0);	 
include("vtbaglan.php");
session_start();
$gelenid=$_GET['id'];
$sql =mysql_query("delete from tblsiparis where siparis_Id='$gelenid'");
$sql1 =mysql_query("delete from tblicerik where icerik_Siparis='$gelenid'");
header('Location:adminpanel-siparis.php');

?>