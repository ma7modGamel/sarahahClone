<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 27/04/2019
 * Time: 05:40 م
 */
include_once ('conn.php');
$array_Errors=[
    'nameError'=>[],
    'passError'=>[],
    'authError'=>[]
];

session_start();

$usernameOrPhone=null;
$pass=null;
if(isset($_POST['name'])){
    $usernameOrPhone=$_POST['name'];
    if(strlen($usernameOrPhone)<6){
        array_push($array_Errors['nameError'],'The name must be more than to equal 6 !');
    }
}

if(isset($_POST['pass'])){
    $pass=$_POST['pass'];
    if(strlen($pass)<6){
        array_push($array_Errors['passError'],'The password must be more than to equal 6 !');
    }
}




if(count($array_Errors['nameError'])==0 &&count($array_Errors['passError'])==0){

    $sql="SELECT COUNT(*) AS k FROM users WHERE email='$usernameOrPhone' OR phone='$usernameOrPhone' AND pass='$pass'; ";
    $result=$conn->query($sql)->fetch_all(MYSQLI_ASSOC);


    $isFound=$result[0]['k'];

    if(strcmp($isFound,"1")==0){

        $_SESSION['$isFound'] =true;
        $_SESSION['usernameOrPhone']=$usernameOrPhone;

        header('Location: http://Localhost/thanx.php');

    }else{
        array_push($array_Errors['authError'],'Login Field , please check your data !');
    }


}


?>


<?php  include_once ('views/login.view.php'); ?>
