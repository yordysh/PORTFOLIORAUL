<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['tema']) && !empty($_POST['msg']) && !empty($_POST['email'])){
        $name = $_POST['name'];
        $asunto = $_POST['tema'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: noreply@example.com" . "\r\n";
        $header .= "Reply-to: noreply@example.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        @mail($email, $asunto, $msg, $header);
        if($email){
            echo "<h4>¡Envio de correo exitoso!</h4>";
        }
    }
}
?>