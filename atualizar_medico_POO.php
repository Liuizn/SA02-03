<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <form action="" method="post">

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    <br><br>

    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email">
    <br><br>

    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" id="cpf">
    <br><br>

    <label for="status">Status:</label>
    <select name="status" id="status">
    
        <option value="1">Ativo</option>
        <option value="2">Desativado</option>

    </select>
    <br><br>

    <label for="celular">Celular:</label>
    <input type="text" name="celular" id="celular">
    <br><br>

    <label for="fixo1">Telefone fixo:</label>
    <input type="text" name="fixo1" id="fixo1">
    <br><br>

    <label for="fixo2">Telefone secundario:</label>
    <input type="text" name="fixo2" id="fixo2">
    <br><br>

    <label for="cep">Cep:</label>
    <input type="text" name="cep" id="cep">
    <br><br>

    <label for="bairro">Bairro:</label>
    <input type="text" name="bairro" id="bairro">
    <br><br>

    <label for="rua">Rua:</label>
    <input type="text" name="rua" id="rua">
    <br><br>

    <label for="numero">Número:</label>
    <input type="text" name="numero" id="numero">
    <br><br>

    <label for="complemento">Complemento:</label>
    <input type="text" name="complemento" id="complemento">
    <br><br>

    <button id="b_index"> <a href="index.php">Voltar ao Início</a></button>
            <button id="b_medicos"><a href="tabela_medico_POO.php">Ver medicos</a></button>
            <input type="reset" value="Limpar" id="b_limpar">
    <input type="submit">
    </form>

<?php
require_once 'medico_POO.php';

if(isset($_POST["nome"])){

$nome = addslashes($_POST["nome"]);
$rua = addslashes($_POST["rua"]);
$cpf = addslashes($_POST["cpf"]);


$status = addslashes($_POST["status"]);
$numero = addslashes($_POST["numero"]);

$bairro = addslashes($_POST["bairro"]);
$cep = addslashes($_POST["cep"]);
$complemento = addslashes($_POST["complemento"]);
$email = addslashes($_POST["email"]);
$celular = addslashes($_POST["celular"]);
$fixo1 = addslashes($_POST["fixo1"]);
$fixo2 = addslashes($_POST["fixo2"]);


$pessoa = new Medico("localhost","agencia_estetica","root","");
$pessoa->cadastrarPessoa($nome,$rua,$cpf,$status,$numero,$bairro,$cep,$complemento,$email,$celular,$fixo1,$fixo2);}



?>
</body>
</html>