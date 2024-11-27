<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    $assunto = $_POST["assunto"];
    $too = "agenciadesingfrontier@gmail.com";
    $comentario = $_POST["comentario"];
    
    $corpoEmail = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Assunto".$assunto;
    $cabecalho = "From agenciadesingfrontier@gmail.com"."\n"."Replay-to ".$email."\n"."X=Mailer:PHP/".phpversion();

    if (mail ($too, $assunto, $corpoEmail, $cabecalho)) {
        echo("Agradecemos seu feedback. Seu e-mail foi enviado com sucesso!");
    } else {
        echo("Houve um erro ao enviar o email.");
    }
?>