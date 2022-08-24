<?php
session_start();
if(session_destroy())
{
header("Location: adminpanel-login.php");
}
?>