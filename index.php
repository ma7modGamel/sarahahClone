<?php
include_once ('conn.php');
if(isset($_SESSION)&&$_SESSION['usernameOrPhone']!=0){
include_once ("views/home.view.php");
}else{
    include_once ("views/login.view.php");
}
?>
