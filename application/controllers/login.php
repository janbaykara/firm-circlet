<?php
require($_SERVER["DOCUMENT_ROOT"]."/politicalrecruits/application/config.php");

$data = $_POST;

$user = new User($DATABASE);
echo $user->login($data['email'],$data['password']);
?>