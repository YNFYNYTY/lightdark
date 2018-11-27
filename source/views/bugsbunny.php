<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
        if ( empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo "Ha ocurrido un problema con el envío, por favor inténtelo de nuevo";
            exit;
        }
        $recipient = "studiolightdark@gmail.com";
        $subject = "Email of $name from L&D Studio Site";
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";
        $email_headers = "From: $name <$email>";
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            http_response_code(200);
            echo "Gracias, contactaremos contigo lo antes posible";
        } else {
            http_response_code(500);
            echo "Oops! Algo ha salido mal y no hemos podido enviar el mensaje.";
        }

    } else {
        http_response_code(403);
        echo "Ha ocurrido un problema con el envío, por favor inténtelo de nuevo";
    }
?>