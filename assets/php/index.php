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


  <div class="container">
    <div>
      <h1>Seu e-mail foi enviado com sucesso!</h1>
      <p>Em até 24h seu e-mail será respondido. Nossa equipe agradece o seu feedback.</p>
    </div>

    <div class="content-proposal">
      <h2>Corpo do email:</h2>
      <p><strong>Nome:</strong> <?= $nome ?></p>
      <p><strong>Email:</strong> <?= $email ?></p>
      <p><strong>Assunto:</strong> <?= $assunto ?></p>
      <p><strong>Comentário:</strong> <?= $comentario ?></p>
      <p><strong>Informações de envio:</strong> <?= $cabecalho ?></p>
    </div>
  </div>
  <script src="../js/resize-page.js"></script>
</body>

</html>