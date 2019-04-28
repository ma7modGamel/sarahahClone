<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 27/04/2019
 * Time: 07:06 م
 */


const  HOST='localhost';
const USERNAME='root';
const PASSWORD='';
const DATABASE='sarahah_clone';


$conn=new  mysqli(HOST,USERNAME,PASSWORD,DATABASE);
if($conn->connect_error>0){
    die('unable to connect dataBase [ '.$conn->connect_error.' ]');
}


?>