<?php
require_once "conexao.php";
if (isset ($_GET['id_pacientes'])){
    $id_pacientes = addslashes($_GET['id_pacientes']);
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
    
    $cmd = $con->prepare("UPDATE pacientes set nome = :n, celular = :c, fixo1 = :f1, fixo2 = :f2, email = :e, cep = :cep, bairro = :ba, rua = :r, numero = :num, complemento = :comp where id_pacientes = :id ");
    $cmd->bindParam(":id",$id_pacientes);
    $cmd->bindParam(":n",$nome);
    $cmd->bindParam(":c",$celular);
    $cmd->bindParam(":f1",$fixo1);
    $cmd->bindParam(":f2",$fixo2);
    $cmd->bindParam(":e",$email);
    $cmd->bindParam(":cep",$cep);
    $cmd->bindParam(":ba",$bairro);
    $cmd->bindParam(":r",$rua);
    $cmd->bindParam(":num",$numero);
    $cmd->bindParam(":comp",$complemento);
    $cmd->execute();
    
    header("location: tabela_pacientes.php");
}
?>
