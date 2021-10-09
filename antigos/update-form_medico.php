<?php
require_once "conexao.php";

if(isset($_GET['id_medicos']) && !empty($_GET['id_medicos'])){
    $id_medicos = addslashes($_GET['id_medicos']);

    $cmd = $con -> query("SELECT * from medicos where id_medicos = '$id_medicos'");
    $res = $cmd -> fetch(PDO::FETCH_ASSOC);
}
?>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="size-inputs.css">
</head>

<body>
    <h1>Atualizar informações do medico</h1>
    <form action="<?php echo 'update_medico.php?id_medicos='.$id_medicos;?>" method="post" class="pai-area-formulario">

        <div class="group-inputs nome">
            <div class="group" id="nome">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required maxlength="50"
                    value="<?php if(isset($res)) { echo $res['nome_medicos'];}?>">
            </div>
            <select name="status" id="status">

            <option value="1">Ativo</option>
            <option value="2">Desativado</option>

            </select>

            <div class="group">
                <p id="data">Data de registro</p>
            </div>
        </div>


        <div class="group-inputs">
            <div class="group" id="rua">
                <label for="rua">Rua</label>
                <input type="text" name="rua" id="rua" required maxlength="60"
                    value="<?php if(isset($res)) { echo $res['rua_medicos'];}?>">
            </div>

            <div class="group" id="numero">
                <label for="numero">Número</label>
                <input type="text" name="numero" id="numero" required maxlength="10" pattern="[0-9]+$"
                    value="<?php if(isset($res)){ echo $res['numero_medicos'];}?>">
            </div>

            <div class="group" id="bairro">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" required maxlength="60"
                    value="<?php if(isset($res)) { echo $res['bairro_medicos'];}?>">
            </div>

            <div class="group" id="cep">
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep" required maxlength="9" pattern="[0-9- ]+$"
                    value="<?php if(isset($res)) { echo $res['cep_medicos'];}?>">
            </div>
            <div class="group" id="complemento">
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" id="complemento" maxlength="120"
                    value="<?php if(isset($res)){ echo $res['complemento_medicos'];}?>">
            </div>
        </div>

        <div class="group-inputs">
            <div class="group" id="email"> <label for="email">E-mail</label>
                <input type="email" name="email" id="email" maxlength="60" required
                    value="<?php if(isset($res)){ echo $res['email_medicos'];}?>">
            </div>
            <div class="group" id="celular"> <label for="celular">Celular</label>
                <input type="tel" name="celular" id="celular" required maxlength="20" pattern="[0-9-()+ ]+$"
                    value="<?php if(isset($res)){ echo $res['celular_medicos'];}?>">
            </div>
            <div class="group" id="fixo1"> <label for="fixo1">Telefone fixo</label>
                <input type="text" name="fixo1" id="fixo1" maxlength="20" pattern="[0-9-()+ ]+$"
                    value="<?php if(isset($res)){ echo $res['fixo1_medicos'];}?>">
            </div>
            <div class="group" id="fixo2"> <label for="fixo2">Telefone secundario</label>
                <input type="text" name="fixo2" id="fixo2" maxlength="20" pattern="[0-9-()+ ]+$"
                    value="<?php if(isset($res)){ echo $res['fixo2_medicos'];}?>">
            </div>
        </div>

        <div class="group-inputs group-buttons">
            <button id="b_medicos"><a href="tabela_pacientes.php">Ver pacientes</a></button>
            <input type="submit" value="Atualizar" id="b_cadastrar">
        </div>

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