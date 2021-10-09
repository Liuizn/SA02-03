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
    <div class="pai-area-formulario" id="inicio">
        <div class="group-inputs group-buttons">

            <button> <a href="cadastrar_convenio.php"> Cadastrar novo convênio</a></button>
            <button> <a href="tabela_convenio.php"> Consultar convênio</a></button>

            <button> <a href="cadastrar.php"> Cadastrar novo paciente</a></button>
            <button> <a href="tabela_pacientes.php"> Consultar pacientes</a></button>

            <button> <a href="form_medico_POO.php"> Cadastrar novo medico</a></button>
            <button> <a href="tabela_medico_POO.php"> Consultar medico</a></button>

            <button> <a href="cadastro-proc.php"> Cadastrar novo procedimento</a></button>
            <button> <a href="lista-proc.php">Consultar Procedimento</a></button>
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