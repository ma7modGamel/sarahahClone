<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 02/05/2019
 * Time: 03:36 م
 */

include_once ('../conn.php');



$username='01000595860';

$sql= " SELECT content_msg , sent_time_stamb FROM messages WHERE id_reciver=(SELECT id FROM users WHERE phone='$username' OR email='$username');";
$result=$conn->query($sql);
while ($row=mysqli_fetch_assoc($result)){
    $a[]=$row;

}
echo json_encode($a);
