<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destinatario_email = $_POST['email'];
    $assunto = isset($_POST['assunto']) ? $_POST['assunto'] : '';
    $corpo_email = isset($_POST['corpo_email']) ? $_POST['corpo_email'] : '';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'VagaCertaSuporte@gmail.com';
        $mail->Password   = 'aarssfnaduntylpz';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('VagaCertaSuporte@gmail.com');
        $mail->addAddress($destinatario_email);
        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $corpo_email;

        $mail->send();
        echo "Um link de alteração de senha foi enviado para seu e-mail.";
    } catch (Exception $e) {
        echo "Erro no envio do e-mail: {$mail->ErrorInfo}";
    }
} else {
    echo "Acesso não permitido.";
}