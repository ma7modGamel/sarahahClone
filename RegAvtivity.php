<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 28/04/2019
 * Time: 04:47 م
 */



$errors_Reg_Array=[
    'mailError'=>[],
    'passError'=>[],
    'repassError'=>[],
    'nickNameError'=>[],
    'passNotEqualRepass'=>[],
    'phoneError'=>[]
];

$E_Mail=null;
if(isset($_POST['Email'])){
    $E_Mail=$_POST['Email'];

    if(strlen($E_Mail)<6){
        array_push($errors_Reg_Array['mailError'],'please check your mail mast be equar or least 6 ..!');
    }
}

$pass=null;
if(isset($_POST['password'])){
    $pass=$_POST['password'];

    if(strlen($pass)<6){
        array_push($errors_Reg_Array['passError'],'please check your password must be equar or least 6..!');
    }
}
$repass=null;
if(isset($_POST['rePassword'])){
    $repass=$_POST['rePassword'];

    if(strlen($repass)<6){
        array_push($errors_Reg_Array['repassError'],'please check your retype password must be equar or least 6 ..!');
    }
}

if(strcmp($pass,$repass)!=0){
    array_push($errors_Reg_Array['passNotEqualRepass'],'please enter the same password in repassword..!');
}

$nickName=null;
if(isset($_POST['nickName'])){
    $nickName=$_POST['nickName'];

    if(strlen($nickName)<6){
        array_push($errors_Reg_Array['nickNameError'],'please check your nick Name must be equar or least 6..!');
    }
}
$phone=null;
if(isset($_POST['phone'])){
    $pass=$_POST['phone'];

    if(strlen($pass)<9){
        array_push($errors_Reg_Array['phoneError'],'please check your phone must be equar or least 9 numbers..!');
    }
}

?>


<?php include_once ('views/RegActivity.view.php');

