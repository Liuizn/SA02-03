<?php
require_once "conexao.php";
if (isset ($_POST['nome_procedimento'])){
    $id_proc = addslashes($_POST['id_procedimento']);
    $nome = addslashes($_POST['nome_procedimento']);
    $valor_proc = addslashes($_POST['valor_procedimento']);
    $genero = addslashes($_POST['genero']);


    
    $inserir = $con->prepare("INSERT INTO procedimentos(id_procedimento,nome_procedimento,valor_procedimento,genero) values (:id,:n,:v,:g)");
    $inserir->bindParam(":id",$id_proc);
    $inserir->bindParam(":n",$nome);
    $inserir->bindParam(":v",$valor_proc);
    $inserir->bindParam(":g",$genero);
    $inserir->execute();
    
    header("location: lista-proc.php");
}
