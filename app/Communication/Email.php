<?php

namespace App\Communication;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class Email
// CREDENCIAS DE ACESSO AO SMTP
{
    const HOST = 'smtp.gmail.com';
    const USER = 'nauanxdesign@gmail.com';
    const PASS = 'bananaverde1234';
    const SECURE = 'TLS';
    const PORT = 587;
    const CHARSET = 'UTF-8';

    // DADOS DO REMENTENTE
    const FROM_EMAIL = 'nauanxdesign@gmail.com';
    const FROM_NAME = 'Nauan Teste';

    // RETORNAR MENSAGEM DE ERRO
    private $error;
    public function getError()
    {
        return $this->error;
    }

    public function sendEmail($addresss, $subject, $body)
    {
        //LIMPAR MENSAGEM DE ERRO
        $this->error = '';

        //INSTANCIA DE PHPMAILER
        $obMail = new PHPMailer(true);
        try {

            //CREDENCIAIS DE ACESSO AO SMTP
            $obMail->isSMTP(true);
            $obMail->Host = self::HOST;
            $obMail->SMTPAuth = true;
            $obMail->Username = self::USER;
            $obMail->Password = self::PASS;
            $obMail->SMTPSecure = self::SECURE;
            $obMail->Port = self::PORT;
            $obMail->CharSet = self::CHARSET;

            //REMETENTE
            $obMail->setFrom(self::FROM_EMAIL, self::FROM_NAME);


            //DESTINATÁRIOS
            $addresss = is_array($addresss) ? $addresss : [$addresss];
            foreach ($addresss as $addresss) {
                $obMail->addAddress($addresss);
            }

            //CONTEÚDO DO E-MAIL
            $obMail->isHTML(true);
            $obMail->Subject = $subject;
            $obMail->Body = $body;
            
            //ENVIA O EMAIL
            return $obMail->send();
        } catch (PHPMailerException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }
}
