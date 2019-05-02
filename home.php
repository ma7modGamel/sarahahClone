<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 30/04/2019
 * Time: 05:34 م
 */

include_once('conn.php');
session_start();
$username=null;
if(isset($_SESSION['$isFound'])&&$_SESSION['$isFound'] =true){
    $username=$_SESSION['usernameOrPhone'];
}else{
    header('Location: http://Localhost/login.php');
}

$result=[];
if($username){
    $sql= " SELECT content_msg , sent_time_stamb FROM messages WHERE id_reciver=(SELECT id FROM users WHERE phone='$username' OR email='$username');";
    $result=$conn->query($sql)->fetch_all(MYSQLI_ASSOC);

}


?>



<?php include_once ('views/home.view.php'); ?>
