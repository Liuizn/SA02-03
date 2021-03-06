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

    <h1>Consulta Medicos</h1>

    <div class="pai-tabela" id="tabela">
        <table border="1">
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
                    <td>Status</td>
                    <td>Editar</td>
                    <td>Excluir</td>
                </tr>
            </thead>
            <tbody>
                <?php
            require_once 'conexao.php';
            $cmd = $con->query("SELECT * FROM medicos ORDER BY id_medicos asc");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

            foreach($res as $valor){
                echo "<tr>";
                echo "<td>".$valor['id_medicos']."</td>";
                echo "<td>".$valor['nome_medicos']."</td>";
                echo "<td>".$valor['cep_medicos']."</td>";
                echo "<td>".$valor['bairro_medicos']."</td>";
                echo "<td>".$valor['rua_medicos']."</td>";
                echo "<td>".$valor['numero_medicos']."</td>";
                echo "<td>".$valor['complemento_medicos']."</td>";
                echo "<td>".$valor['email_medicos']."</td>";
                echo "<td>".$valor['celular_medicos']."</td>";
                echo "<td>".$valor['fixo1_medicos']."</td>";
                echo "<td>".$valor['fixo2_medicos']."</td>";
                echo "<td>" . $valor['data_registro_medicos'] ."</td>";

                if ($valor['status_medico'] == 1) {
                    echo "<td> Ativo </td>";
                }
                else{
                    echo "<td> Inativo </td>";
                }

                echo "<td><a href='update-form_medico.php?id_medicos=".$valor['id_medicos']."'>Editar</a></td>";
                echo "<td><a href='delete_medico.php?id_medicos=".$valor['id_medicos']."'>Excluir</a><td>";
                echo "</tr>";
            }
        ?>
            </tbody>
        </table>

<<<<<<< HEAD:tabela_medico.php
        <div class="display-button-table">
            <div class="Button-Area">
                <a href="index.php" id="b_index">Voltar ao Início</a></button>
                <a id="b_medicos" href="cadastrar_medico.php">Cadastrar medico</a>
            </div>
=======
        <div class="group-inputs group-buttons">
            <button  id="b_index"><a href="index.php">Voltar ao Início</a></button>
            <button id="b_medicos"><a href="form_medico_POO.php">Cadastrar medico</a></button>
>>>>>>> e9207e28cb783852c0425fb2384d2f6b37a14013:antigos/tabela_medico.php
        </div>

</body>

</html>