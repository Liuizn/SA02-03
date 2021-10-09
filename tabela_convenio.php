<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Estetica</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Consulta convenio</h1>

    <div class="pai-tabela" id="tabela">
        <table border="1">
            <thead>
                <tr class="cabecalho">
                    <td>ID</td>
                    <td>Nome Fantasia</td>
                    <td>Nome da Empresa</td>
                    <td>CNPJ</td>
                    <td>Email</td>
                    <td>Nome do Contato</td>
                    <td>Home Page</td>
                    <td>Telefone fixo</td>
                    <td>Telefone Secundário</td>
                    <td>Data de registro</td>
                    <td>Editar</td>
                    <td>Excluir</td>
                </tr>
            </thead>
            <tbody>
                <?php
            require_once 'conexao.php';
            $cmd = $con->query("SELECT * FROM convenios ORDER BY id_convenio asc");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

            foreach($res as $valor){
                echo "<tr>";
                echo "<td>".$valor['id_convenio']."</td>";
                echo "<td>".$valor['nome_fantasia']."</td>";
                echo "<td>".$valor['nome_empresa']."</td>";
                echo "<td>".$valor['cnpj_convenio']."</td>";
                echo "<td>".$valor['email_convenio']."</td>";
                echo "<td>".$valor['nome_contato']."</td>";
                echo "<td>".$valor['homepage']."</td>";
                echo "<td>".$valor['fixo1_convenio']."</td>";
                echo "<td>".$valor['fixo2_convenio']."</td>";
                echo "<td>" . $valor['data_registro_convenio'] ."</td>";
                echo "<td><a href='update-form_convenio.php?id_convenio=".$valor['id_convenio']."'>Editar</a></td>";
                echo "<td><a href='delete_convenio.php?id_convenio=".$valor['id_convenio']."'>Excluir</a><td>";
                echo "</tr>";
            }
        ?>
            </tbody>
        </table>

        <div class="display-button-table">
            <div class="Button-Area">
                <a href="index.php" id="b_index">Voltar ao Início</a>
                <a id="b_medicos" href="cadastrar_convenio.php">Cadastrar convenios</a>
            </div>
        </div>
    </div>

</body>

</html>