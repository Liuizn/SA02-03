<?php
    require_once 'conexao.php';

    if (isset ($_GET['id_medicos']) && !empty($_GET['id_medicos'])) {
        $id_medico = addslashes($_GET['id_medicos']);

        $exec = $con->prepare("DELETE FROM medicos WHERE id_medicos = :id");
        $exec ->bindParam(":id",$id_medico);
        $exec ->execute();

        header("location: tabela_medico.php");
    }

?>