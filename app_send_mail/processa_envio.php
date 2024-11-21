<?php
	require "./bibliotecas/PHPMailer/Exception.php";
	//require "./bibliotecas/PHPMailer/OAuth.php";
	require "./bibliotecas/PHPMailer/PHPMailer.php";
	require "./bibliotecas/PHPMailer/POP3.php";
	require "./bibliotecas/PHPMailer/SMTP.php";

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	//print_r($_POST);
	class Mensagem{
		//atributos
		private $para = null;
		private $assunto = null;
		private $mensagem = null;
		//métodos
		public function __get($atributo){
			return $this->$atributo;
		}
		public function __set($atributo, $valor){
			$this->$atributo = $valor;
		}
		public function mensagemValida(){
			if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
				return false;
			}
			return true;
		}
	}
	$mensagem = new Mensagem();
	$mensagem->__set('para', $_POST['para']);
	$mensagem->__set('assunto', $_POST['assunto']);
	$mensagem->__set('mensagem', $_POST['mensagem']);
	//print_r($mensagem);
	if(!$mensagem->mensagemValida()){
		echo 'Mensagem inválida!';
		die();
	}

	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'email@dominio.com';        //SMTP username
	    $mail->Password   = '*********';                             //SMTP password
	    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
	    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	    //Recipients
	    $mail->setFrom('email@dominio.com', 'nome pessoal ou empresa');
	    $mail->addAddress('email@dominio.com', 'nome pessoal ou empresa');     //Add a recipient
	    //$mail->addAddress('ellen@example.com');               //Name is optional
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = 'Assunto do email';
	    $mail->Body    = 'Esta é uma mensagem de <b>teste!</b>';
	    $mail->AltBody = 'Esta uma mensagem de teste!';

	    $mail->send();
	    echo 'Mensagem enviada com sucesso!';
	} catch (Exception $e) {
	    echo "Não foi possível enviar a mensagem, por favor, tente novamente mais tarde. Detalhes do erro: {$mail->ErrorInfo}";
	}
?>