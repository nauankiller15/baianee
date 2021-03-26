<?php

if ($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $concerned_department = "";
    $visitor_message = "";
    $email_body = "<div>";

    if (isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Nome do Visitante:</b></label>&nbsp;<span>" . $visitor_name . "</span>
                        </div>";
    }

    if (isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Email do Visitante:</b></label>&nbsp;<span>" . $visitor_email . "</span>
                        </div>";
    }

    if (isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Assunto:</b></label>&nbsp;<span>" . $email_title . "</span>
                        </div>";
    }

    if (isset($_POST['concerned_department'])) {
        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Departamento:</b></label>&nbsp;<span>" . $concerned_department . "</span>
                        </div>";
    }

    if (isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<div>
                           <label><b>Mensagem do Visitante:</b></label>
                           <div>" . $visitor_message . "</div>
                        </div>";
    }

    if ($concerned_department == "gestao-de-trafego") {
        $recipient = "nauan.alcantara1@gmail.com";
    } else if ($concerned_department == "mentoria") {
        $recipient = "nauankiller15@hotmail.com";
    } else if ($concerned_department == "social-media") {
        $recipient = "nauankiller@hotmail.com";
    } else if ($concerned_department == "web-design") {
        $recipient = "nauanxdesign@gmail.com";
    } else if ($concerned_department == "videos-institucionais") {
        $recipient = "nauanxdesign@gmail.com";
    } else if ($concerned_department == "fotografia") {
        $recipient = "nauanxdesign@gmail.com";
    } else {
        $recipient = "nauanxdesign@gmail.com";
    }


    $email_body .= "</div>";

    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: Your name <info@address.com>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    mail($to, $subject, $body, $headers);

    if (mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>Obrigado por ter entrado em contato conosco, $visitor_name. Você receberá uma resposta em um prazo de até 24 horas.</p>";
    } else {
        echo '<p>Lamentamos, mas o e-mail não foi enviado.</p>';
    }
} else {
    echo '<p>Ops, algo deu errado!</p>';
}
