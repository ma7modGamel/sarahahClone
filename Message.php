<?php
/**
 * Created by PhpStorm.
 * User: xx
 * Date: 29/04/2019
 * Time: 07:03 م

 */

    include_once('conn.php');
    session_start();


    $userLink = 'http://localhost/Message.php?to='.$_REQUEST['to'];


    $sendMsgError = [
        'lengthMsgError' => [],
        'affectedroeErrors' => [],
        'userNotFound'=>[]
    ];


    $msg = null;
    if (isset($_POST['msg'])) {
        $msg = $_POST['msg'];
        if (strlen($msg) < 1 || strlen($msg) > 350) {
            array_push($sendMsgError['lengthMsgError'], 'The name must be less than to equal 350 char ..!');
        }
    }
        $toUser = null;
        if (isset($_REQUEST['to'])) {
            $toUser = $_REQUEST['to'];
        }




    if ($toUser && $msg && count($sendMsgError['lengthMsgError']) == 0) {

       $numUser="SELECT COUNT(*) AS  k FROM users WHERE email='$toUser' OR phone='$toUser'; ";


        $result = $conn->query($numUser)->fetch_all(MYSQLI_ASSOC);
          if(strcmp(($result[0]['k']),'1')==0){
              $sql = "INSERT INTO messages (content_msg,id_reciver) VALUES  ('$msg',(SELECT id FROM users WHERE email='$toUser' OR phone='$toUser'));";

              $result = $conn->query($sql);
              if ($result) {
                  $affectedRows = $conn->affected_rows;
                  if ($affectedRows > 0) {
                      header('Location: http://Localhost/thanx.php');
                  } else {
                      array_push($sendMsgError['affectedroeErrors'], 'Message is Not send .. please try again send Messagge in the more time ..!');
                  }
              }
          }else{
              array_push($sendMsgError['userNotFound'], 'user is not found..!');
          }
    }


?>


<?php include_once('views/sendNewMessage.view.php'); ?>
