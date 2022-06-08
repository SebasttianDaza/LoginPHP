<?php 
    require '../vendor/phpmailer/phpmailer/src/Exception.php';
    require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require '../vendor/phpmailer/phpmailer/src/SMTP.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require '../vendor/autoload.php';
    
    
    function sendEmail($name, $email) {
        $mail = new PHPMailer(true);
        
        try {
            $mail->SMTPDebug =  SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username =  'sebasttiandazaphp@gmail.com';
            $mail->Password = 'HPMzr0112';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            //Recipients
            $mail->setFrom('sebasttiandazaphp@gmail.com', 'Sebastian Daza');
            $mail->addAddress($email, $name);


            $mail->isHTML(true);                          
            $mail->Subject = 'Sebastian Daza, Full Stack Developer';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            //Verificar si el correo se envio correctamente
            if($mail->send()) {
                $mail->send();
                return true;
            } else {
                return false;
            }

        } catch (Exception $e) {
            return $e;
        }

    }
?>