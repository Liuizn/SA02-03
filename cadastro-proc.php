<body>
    <h2>Insira as informações do paciente</h2>
    <form action="insert-proc.php" method="post">

        <label for="codigo_procedimento">Código:</label>
        <input type="text" name="id_procedimento" id="id_procedimento" maxlength="9" pattern="[0-9]+$" required><br><br>

        <label for="nome_procedimento">Nome:</label>
        <input type="text" name="nome_procedimento" id="nome_procedimento" maxlength="50" required><br><br>

        <label for="valor_procedimento">Valor:</label>
        <input type="text" name="valor_procedimento" id="valor_procedimento" maxlength="60" required><br><br>

        <label for="genero">Genero:</label>
        <select name="genero" id="genero">
            <option value="Ambos">Ambos</option>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
        </select> <br> <br>

        <p id="data">Data de registro</p>

        <button><a href="lista-proc.php">Procedimentos cadastrados
            </a></button>
        <style>
            A {
                text-decoration: none;
                color: black
            }
        </style>
        <input type="submit" value="Cadastrar">

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