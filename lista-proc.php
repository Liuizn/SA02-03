<head>
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <h1>Consulta Pacientes</h1>
    <div class="pai-area-formulario" id="tabela">
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

        <div class="group-inputs group-buttons">
            <button id="b_medicos"><a href="cadastro-proc.php">Cadastrar Procedimento</a></button>
            <button id="b_index"> <a href="index.php">Voltar ao Início</a></button>
        </div>

    </div>


