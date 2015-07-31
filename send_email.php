<?

require_once("./phpmailer/class.phpmailer.php");

$mail = new PHPMailer;

$mail->CharSet = 'UTF-8';
$mail->WordWrap = 50;

//Enable SMTP debugging. 
$mail->SMTPDebug = 0;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = $smtp_host;//"smtp.coesma.com.br";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = $mail_user;//"fabio@coesma.com.br";
$mail->Password = $mail_password;//"co3sm2";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = $smtp_port;//587;


//From
$mail->From = $mail_from;
$mail->FromName = $mail_from_name;

//To
//$mail->addAddress("contato@educatrans.com.br");
//$mail->addAddress("fabio@coesma.com.br");
$mail->addAddress($mail_to);

//Address to which recipient will reply
$mail->addReplyTo($mail_reply_to, "Reply");
 
//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");
 
//Send HTML or Plain Text email
$mail->isHTML(true);


$assunto = "";
$mensagem = "";
$email_contato = "";
$nome_contato = "";


if(isset($_POST['assunto']) && $_POST['assunto']!=""  && isset($_POST['mensagem']) && $_POST['mensagem']!="" && isset($_POST['email']) && $_POST['email']!="" && isset($_POST['nome']) && $_POST['nome']!=""){
	

	$assunto = $_POST['assunto'];
	$mensagem = nl2br(htmlspecialchars($_POST['mensagem']));
	$email_contato = $_POST['email'];
	$nome_contato = $_POST['nome'];

	$msg = "";
	$msg .= "<h3>De: ".$nome_contato."</h3>\n";
	$msg .= "<h4>".$email_contato."</h4>\n";
	$msg .= $mensagem;
	$mail->Subject = $assunto;
	$mail->Body = $msg;
	$mail->AltBody = $msg;
	

	if(!$mail->send())
	{
	    header("Location: ./contato");
		die();
	} 
	else
	{
		header("Location: ./contato");
		die();
	}
	
}else{
	header("Location: ./contato");
	die();
}






?>