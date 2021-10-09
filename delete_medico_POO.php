<?php
    require_once 'medico_POO.php';

    if (isset ($_GET['id_medicos']) && !empty($_GET['id_medicos'])) {

        $id_medico = addslashes($_GET['id_medicos']);
        echo $id_medico;
        $pessoa = new Medico("localhost","agencia_estetica","root","");
        $pessoa->deletar($id_medico);        
        header("location: tabela_medico_POO.php");
    }

?>