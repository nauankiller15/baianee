<?php

require 'vendor/autoload.php';

use \App\Communication\Email;

$address = 'nauanteste@gmail.com';
$subject = 'Olá mundo';
$body = 'Olá seu filho da puta';

$obEmail = new Email;
$sucesso = $obEmail->sendEmail($address,$subject,$body);

echo $sucesso ? 'Mensagem enviada com sucesso!' : $obEmail->getError();