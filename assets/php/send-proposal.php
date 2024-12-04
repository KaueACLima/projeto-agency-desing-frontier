<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--* CSS  -->
  <link rel="stylesheet" href="../css/page-php.css">
  <title>Sua proposta foi enviada com sucesso</title>
</head>

<body>

  <?php
    $color1 = $_POST['color1'];
    $color2 = $_POST['color2'];
    $color3 = $_POST['color3'];
    $layout_select = $_POST['layout-select'] ?? 'Nenhum layout selecionado';
    $observations = $_POST["observations"];
    $cabecalho = "De agenciadesingfrontier@gmail.com"."\n"."X=Mailer:PHP/".phpversion();

    $filePath = '';

    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
      $fileTmpPath = $_FILES['file']['tmp_name'];
      $fileName = $_FILES['file']['name'];
      $fileType = $_FILES['file']['type'];
      $uploadDir = 'uploads/';
      $allowedFileTypes = ['image/jpeg', 'image/png'];
  
      if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
      }
  
      if (in_array($fileType, $allowedFileTypes)) {
        $filePath = $uploadDir . $fileName;
  
        if (!move_uploaded_file($fileTmpPath, $filePath)) {
          $filePath = '';
        }
      } else {
        $filePath = '';
      }
    }
?>


  <div class="container">
    <div class="content-info">
      <h1>Sua proposta foi enviada com sucesso!</h1>
      <p>Em até 24h seu e-mail será respondido. Nossa equipe agradece a preferência.</p>
    </div>

    <div class="content-proposal">
      <h2>Resumo de sua proposta:</h2>
      <p>Tipo de layout selecionado: <?php echo $layout_select; ?></p>

      <h3>Paleta de cores:</h3>
      <p><strong>Cor 1:</strong> <?php echo $color1; ?></p>
      <p><strong>Cor 2:</strong> <?php echo $color2; ?></p>
      <p><strong>Cor 3: </strong><?php echo $color3; ?></p>

      <p><strong>Observação:</strong> <?php echo $observations; ?></p>

      <?php if ($filePath): ?>
      <div>
        <img src="<?= $filePath ?>" alt="Imagem enviada" style="max-width: 300px;">
      </div>
      <?php else: ?>
      <p>Sua logo marca, está sendo analisada pela nossa equipe.</p>
      <?php endif; ?>
    </div>
  </div>
  <script src="../js/resize-page.js"></script>
</body>

</html>