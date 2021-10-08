<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="grid-css-proc.css">
    <link rel="stylesheet" href="size-inputs.css">
</head>

<body>
    <h1>Insira as informações do procedimento</h1>


    <form action="insert-proc.php" method="post">
        <div class="container-grid-index">
            <div class=" nome-area" id="home">
                <div class="box-area">
                    <label for="nome_procedimento">Nome Procedimento</label>
                    <input type="text" name="nome_procedimento" id="nome_procedimento" maxlength="50" required>
                </div>
            </div>
            <div class="Data-area">
                <div class="box-area">
                    <p id="data">Data de registro</p>
                </div>
            </div>

            <div class="Valor-Area">
                <div class="box-area">
                    <label for="valor_procedimento">Valor</label>
                    <input type="text" name="valor_procedimento" id="valor_procedimento" maxlength="60"
                        pattern="[0-9.]+$" required>
                </div>
            </div>
            <div class="Genero-Area">
                <div class="box-area">
                    <label for="genero">Genero:</label>
                    <select name="genero" id="genero">
                        <option value="Ambos">Ambos</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Masculino">Masculino</option>
                    </select>
                </div>
            </div>
            <div class="Button-Area">
                <a href="index.php" id="b_index">Voltar ao Início</a>
                <a href="lista-proc.php" id="b_medicos">Ver Procedimentos</a>
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