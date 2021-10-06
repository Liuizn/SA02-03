<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="size-inputs.css">
</head>

<body>
    <h1>Insira as informações do Convênio</h1>
    <form action="insert_convenio.php" method="post" class="pai-area-formulario">
        <div class="group-inputs nome">
            <div class="group" id="nomef">
                <label for="nomef">Nome Fantasia</label>
                <input type="text" name="nomef" id="nomef" required maxlength="50">
            </div>
            <div class="group nome-c" id="nome">
                <label for="nome">Nome Empresa</label>
                <input class="nome-c"type="text" name="nome" id="nome" class="" required maxlength="50">
            </div>
            <div class="group">
                <p id="data">Data de registro</p>
            </div>
        </div>

        <div class="group-inputs">

            <div class="group" id="nome-contato">
                <label for="nome-contato">Nome do Contato</label>
                <input type="text" name="nome-contato" id="nome-contato" required maxlength="60">
            </div>

            <div class="group" id="homepage">
                <label for="homepage">Home Page</label>
                <input type="text" name="homepage" id="homepage" required maxlength="60">
            </div>

            <div class="Group" id="cnpj">
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" required maxlength="50">
            </div>

        </div>


        <div class="group-inputs">
            <div class="group" id="email">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" maxlength="60">
            </div>

            <div class="group" id="fixo1">
                <label for="fixo1">Telefone fixo</label>
                <input type="text" name="fixo1" id="fixo1" maxlength="20" pattern="[0-9-()+ ]+$">
            </div>

            <div class="group" id="fixo2">
                <label for="fixo2">Telefone secundario</label>
                <input type="text" name="fixo2" id="fixo2" maxlength="20" pattern="[0-9-()+ ]+$">
            </div>
        </div>

        <div class="group-inputs group-buttons">
            <button id="b_index"> <a href="index.php">Voltar ao Início</a></button>
            <button id="b_medicos"><a href="tabela_convenio.php">Ver Convênios</a></button>
            <input type="reset" value="Limpar" id="b_limpar">
            <input type="submit" value="Cadastrar" id="b_cadastrar">
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

<?php
require_once "conexao.php"
?>