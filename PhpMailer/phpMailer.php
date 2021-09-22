<?php

namespace Classes\PHPMailer;
use Components\Curl\Query;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class phpMailer
{
    public function __construct()
    {
        $this->l = logger('CRM');
    }

    public function sendMail($smtp, $email, $url)
    {
        $l = $this->l ;

        // $data = $this->request->post();

        $l->log($smtp);
        $l->log($email);
        $l->log($url);

        $mail = new PHPMailer(true);
        $mail-> SMTPDebug = 2;

        $title = "У вас новая сделка";

        $message = '<p>  У вас новая сделка " переменная на сделку #..." Ознакомиться можно тут: <p>'.$url;

        $mail->isSMTP();
        $mail->SMTPAuth     = true;
        $mail->Host         = $smtp->host;
        $mail->Username     = $smtp->username;
        $mail->Password     = $smtp->password;
        if (isset($smtp->SMTPSecure)) {
        $mail->SMTPSecure   = $smtp->SMTPSecure;
        }else {
            $mail->SMTPSecure = '';
        }
        $mail->Port         = $smtp->port;
        
        // $mail->Host     = 'smtp.yandex.ru';
        // $mail->Username     = 'ящик';
        // $mail->Password     = 'пас';
        // $mail->SMTPSecure   = 'ssl';
        // $mail->Port         = 465;
        $mail->CharSet = "utf-8";
        $mail->setFrom($smtp->username, 'Widget GetResponse');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = $title;
        
        // Если не обернуть, будет ошибка
        $mail->Body = strval($message);
        $mail->send();

        return true;

    }


}
