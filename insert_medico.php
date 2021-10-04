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
    $status = htmlspecialchars($_POST['status']);
    

    $inserir = $con->prepare("INSERT INTO medicos(nome_medicos,celular_medicos,fixo1_medicos,fixo2_medicos,email_medicos,cep_medicos,bairro_medicos,rua_medicos,numero_medicos,complemento_medicos,status_medico) values (:n,:c,:f1,:f2,:e,:cep,:ba,:r,:num,:comp,:sm)");
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
    $inserir->bindParam(":sm",$status);
    $inserir->execute();
    
    header("location: cadastrar_medico.php");
}



?>