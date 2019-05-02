<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 02/05/2019
 * Time: 03:35 م
 */


include_once ('../conn.php');
$usernameOrPhone=null;
$pass=null;
if(isset($_POST['username'])&&isset($_POST['pass'])){
    $usernameOrPhone=$_POST['username'];
    $pass=$_POST['pass'];
    $sql="SELECT COUNT(*) AS k FROM users WHERE email='$usernameOrPhone' OR phone='$usernameOrPhone' AND pass='$pass'; ";
    $result=$conn->query($sql)->fetch_all(MYSQLI_ASSOC);

    $isFound=$result[0]['k'];

    if(strcmp($isFound,"1")==0){

        header('Location: http://Localhost/api/showAllmsg.php');

    }

}
