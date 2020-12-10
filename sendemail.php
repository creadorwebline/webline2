<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
        $name       = $_POST['name']; 
        $from       = $_POST['email']; 
        $subject    = $_POST['subject']; 
        $message    = $_POST['message']; 
        
        $headers = "From:". $from . "\r\n";
        $headers = "Reply-to: info@creadorwebline.com" . "\r\n";
        $headers = "X-Mailer: PHP/" - phpversion();
        $mail = @mail($from,$subject,$message,$headers);

        if($mail){
            echo("Enviado");
        }

    }
}