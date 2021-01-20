<?php 
/**
 * 	@author helenilson oliveira 
 *	@date : 17/11/2020 
 *
 *  Classe de email que enviar emails 
 **/
namespace app\classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use Rain\Tpl;
use app\classes\PageMail;

class Mail
{

	public function enviar($data = array()) 
	{
		
		$opts =array(
			"header"=>false,
			"footer"=>false
		);
		
		// Fazendo o merge da pagina html com as variaveis recebia pela $data
		$tplEmail = new PageMail($opts);

		$html= $tplEmail->setTpl("mail",$data,true);


		//enviando email
		$mail = new PHPMailer(true);
		$mail->CharSet ='UTF-8'; 

		try {
		    //Server settings
		    $mail->SMTPDebug = 0;                      // Enable verbose debug output
		    $mail->isSMTP();                                            // Send using SMTP
		    $mail->Host       = 'email-smtp.us-east-1.amazonaws.com';                    // Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'AKIAUSZQLT5SDDDLLX6S';                     // SMTP username
		    $mail->Password   = 'BLZoNn11655y0YVi+ILNCsjL3KFWHOJkKhf2EiHaW3kA';                               // SMTP password
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		    //Recipients
		    $mail->setFrom('sac@helenilson.com.br', 'helenilson.com.br');
		    $mail->addAddress('helenilsoon@gmail.com', 'helenilson@gmail.com');     // Add a recipient
		                  // Name is optional
		    $mail->addReplyTo('suport@helenilson.com.br', 'suport');
		   // $mail->addCC('cc@example.com');
		    //$mail->addBCC('bcc@example.com');

		    // Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML

		    $mail->Subject = 'Orçamento';
		    $mail->Body    = $html;
		    $mail->send();
		    
		    $_SESSION['MSG']['retornoEmail']="Mensagem enviada com sucesso em breve entraremos em contato.";
		   
		} catch (Exception $e) {

		    $_SESSION['MSG']['retornoEmailErro'] ="Mensagem não enviada. Error: {$mail->ErrorInfo}";
		}

	}
	

	

}