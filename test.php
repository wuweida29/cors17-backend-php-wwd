<?php
    header("Access-Control-Allow-Origin", "http://localhost:63342");
    header("Access-Control-Allow-Credentials:true");
    $username = array('userName'=>'1234');
    echo json_encode($username);
    ?>