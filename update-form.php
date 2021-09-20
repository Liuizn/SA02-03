
<?php
require_once "conexao.php";

if(isset($_GET['id_pacientes']) && !empty($_GET['id_pacientes'])){
    $id_pacientes = addslashes($_GET['id_pacientes']);

    $cmd = $con -> query("SELECT * from pacientes where id_pacientes = '$id_pacientes'");
    $res = $cmd -> fetch(PDO::FETCH_ASSOC);
}
?>

<body>
    <h2>Atualizar informações do paciente</h2>
    <form action="<?php echo 'update.php?id_pacientes='.$id_pacientes;?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required maxlength="50" value="<?php if(isset($res)) { echo $res['nome'];}?>"><br><br>

        <label for="cep">CEP:</label>
        <input type="text" name="cep" id="cep" required maxlength="9" pattern="[0-9- ]+$" value="<?php if(isset($res)) { echo $res['cep'];}?>" ><br><br>

        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" required maxlength="60" value="<?php if(isset($res)) { echo $res['bairro'];}?>"><br><br>

        <label for="rua">Rua:</label>
        <input type="text" name="rua" id="rua" required maxlength="60" value="<?php if(isset($res)) { echo $res['rua'];}?>"><br><br>

        <label for="numero">Número da casa:</label>
        <input type="text" name="numero" id="numero" required maxlength="10" pattern="[0-9]+$" value="<?php if(isset($res)){ echo $res['numero'];}?>"><br><br>

        <label for="complemento">Complemento:</label>
        <input type="text" name="complemento" id="complemento" maxlength="120" value="<?php if(isset($res)){ echo $res['complemento'];}?>"><br><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" maxlength="60" required value="<?php if(isset($res)){ echo $res['email'];}?>"><br><br>

        <label for="celular">Celular:</label>
        <input type="tel" name="celular" id="celular" required maxlength="20" pattern="[0-9-()+ ]+$" value="<?php if(isset($res)){ echo $res['celular'];}?>"><br><br>

        <label for="fixo1">Telefone fixo:</label>
        <input type="text" name="fixo1" id="fixo1" maxlength="20" pattern="[0-9-()+ ]+$" value="<?php if(isset($res)){ echo $res['fixo1'];}?>"><br><br>

        <label for="fixo2">Telefone secundario:</label>
        <input type="text" name="fixo2" id="fixo2" maxlength="20" pattern="[0-9-()+ ]+$" value="<?php if(isset($res)){ echo $res['fixo2'];}?>"><br><br>

        <p id="data">Data de registro</p>
        <input type="submit" value="Atualizar">

        <button><a href="tabela_pacientes.php">Ver pacientes</a></button>
        <style>
            A {
                text-decoration: none;
                color: black
            }
        </style>

    </form>

</body>

<script>
    var data = new Date();
    var dia = data.getDate();
    var mes = data.getMonth();
    var ano4 = data.getFullYear();
    var str_data = dia + '/' + (mes + 1) + '/' + ano4;
    data = document.getElementById("data")
    data.innerHTML = `Data de registro: ${str_data}`
</script>
