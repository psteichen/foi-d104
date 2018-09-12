<?php
    $to = "info@fiftyone.lu";
    $from = "no-reply@fiftyone.lu";
    $subject = "Message depuis www.fiftyone.lu";
    $subject_user = "Votre message soumis via www.fiftyone.lu";
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    $headers = "From: $from";
    $fields = array();
    $fields{"name"} = "Nom";
    $fields{"email"} = "Email";
    $fields{"message"} = "Message";
    $body = "Bonjour,\n\nVoici un message provenant d'un utilisateur du site www.fiftyone.lu :\n\n"; foreach($fields as $a => $b){$body .= sprintf("%s : %30s\n\n",$b,$_REQUEST[$a]); }
    $body_user = "Bonjour,\n\nVoici copie de votre message soumis via le site www.fiftyone.lu :\n\n"; foreach($fields as $c => $d){$body_user .= sprintf("%s : %30s\n\n",$d,$_REQUEST[$c]); }
    $send = mail($to, $subject, $body, $headers);
    $send_user = mail($email, $subject_user, $body_user, $headers);
?>
