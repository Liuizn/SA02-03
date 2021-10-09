<?php
require_once "conexao.php";
if (isset ($_GET['id_medicos'])){
    $id_medicos = addslashes($_GET['id_medicos']);
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
    $status = htmlspecialchars($_POST['status']);
    
    $cmd = $con->prepare("UPDATE medicos
     set nome_medicos = :n,
        celular_medicos = :c,
        fixo1_medicos = :f1,
        fixo2_medicos = :f2,
        email_medicos = :e,
        cep_medicos = :cep,
        bairro_medicos = :ba,
        rua_medicos = :r,
        numero_medicos = :num,
        status_medico = :sm,
        complemento_medicos = :comp where id_medicos = :id ");
    $cmd->bindParam(":id",$id_medicos);
    $cmd->bindParam(":n",$nome);
    $cmd->bindParam(":c",$celular);
    $cmd->bindParam(":f1",$fixo1);
    $cmd->bindParam(":f2",$fixo2);
    $cmd->bindParam(":e",$email);
    $cmd->bindParam(":cep",$cep);
    $cmd->bindParam(":ba",$bairro);
    $cmd->bindParam(":r",$rua);
    $cmd->bindParam(":num",$numero);
    $cmd->bindParam(":sm",$status);
    $cmd->bindParam(":comp",$complemento);
    $cmd->execute();
    
    header("location: tabela_medico_POO.php");
}
?>
