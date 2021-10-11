<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="grid-css-medico.css">
    <link rel="stylesheet" href="size-inputs.css">
</head>

<body>

    <h1>Insira as informações do medico</h1>
    
    <form action="" method="post">
        <div class="container-grid-index">
            <div class="Nome-area">
                <div class="box-area">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" maxlength="50">
                </div>
            </div>
            <div class="Email-area">
                <div class="box-area">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" maxlength="60">
                </div>
            </div>
            <div class="Cpf-area">
                <div class="box-area">
                    <label for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf">
                </div>
            </div>
            <div class="Status-area">
                <div class="box-area">
                    <label for="status">Status:</label>
                    <select name="status" id="status">
                        <option value="1">Ativo</option>
                        <option value="2">Desativado</option>
                    </select>
                </div>
            </div>
            <div class="Data-area">
                <div class="box-area">
                    <p id="data">Data de registro</p>
                </div>
            </div>
            <div class="Cep-area">
                <div class="box-area">
                    <label for="cep">Cep:</label>
                    <input type="text" name="cep" id="cep" maxlength="9" pattern="[0-9- ]+$">
                </div>
            </div>
            <div class="Bairro-area">
                <div class="box-area">
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" id="bairro" maxlength="60">
                </div>
            </div>
            <div class="Endereco-area">
                <div class="box-area">
                    <label for="rua">Endereço</label>
                    <input type="text" name="rua" id="rua" required maxlength="60">
                </div>
            </div>
            <div class="Numero-area">
                <div class="box-area">
                    <label for="numero">Número:</label>
                    <input type="text" name="numero" id="numero" maxlength="10" pattern="[0-9]+$">
                </div>
            </div>
            <div class="Complemento-area">
                <div class="box-area">
                    <label for="complemento">Complemento:</label>
                    <input type="text" name="complemento" id="complemento" maxlength="120">
                </div>
            </div>
            <div class="Celular-area group">
                <div class="box-area">
                    <label for="celular">Celular:</label>
                    <input type="tel" name="celular" id="celular" maxlength="20" pattern="[0-9-()+ ]+$">
                </div>
                <div class="box-area">
                    <label for="fixo1">Telefone fixo:</label>
                    <input type="text" name="fixo1" id="fixo1" maxlength="20" pattern="[0-9-()+ ]+$">
                </div>
                
                <div class="box-area">
                    <label for="fixo2">Telefone secundario:</label>
                    <input type="text" name="fixo2" id="fixo2" maxlength="20" pattern="[0-9-()+ ]+$">
                </div>
            </div>

            <div class="Button-Area">
                <a href="index.php" id="b_index">Voltar ao Início</a>
                <a href="tabela_medico_POO.php" id="b_medicos">Ver medicos</a>
                <input type="reset" value="Limpar" id="b_limpar">
                <input type="submit" id="b_cadastrar">
            </div>
        </div>
    </form>
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
require_once 'medico_POO.php';

if(isset($_POST["nome"])){

$nome = addslashes($_POST["nome"]);
$rua = addslashes($_POST["rua"]);
$cpf = addslashes($_POST["cpf"]);


$status = addslashes($_POST["status"]);
$numero = addslashes($_POST["numero"]);

$bairro = addslashes($_POST["bairro"]);
$cep = addslashes($_POST["cep"]);
$complemento = addslashes($_POST["complemento"]);
$email = addslashes($_POST["email"]);
$celular = addslashes($_POST["celular"]);
$fixo1 = addslashes($_POST["fixo1"]);
$fixo2 = addslashes($_POST["fixo2"]);


$pessoa = new Medico("localhost","agencia_estetica","root","");
$pessoa->cadastrarPessoa($nome,$rua,$cpf,$status,$numero,$bairro,$cep,$complemento,$email,$celular,$fixo1,$fixo2);}



?>

    <script type="text/javascript">
        $("#cep").focusout(function () {
            $.ajax({
                url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',

                dataType: 'json',

                success: function (resposta) {

                    $("#rua").val(resposta.logradouro);
                    $("#complemento").val(resposta.complemento);
                    $("#bairro").val(resposta.bairro);
                    $("#cidade").val(resposta.localidade);
                    $("#numero").focus();
                }
            });
        });
    </script>
</body>

</html>