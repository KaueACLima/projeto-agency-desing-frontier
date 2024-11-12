<?php
    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    
    $assunto = addcslashes($_POST["assunto"]);
    $too = "agenciadesingfrontier@gmail.com";
    $comentario = addcslashes($_POST["comentario"]);
    
    $corpoEmail = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Assunto".$assunto
    $cabecalho = "From agenciadesingfrontier@gmail.com"."\n"."Replay-to ".$email."\n"."X=Mailer:PHP/".phpversion();

    if (mail ($too, $assunto, $corpoEmail, $cabecalho)) {
        echo("Agradecemos seu feedback. Seu e-mail foi enviado com sucesso!");
    } else {
        echo("Houve um erro ao enviar o email.");
    }
?>

<!-- <script>
window.onload = function() {
  Swal.fire({
    title: 'Obrigado !',
    text: 'Agradecemos ao seu feedback, é importante para nós. Em até de 24h receberá sua resposta.',
    icon: 'success',
    confirmButtonText: 'Ok'
  });
}
</script>

<a href="javascript:history.go(-1)">Voltar para a página anterior</a>
</body>

</html> -->