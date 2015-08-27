<?php 
require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');

//class Email{

			//Atributes PHP MAILER
		########################################
		//private $host = 'mail.itoffice.com.pa';
		//private $port = 25; 
		########################################

//public function contacto(){
			$host = 'technoinge.net84.net';
			$port = 25; 
/*			$name = $_GET['name'];
			var_dump($name); exit();*/

				$mail = new PHPMailer;

			
				$mail->PluginDir = "PHPMailer/"; 
				$mail->Mailer = "smtp"; 
				
				$mail->Host = $host; // Specify main and backup SMTP servers
				$mail->Port = $port; // TCP port to connect to
															
				//$mail->SMTPDebug = 3;                               // Enable verbose debug output
				$mail->isSMTP();
				$mail->SMTPAuth = true;
				$mail->SMTPDebug  = 1;

				$mail->Username = "zm@technoinge.net84.net"; 
				$mail->Password = "samir123456"; 
				
				$mail->From = "technoinge.net84.net"; 
				$mail->FromName = utf8_decode('Información contacto');  // De quien lo envia 
				
				//$mail->addAddress("selsouki@medianet.com.ve", "SAM"); //Correo y Nombre del Destino a Enviar
				$mail->addAddress("92samirss@gmail.com", "SAM"); //Correo y Nombre del Destino a Enviar
				//$mail->addAddress($emails, $nameVendor); //Correo y Nombre del Destino a Enviar
			
				
				//$mail->addReplyTo('info@example.com', 'Information');
				//$mail->addCC('cc@example.com');
				//$mail->addBCC('bcc@example.com');
				
				//$mail->addAttachment("../../Itoadmin/pdfs/files_pdf/".$nombreArchivo);         // Agregar archivo y ruta donde se encuentra
				
				$mail->isHTML(true);                                  // Set email format to HTML
				
				$mail->Subject = "prueba";
				$message = "holis";
				/*$message = "
					<html>
						<body>
							<table width='98%' style='border:solid 8px #ccc;' cellpadding='6'>
								<thead style='color:#000; background-color:#003366;'>
									<tr>
										<td align='center' colspan='2'>
											<!--<img src='http://itoffice.com.pa/images/logo_white.png'  style='width:65%; max-width:260px;' />-->
										</td>
									</tr>
									<tr>
										<td colspan='2' align='center' bgcolor='#000'>
											<strong style='color:#FFF;'>Datos de Formulario Contacto</strong>
										</td>
									</tr>
								</thead>
								<tbody style='color:#003366; background-color:#EFEFEF'>
									".$body."
								</tbody>
							</table>
						</body>
					</html>
				*/
					$mail->MsgHTML($message);
			if(!$mail->Send()) {
				echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
				echo "Message sent!";
			}
		
		
	
//	}//Fin de clase