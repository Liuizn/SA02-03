<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<style>
        .cpf-f{border-color:#ff0000;
        }
    
</style>
<body>
    <?php
    require_once 'medico_POO.php';
    if (isset($_GET["id_medicos"])) {
        $id_medicos = addslashes($_GET['id_medicos']);
        $pessoa1 = new Medico("localhost","agencia_estetica","root","");
        $res = $pessoa1->buscarDadosPessoa($id_medicos);
    
    
    }

    ?>
    <form action="" method="post">

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value = <?php echo $res["nome_medicos"] ?> >
    <br><br>

    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email" value = <?php echo $res["email_medicos"] ?>>
    <br><br>

    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" id="cpf" value = <?php echo $res["cpf"] ?>>
    <br><br>

    <label for="status">Status:</label>
    <select name="status" id="status">
    
        <option value="1">Ativo</option>
        <option value="2">Desativado</option>

    </select>
    <br><br>

    <label for="celular">Celular:</label>
    <input type="text" name="celular" id="celular"  value = <?php echo $res["celular_medicos"] ?>>
    <br><br>

    <label for="fixo1">Telefone fixo:</label>
    <input type="text" name="fixo1" id="fixo1"  value = <?php echo $res["fixo1_medicos"] ?>>
    <br><br>

    <label for="fixo2">Telefone secundario:</label>
    <input type="text" name="fixo2" id="fixo2"  value = <?php echo $res["fixo2_medicos"] ?>>
    <br><br>

    <label for="cep">Cep:</label>
    <input type="text" name="cep" id="cep"  value = <?php echo $res["cep_medicos"] ?>>
    <br><br>

    <label for="bairro">Bairro:</label>
    <input type="text" name="bairro" id="bairro"  value = <?php echo $res["bairro_medicos"] ?>>
    <br><br>

    <label for="rua">Rua:</label>
    <input type="text" name="rua" id="rua"  value = <?php echo $res["rua_medicos"] ?>>
    <br><br>

    <label for="numero">Número:</label>
    <input type="text" name="numero" id="numero"  value = <?php echo $res["numero_medicos"] ?>>
    <br><br>

    <label for="complemento">Complemento:</label>
    <input type="text" name="complemento" id="complemento"  value = <?php echo $res["complemento_medicos"] ?>>
    <br><br>

    <button id="b_index"> <a href="index.php">Voltar ao Início</a></button>
            <button id="b_medicos"><a href="tabela_medico_POO.php">Ver medicos</a></button>
            <input type="reset" value="Limpar" id="b_limpar">
    <input type="submit">
    </form>

<?php


if(isset($_POST["nome"])){
$id_medicos = addslashes($_GET['id_medicos']);
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



$pessoa->atualizar($id_medicos,$nome,$rua,$cpf,$status,$numero,$bairro,$cep,$complemento,$email,$celular,$fixo1,$fixo2);

}







?>
</body>
</html>