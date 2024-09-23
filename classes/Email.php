<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Email
{

    public $email;
    public $nombre;
    public $token;

    public function __construct($nombre, $email, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {

        // Crear objeto email
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->CharSet = 'UTF-8';
        $mail->IsHTML(true);

        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];


        $mail->setFrom('ventas@lizznailsbeautycita.com');
        $mail->addAddress($this->email, $this->nombre);
        $mail->Subject = 'Confirma tu Cuenta';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->email .  "</strong> Has Creado tu cuenta en lizznailsbeautycita, solo debes confirmarla presionando el siguiente enlace</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['APP_URL'] . "/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->msgHTML($contenido);

        //Enviar el mail
        $mail->send();
    }

    public function enviarInstrucciones()
    {
        // Crear objeto email
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->CharSet = 'UTF-8';
        $mail->IsHTML(true);

        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];


        $mail->setFrom('ventas@lizznailsbeautycita.com');
        $mail->addAddress($this->email, $this->nombre);
        $mail->Subject = 'Reestablece tu Contraseña';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu Contraseña, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['APP_URL'] . "/recuperar?token=" . $this->token . "'>Reestablecer Contraseña</a>";
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->msgHTML($contenido);

        //Enviar el mail
        $mail->send();
    }
}