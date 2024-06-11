<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {

        // Crear objeto email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = $_ENV['EMAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Port = $_ENV['EMAIL_PORT'];
        $mail->Username = $_ENV['EMAIL_USER'];
        $mail->Password = $_ENV['EMAIL_PASS'];

        $mail->setFrom('lizznailsbeauty@gmail.com');
         $mail->addAddress('lizznailsbeauty@gmail.com', 'lizznailsbeautycita.com');
         $mail->Subject = 'Confirma tu Cuenta';

         // Set HTML
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';

         $contenido = '<html>';
         $contenido .= "<p><strong>Hola " . $this->email .  "</strong> Has Creado tu cuenta en lizznailsbeautycita, solo debes confirmarla presionando el siguiente enlace</p>";
         $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['APP_URL'] . "/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";        
         $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
         $contenido .= '</html>';
         $mail->Body = $contenido;

         //Enviar el mail
         $mail->send();
    }

    public function enviarInstrucciones() {
          // Crear objeto email
          $mail = new PHPMailer();
          $mail->isSMTP();
          $mail->Host = $_ENV['EMAIL_HOST'];
          $mail->SMTPAuth = true;
          $mail->Port = $_ENV['EMAIL_PORT'];
          $mail->Username = $_ENV['EMAIL_USER'];
          $mail->Password = $_ENV['EMAIL_PASS'];
  
          $mail->setFrom('lizznailsbeauty@gmail.com');
          $mail->addAddress('lizznailsbeauty@gmail.com', 'lizznailsbeautycita.com');
          $mail->Subject = 'Reestablece tu Contraseña';
  
           // Set HTML
          $mail->isHTML(TRUE);
          $mail->CharSet = 'UTF-8';
          $contenido = '<html>';
          $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu Contraseña, sigue el siguiente enlace para hacerlo.</p>";
          $contenido .= "<p>Presiona aquí: <a href='" . $_ENV['APP_URL'] . "/recuperar?token=" . $this->token . "'>Reestablecer Contraseña</a>";        
          $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
          $contenido .= '</html>';
          $mail->Body = $contenido;

            //Enviar el mail
        $mail->send();
    }

}