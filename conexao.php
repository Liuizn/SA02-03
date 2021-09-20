<?php

try {
    $con = new PDO("mysql:host=localhost;dbname=agencia_estetica","root","");
    
}catch(PDOException $e){
    echo "Erro ao acessar banco". $e->getMessage();
};

?>