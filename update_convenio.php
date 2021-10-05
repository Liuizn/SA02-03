<?php
require_once "conexao.php";
if (isset ($_GET['id_convenio'])){
    $id_convenio = addslashes($_GET['id_convenio']);
    $nomef = addslashes($_POST['nomef']);
    $nomee = addslashes($_POST['nome']);
    $nomec = addslashes($_POST['nome-contato']);
    $cnpj = addslashes($_POST['cnpj']);
    $email = addslashes($_POST['email']);
    $homepage = addslashes($_POST['homepage']);
    $fixo1 = addslashes($_POST['fixo1']);
    $fixo2 = htmlspecialchars($_POST['fixo2']);


    $cmd = $con->prepare("UPDATE convenios set nome_fantasia = :nf, nome_empresa = :ne, nome_contato = :nc, cnpj_convenio = :cnpj, homepage = :hp, fixo1_convenio = :f1, fixo2_convenio = :f2, email_convenio = :e where id_convenio = :id ");
    $cmd->bindParam(":id",$id_convenio);
    $cmd->bindParam(":nf",$nomef);
    $cmd->bindParam(":ne",$nomee);
    $cmd->bindParam(":nc",$nomec);
    $cmd->bindParam(":cnpj",$cnpj);
    $cmd->bindParam(":hp",$homepage);
    $cmd->bindParam(":f1",$fixo1);
    $cmd->bindParam(":f2",$fixo2);
    $cmd->bindParam(":e",$email);
    $cmd->execute();
    
    header("location: tabela_convenio.php");
}
?>