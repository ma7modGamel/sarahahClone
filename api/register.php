<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 02/05/2019
 * Time: 03:33 م
 */

include_once ('../conn.php');

if (isset($_POST['nickName'])&&$_POST['email']&&$_POST['repass']&&$phone=$_POST['phone']) {
    $E_Mail = $_POST['email'];
    $repass = $_POST['repass'];
    $nickName = $_POST['nickName'];
    $nickName = $_POST['nickName'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (email,pass,first_name,last_name,phone) VALUES  ('$E_Mail','$repass','$nickName','$nickName','$phone');";
    $result = $conn->query($sql);
}
