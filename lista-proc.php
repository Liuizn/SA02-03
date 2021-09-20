<body>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
    <table border="1">

        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Gênero</td>
            <td>Valor (R$)</td>
            <td>Data de cadastro</td>
        </tr>
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