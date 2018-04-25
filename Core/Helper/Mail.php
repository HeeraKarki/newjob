<?php

namespace Core\Helper;


use Core\App;
use PHPMailer\PHPMailer\PHPMailer;

class Mail
{
    protected static $host;
    protected static $port;
    protected static $username;
    protected static $password;

    public function __construct()
    {
        $mail_conf=App::get('config')['mail'];
        static::$host= $mail_conf['host'];
        static::$port= $mail_conf['port'];
        static::$username= $mail_conf['username'];
        static::$password= $mail_conf['password'];
    }

    public static function send(array $data)
    {
        $mail = new PHPMailer();
        try {
//            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = static::$host;
            $mail->SMTPAuth = true;
            $mail->Username = static::$username;
            $mail->Password = static::$password;
            $mail->SMTPSecure = 'tls';
            $mail->Port = static::$port;

            //Recipients
            $mail->setFrom(static::$username, strtoupper(static::$username));
            if (is_array($data['to'])){
                foreach ($data['to'] as $value){
                    $mail->addAddress($value);
                }
            }else{
                $mail->addAddress($data['to']);
            }

            $mail->addReplyTo(static::$username, strtoupper(!isset($data['sender'])?static::$username:$data['sender']));
            if (isset($data['cc'])){
                $mail->addCC($data['cc']);
            }
            if (isset($data['bcc'])){
                $mail->addBCC($data['bcc']);
            }


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = strlen($data['subject'])!==0?$data['subject']:'Here is the subject';
            $mail->Body = isset($data['body']) ? $data['body']: "This is the HTML message body <b>in bold!</b>";
            $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}