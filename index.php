<?php
include_once ("views/login.view.php");

$dataLogin = [
    ["usernameA" => "ali",
        "passwordA" => "ali"]
];


if (count($_REQUEST) > 0) {

    if (($_REQUEST["name"] == $dataLogin[0]["usernameA"]) && ($_REQUEST['pass'] == $dataLogin[0]['passwordA'])) {
    } else {
    }
}
?>
