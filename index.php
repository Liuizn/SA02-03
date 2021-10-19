

    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-index.css">

<body>
    <div class="container-grid-index">
        <div class="area-convenio">
            <a href="cadastrar_convenio.php"><button>Cadastrar novo convênio</button></a>
            <a href="tabela_convenio.php"><button class="tables">Consultar convênio</button></a>
        </div>
        <div class="area-paciente">
            <a href="cadastro-proc.php"><button>Cadastrar novo procedimento</button></a>
            <a href="tabela-procedimento.php"><button class="tables">Consultar Procedimento</button></a>
        </div>
        <div class="area-medico">
            <a href="cadastro-paciente.php"><button> Cadastrar novo paciente</button></a>
            <a href="tabela_pacientes.php"> <button class="tables">Consultar pacientes</button></a>
        </div>
        <div class="area-procedimento">
            <a href="form_medico_POO.php"> <button>Cadastrar novo médico</button></a>
            <a href="tabela_medico_POO.php"> <button class="tables">Consultar  médico</button></a>
        </div>
        <div class="Text-area">
            <h1>Seja Bem Vindo a Clínica</h1>
            <div class="box-area" id="datee">
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
