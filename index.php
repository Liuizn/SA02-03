<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-index.css">
</head>

<body>
    <div class="container-grid-index">
        <div class="area-convenio">
            <a href="cadastrar_convenio.php"><button>Cadastrar novo convênio</button></a>
            <a href="tabela_convenio.php"><button class="tables">Consultar convênio</button></a>
        </div>
        <div class="area-paciente">
            <a href="cadastrar_convenio.php"><button>Cadastrar novo convênio</button></a>
            <a href="tabela_convenio.php"><button class="tables">Consultar convênio</button></a>
        </div>
        <div class="area-medico">
            <a href="cadastrar.php"><button> Cadastrar novo paciente</button></a>
            <a href="tabela_pacientes.php"> <button class="tables">Consultar pacientes</button></a>
        </div>
        <div class="area-procedimento">
            <a href="cadastrar_medico.php"> <button>Cadastrar novo medico</button></a>
            <a href="tabela_medico.php"> <button class="tables">Consultar  medico</button></a>
        </div>
        <div class="Text-area">
            <h1>Seja Bem Vindo a Clínica</h1>
            <div class="group">
                <p id="data">Data da Sessão</p>
            </div>
        </div>
    </div>


    <script>
    var data = new Date();
    var dia = data.getDate();
    var mes = data.getMonth();
    var ano4 = data.getFullYear();
    var str_data = dia + '/' + (mes + 1) + '/' + ano4;
    data = document.getElementById("data")
    data.innerHTML = `Data da Sessão: ${str_data}`
</script>

</body>

</html>