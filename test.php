<?php
header("Access-Control-Allow-Origin:http://10.30.29.69:63341");
header("Access-Control-Allow-Credentials:true");
$username = array('userName'=>'1234');
echo json_encode($username);
?>