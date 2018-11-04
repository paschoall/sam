<?php

if(isset($_POST['email'])) {
    $email_to = "paschoalln@usp.br";
    $email_subject = "Nova resposta sobre satisfação do usuario com o TOB-STT";
    $name = $_POST['Nome']; // required
    $email_from = $_POST['Email']; // required
    $message = $_POST['Sam']; // required

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Form details below.\n\n";
    $email_message .= "Name : ".clean_string($name)."\n";
    $email_message .= "Email : ".clean_string($email_from)."\n";
    $email_message .= "Mensagem : ".clean_string($message)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>
  <!-- include your own success html here -->

  <div class="feedback">Muito obrigado por participar da nossa pesquisa.</div>

  <?php
}
?>