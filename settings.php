<?global $conf;

$smtp_host = ""; //smtp host;
$smtp_port = 587;
$mail_user = ""; //email;
$mail_password = ""; //password;
$mail_from = ""; //smtp email;
$mail_from_name = ""; //name of the smtp user;
$mail_to = ""; //destiny;
$mail_reply_to = ""; //email to reply;


$static_path = "routephp-sitebase"; //base folder e.g.: /site/public/;


$conf = array();
$conf['path']       = ltrim($_SERVER['REQUEST_URI'], '/');
$conf['base_dir']   = __DIR__;   
$conf['doc_root']   = preg_replace("!{$_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
$conf['base_path']  = preg_replace("!^{$conf['doc_root']}!", '', $conf['base_dir']); # ex: '' or '/mywebsite'
$conf['base_url']   = str_replace($static_path, '', $conf['path']);
$conf['protocol']   = empty($_SERVER['HTTPS']) ? 'http' : 'https';
$conf['port']       = $_SERVER['SERVER_PORT'];
$conf['domain']     = $_SERVER['SERVER_NAME'];
?>