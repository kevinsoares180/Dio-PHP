<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';


$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio';
    header('location: index.php');
    return;
}
else if(strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais que 3 caracteres';
    header('location: index.php');
    return;
}
else if(strlen($nome) > 25)
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter menos que 25 caracteres';
    header('location: index.php');
    return;
}
else if($idade > 150)
{
    $_SESSION['mensagem-de-erro'] = 'Idade invalida, coloque a idade correta';
    header('location: index.php');
    return;
}
else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'A idade só pode conter números';
    header('location: index.php');
    return;
} 

if($idade < 12)
{
    $_SESSION['mensagem-de-sucesso'] = $nome.' com '.$idade.' anos compete na categoria infantil';
    header('location: index.php');
    return;
}
else if($idade >= 13 && $idade <= 18)
{
    $_SESSION['mensagem-de-sucesso'] = $nome.' com '.$idade.' anos compete na categoria adolescente';
    header('location: index.php');
    return;
}
else
{
    $_SESSION['mensagem-de-sucesso'] = $nome.' com '.$idade.' anos compete na categoria adulto';
    header('location: index.php');
    return;
}

?>