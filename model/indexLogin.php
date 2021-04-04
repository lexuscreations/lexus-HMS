<?php

    require_once '../controller/DBConnect.php';

    if(isset($_POST['loginBtn'])){
        $logResult = $db->login($_POST['username'], $_POST['password']);
        if($logResult){
            echo "http://".$_SERVER['HTTP_HOST']."/"."home.php";
        } else {
            echo "Please double-check your Username Or password!";
        }
    }
?>