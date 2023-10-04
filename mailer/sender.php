<?php

use phpmailer\PHPMailer\PHPMailer;
use phpmailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

function SendMail($site_email, $site_name, $to, $subject, $content, $html = 1, $cc = array(), $bcc = array(), $attachment = null) {

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Mailer = "smtp";
        $mail->Host = 'earth.hostitbro.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@tripzi.ca';
        $mail->Password = '$I[tG[80^t;f';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('noreply@tripzi.ca', $site_name);
        //Lv{!.)gC!45d
        $ccemail = $cc;
        if (is_array($to)) {
            foreach ($to as $t) {
                $mail->addAddress($t);
            }
        } else {
            $mail->addAddress($to);
        }
        if (!empty($cc)) {
            if (is_array($ccemail)) {
                foreach ($ccemail as $key => $value) {
                    $mail->addCC($value);
                }
            } else {
                $mail->addCC($cc);
            }
        }
        if (!empty($bcc)) {
            if (is_array($bcc)) {
                foreach ($bcc as $key => $value) {
                    $mail->addBCC($value);
                }
            } else {
                if (CFG::$siteConfig['site_email'] != $bcc) {
                    $bcc1 = array($bcc, CFG::$siteConfig['site_email']);
                    foreach ($bcc1 as $key => $value) {
                        $mail->addBCC($value);
                    }
                } else {
                    $mail->addBCC($bcc);
                }
            }
        }
        if (!empty($attachment)) {
            if (!is_array($attachment)) {
                $mail->addAttachment($attachment);
            } else {
                foreach ($attachment as $a) {
                    $mail->addAttachment($a);
                }
            }
        }
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $content;

        $mail->send();
        return true;
        // echo 'Mail has been sent';
    } catch (Exception $e) {
        return false;
        // echo "Mail could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>