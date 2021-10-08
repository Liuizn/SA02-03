<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar medicos</title>
</head>
<body>
<table border=1>
            <tr id="titulo">
                <td>Nome</td>
                <td>E-mail</td>
                <td>CPF</td>
                <td>Status</td>
                <td>Celular</td>
                <td>Fixo primario</td>
                <td>Fixo secundario</td>
                <td>CEP</td>
                <td>Bairro</td>
                <td>Rua</td>
                <td>Numero</td>
                <td>Complemento</td>
                <td>Data de registro</td>
                <td>Editar</td>
                <td>Excluir</td>
                
            </tr>

    <?php
    require_once "medico_POO.php";
    $con = new Medico("localhost","agencia_estetica","root","");
    $conteudo = $con->buscar();

    if (count($conteudo) > 0) {
        for($i=0; $i < count($conteudo);$i ++ ){
            echo "<tr>";
            foreach($conteudo[$i] as $key => $value) {
                if ($key == "status_medico") {
                    if ($value == 1) {
                        $value = "Ativo";
                    }
                    else{
                        $value = "Inativo";
                    }
                    
                }
                if($key != "id_medicos") {
                    echo "<td>".$value."</td>";
                    
                    
                }
                else if ($key = "id_medicos") {
                    echo "<td><a href='atualizar_medico_POO.php?id_medicos=".$value."'>Editar   </a></td>";
                    echo "<td><a href='delete_medico.php?id_medicos=".$value."'>Excluir</a></td>";
                }
                
                
            }
            
            
        }
    }
    
    ?>
    
</table>
        <div class="group-inputs group-buttons">
                <br>
                <button  id="b_index"><a href="index.php">Voltar ao Início</a></button>
                <button id="b_medicos"><a href="form_medico_POO.php">Cadastrar medico</a></button>
            </div>
        
</body>
</html>