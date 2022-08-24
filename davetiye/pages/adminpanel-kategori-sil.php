<?php
error_reporting(0);	 
include("vtbaglan.php");
session_start();
$gelenid=$_GET['id'];
$sql =mysql_query("delete from tblkategori where kategori_Id='$gelenid'");
header('Location:adminpanel-kategori.php');

?>