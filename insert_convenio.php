<?php
require_once "conexao.php";
if (isset ($_POST['nome'])){
    $nomef = addslashes($_POST['nomef']);
    $nomee = addslashes($_POST['nome']);
    $nomec = addslashes($_POST['nome-contato']);
    $cnpj = addslashes($_POST['cnpj']);
    $email = addslashes($_POST['email']);
    $homepage = addslashes($_POST['homepage']);
    $fixo1 = addslashes($_POST['fixo1']);
    $fixo2 = htmlspecialchars($_POST['fixo2']);
    

    $inserir = $con->prepare("INSERT INTO convenios(nome_fantasia,nome_empresa,nome_contato,cnpj_convenio,homepage,fixo1_convenio,fixo2_convenio,email_convenio) values (:nf,:ne,:nc,:cnpj,:hp,:f1,:f2,:e)");
    $inserir->bindParam(":nf",$nomef);
    $inserir->bindParam(":ne",$nomee);
    $inserir->bindParam(":nc",$nomec);
    $inserir->bindParam(":cnpj",$cnpj);
    $inserir->bindParam(":hp",$homepage);
    $inserir->bindParam(":f1",$fixo1);
    $inserir->bindParam(":f2",$fixo2);
    $inserir->bindParam(":e",$email);
    $inserir->execute();
    
    header("location: cadastrar_convenio.php");
}

?>