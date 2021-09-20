<?php
    require_once 'conexao.php';

    if (isset ($_GET['id_pacientes']) && !empty($_GET['id_pacientes'])) {
        $id_pacientes = addslashes($_GET['id_pacientes']);

        $exec = $con->prepare("DELETE FROM pacientes WHERE id_pacientes = :id");
        $exec ->bindParam(":id",$id_pacientes);
        $exec ->execute();

        header("location: tabela_pacientes.php");
    }

?>