<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>
    <form action="script.php" method="post">
        <?php
            $menssagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if(!empty($menssagemDeErro))
            {
                 echo $menssagemDeErro;
            }
        ?>
        <p>SEU NOME: <input type="text" name="nome"></p>
        <p>SUA IDADE: <input type="text" name="idade"></p>
        <p><input type="submit" value="Enviar dados do competidor"></p>
    </form>
    <?php
            $menssagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
            if(!empty($menssagemDeSucesso))
            {
                 echo $menssagemDeSucesso;
            }
        ?>

</body>
</html>
