<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 02/05/2019
 * Time: 03:33 م
 */

include_once('../conn.php');
$msg = null;
$toUser = null;
$userLink = 'http://localhost/api/sendMessageTodb.php?to=' . $_REQUEST['to'];


if (isset($_REQUEST['to'])) {
    $toUser = $_REQUEST['to'];
}

if (isset($_POST['msg'])) {
    $msg = $_POST['msg'];


    $numUser = "SELECT COUNT(*) AS  k FROM users WHERE email='$toUser' OR phone='$toUser'; ";

    $result = $conn->query($numUser)->fetch_all(MYSQLI_ASSOC);

    if (strcmp(($result[0]['k']), '1') == 0) {
        $sql = "INSERT INTO messages (content_msg,id_reciver) VALUES  ('$msg',(SELECT id FROM users WHERE email='$toUser' OR phone='$toUser'));";

        $result = $conn->query($sql);

        if ($result) {
            $affectedRows = $conn->affected_rows;


            if ($affectedRows > 0) {


            }
        }
    }

}
