<?php
require_once "conexao.php";
if (isset ($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $cep = addslashes($_POST['cep']);
    $bairro = addslashes($_POST['bairro']);
    $rua = addslashes($_POST['rua']);
    $numero = addslashes($_POST['numero']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $fixo1 = addslashes($_POST['fixo1']);
    $complemento = addslashes($_POST['complemento']);
    $fixo2 = htmlspecialchars($_POST['fixo2']);
    

    $inserir = $con->prepare("INSERT INTO pacientes(nome,celular,fixo1,fixo2,email,cep,bairro,rua,numero,complemento) values (:n,:c,:f1,:f2,:e,:cep,:ba,:r,:num,:comp)");
    $inserir->bindParam(":n",$nome);
    $inserir->bindParam(":c",$celular);
    $inserir->bindParam(":f1",$fixo1);
    $inserir->bindParam(":f2",$fixo2);
    $inserir->bindParam(":e",$email);
    $inserir->bindParam(":cep",$cep);
    $inserir->bindParam(":ba",$bairro);
    $inserir->bindParam(":r",$rua);
    $inserir->bindParam(":num",$numero);
    $inserir->bindParam(":comp",$complemento);
    $inserir->execute();
    
    header("location: cadastro-paciente.php");
}



?>