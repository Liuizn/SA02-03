<?php
    require_once 'convenio_POO.php';

    if (isset ($_GET['id_convenio']) && !empty($_GET['id_convenio'])) {
        $id_convenio = addslashes($_GET['id_convenio']);

        $convenio = new Convenio("localhost", "agencia_estetica", "root", "");
        $convenio->delete($id_convenio);
        header("location: tabela_convenio.php");
    }

?>