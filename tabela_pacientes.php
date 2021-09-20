<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Estetica</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Consulta Pacientes</h1>

    <div class="pai-area-formulario" id="tabela">
        <table border=1>
            <thead>
                <tr class="cabecalho">
                    <td>ID</td>
                    <td>Nome</td>
                    <td>CEP</td>
                    <td>Bairro</td>
                    <td>Rua</td>
                    <td>Nº da casa</td>
                    <td>Complemento</td>
                    <td>Email</td>
                    <td>Celular</td>
                    <td>Telefone fixo</td>
                    <td>Telefone Secundário</td>
                    <td>Data de registro</td>

                </tr>
            </thead>
            <tbody>
                <?php
            require_once 'conexao.php';
            $cmd = $con->query("SELECT * FROM pacientes ORDER BY id_pacientes asc");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

            foreach($res as $valor){
                echo "<tr>";
                echo "<td>".$valor['id_pacientes']."</td>";
                echo "<td>".$valor['nome']."</td>";
                echo "<td>".$valor['cep']."</td>";
                echo "<td>".$valor['bairro']."</td>";
                echo "<td>".$valor['rua']."</td>";
                echo "<td>".$valor['numero']."</td>";
                echo "<td>".$valor['complemento']."</td>";
                echo "<td>".$valor['email']."</td>";
                echo "<td>".$valor['celular']."</td>";
                echo "<td>".$valor['fixo1']."</td>";
                echo "<td>".$valor['fixo2']."</td>";
                echo "<td>" . $valor['data_registro'] ."</td>";
                echo "</tr>";
            }
        ?>
            </tbody>
        </table>

        <div class="group-inputs group-buttons">
        <button id="b_medicos"><a href="cadastrar.php">Cadastrar pacientes</a></button>
        </div>
    </div>

</body>

</html>