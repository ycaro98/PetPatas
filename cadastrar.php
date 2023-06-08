<?php

require __DIR__.'/vendor/autoload.php';

if(isset($_POST['nome'], $_POST['cpf'], $_POST['endereco'], $_POST['email'], $_POST['senha'], $_POST['confirmarSenha'])){
    die('Cadastrar');
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/cadastrarUser.php';
include __DIR__.'/includes/footer.php';

