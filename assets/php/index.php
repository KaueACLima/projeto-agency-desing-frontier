<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--* CSS  -->
  <link rel="stylesheet" href="../css/page-php.css">
  <title>Agradecemos seu feedback</title>
</head>

<body>

  <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST["assunto"];
    $comentario = $_POST["comentario"];
    $cabecalho = "De agenciadesingfrontier@gmail.com"."\n"."X=Mailer:PHP/".phpversion();
?>


  <div>
    <h1>Seu e-mail foi enviado com sucesso!</h1>
    <p>Em até 24h seu e-mail será respondido. Nossa equipe agradece o seu feedback.</p>

    <h2>Corpo do email:</h2>
    <p>Nome: ".$nome."</p><br>
    <p>Nome: ".$email."</p><br>
    <p>Nome: ".$assunto."</p><br>
    <p>Nome: ".$comentario."</p><br>
    <p>$cabecalho</p>
  </div>
</body>

</html>