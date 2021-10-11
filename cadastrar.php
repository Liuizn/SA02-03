<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="grid-css-paciente.css">
    <link rel="stylesheet" href="size-inputs.css">
</head>

<body>
    <h1>Insira as informações do paciente</h1>
    <form action="insert.php" method="post" class="pai-area-formulario">

        <div class="container-grid-index">
            <div class="Nome-area" id="'nome">
                <div class="box-area">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" required maxlength="50">
                </div>
            </div>
            <div class="Cep-area" id="cep">
                <div class="box-area">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep" required maxlength="9" pattern="[0-9- ]+$">
                </div>
            </div>
            <div class="Data-area">
                <div class="box-area">
                    <p id="data">Data de registro</p>
                </div>
            </div>
            <div class="Endereco-area" id="rua">
                <div class="box-area">
                    <label for="rua">Endereço</label>
                    <input type="text" name="rua" id="rua" required maxlength="60">
                </div>
            </div>
            <div class="Numero-area" id="numero">
                <div class="box-area">
                    <label for="numero">Número</label>
                    <input type="text" name="numero" id="numero" required maxlength="10" pattern="[0-9]+$">
                </div>
            </div>
            <div class="Bairro-area" id="bairro">
                <div class="box-area">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" required maxlength="60">
                </div>
            </div>
            <div class="Complemento-area" id="complemento">
                <div class="box-area">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" id="complemento" maxlength="120">
                </div>
            </div>
            <div class="Email-area" id="email">
                <div class="box-area">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" maxlength="60">
                </div>
            </div>
            <div class="Celular-area" id="celular">
                <div class="box-area">
                    <label for="celular">Celular</label>
                    <input type="tel" name="celular" id="celular" required maxlength="20" pattern="[0-9-()+ ]+$">
                </div>
            </div>
            <div class="Fixo1-area" id="fixo1">
                <div class="box-area">
                    <label for="fixo1">Telefone fixo</label>
                    <input type="text" name="fixo1" id="fixo1" maxlength="20" pattern="[0-9-()+ ]+$">
                </div>
            </div>
            <div class="Fixo2-area" id="fixo2">
                <div class="box-area">
                    <label for="fixo2">Telefone secundario</label>
                    <input type="text" name="fixo2" id="fixo2" maxlength="20" pattern="[0-9-()+ ]+$">
                </div>
            </div>
            <div class="Button-area">
                <a href="index.php" id="b_index">Voltar ao Início</a>
                <a href="tabela_pacientes.php" id="b_medicos">Ver pacientes</a>
                <input type="reset" value="Limpar" id="b_limpar">
                <input type="submit" value="Cadastrar" id="b_cadastrar">
            </div>
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