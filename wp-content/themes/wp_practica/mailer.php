<?php
require get_template_directory_uri() . '/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mestanzacarlos@gmail.com';                 // SMTP username
$mail->Password = '27101982';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;


$mail->setFrom($_POST['email'], $_POST['first_name']);
$mail->addAddress('mestanzacarlos@gmail.com', $_POST['first_name']);     // Add a recipient
//$mail->addAddress('emijacobo@gmail.com', 'Manowar Perez');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
///$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Mensaje de '.$_POST['first_name'];
$mail->Body    = $_POST['message'].' de '.$_POST['email'];
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo '<script language="javascript">alert("Intente de nuevo");</script>'; 
    //header('Location: index.html');
} else {
    echo '<script language="javascript">alert("Mensaje Enviado");</script>'; 
    header('Location: index.html');
}
header('Location: index.html');