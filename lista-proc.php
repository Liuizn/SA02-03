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

    <h1>Consulta Procedimento</h1>
    <div class="pai-tabela" id="tabela">
        <table border="1">
            <thead>
                <tr class="cabecalho">
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Valor (R$)</td>
                    <td>Gênero</td>
                    <td>Data de cadastro</td>
                </tr>
            </thead>
            <tbody>
                <?php
            require_once 'conexao.php';
            $cmd = $con->query("SELECT * FROM procedimentos ORDER BY id_procedimento asc");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

            foreach ($res as $valor) {
                echo "<tr>";
                echo "<td>" . $valor['id_procedimento'] . "</td>";
                echo "<td>" . $valor['nome_procedimento'] . "</td>";
                echo "<td>" . $valor['valor_procedimento'] . "</td>";
                echo "<td>" . $valor['genero'] . "</td>";
                echo "<td>" . $valor['data_procedimento'] . "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>

        <div class="display-button-table">
            <div class="Button-Area">
                <a href="index.php" id="b_index">Voltar ao Início</a>
                <a href="cadastro-proc.php" id="b_medicos">Cadastrar Procedimento</a>
            </div>
        </div>
    </div>

</body>

</html>