<?php
    $email = addcslashes($_POST['email']);
    $assunto = addcslashes($_POST["assunto"]);
    $comentario = addcslashes($_POST["comentario"]);

    
?>

<script>
window.onload = function() {
  Swal.fire({
    title: 'Obrigado <?php echo $nome; ?>!',
    text: 'Agradecemos ao seu feedback, é importante para nós. Em até de 24h receberá sua resposta.',
    icon: 'success',
    confirmButtonText: 'Ok'
  });
}
</script>

<a href="javascript:history.go(-1)">Voltar para a página anterior</a>
</body>

</html>