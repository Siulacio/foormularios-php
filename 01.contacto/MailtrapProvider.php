<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/EmailProviderInterface.php';

final class MailtrapProvider implements EmailProviderInterface
{

    public function sendEmail(string $to, string $subject, string $body): bool
    {
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '0278e8fa34a50b';
        $mail->Password = '59ab8d9b2a22c8';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '2525';

        try {
            $mail->setFrom('your@email.com', 'Your Name');
            $mail->addAddress($to);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->send();
            return true;
        } catch (Exception) {
            return false;
        }
    }
}
