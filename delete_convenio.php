<?php
    require_once 'conexao.php';

    if (isset ($_GET['id_convenio']) && !empty($_GET['id_convenio'])) {
        $id_convenio = addslashes($_GET['id_convenio']);

        $exec = $con->prepare("DELETE FROM convenios WHERE id_convenio = :id");
        $exec ->bindParam(":id",$id_convenio);
        $exec ->execute();

        header("location: tabela_convenio.php");
    }

?>