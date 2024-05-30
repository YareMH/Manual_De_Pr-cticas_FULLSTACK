<?php
// Importa la clase PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carga la librería de PHPMailer
require 'vendor/autoload.php';

// Crea una nueva instancia de PHPMailer
$mail = new PHPMailer(true); // Pasa `true` para activar excepciones

try {
    // Configura el servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yare.hernandez.6789@gmail.com'; // Tu correo de Gmail
    $mail->Password = 'sdlfjfhkdfsdf'; // Tu contraseña de Gmail o una contraseña de aplicación
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Configura el remitente y el destinatario
    $mail->setFrom('yare.hernandez.6789@gmail.com', 'Yaret');
    $mail->addAddress('oswaldoaguilara03@gmail.com', 'Mor');

    // Configura el contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Decirte que te amo';
    $mail->Body = 'ola bello, loviu muchote';
    $mail->AltBody = 'xoxoxoxxoxoXOxoxoxox';

    // Envía el correo
    $mail->send();
    echo 'El correo se ha enviado correctamente.';
} catch (Exception $e) {
    // Maneja cualquier excepción que pueda ocurrir durante el envío del correo
    echo 'El correo no pudo ser enviado. Error: ', $mail->ErrorInfo;
}
?>
