<?php
Class Medico{
    public $pdo;
    public $cmd;

    public function __construct($host,$dbname,$user,$senha) {
        try {
            $this->pdo = new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$senha);
        } catch (PDOException $e) {
            echo "Erro com banco de dados: ". $e->getMessage();
            exit();
        } catch(Exception $e){
            echo "Error: ". $e->getMessage();
            exit();
        } 
    }
    public function buscarDados(){
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM medicos_teste ORDER BY medicos_teste DESC");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function cadastrarPessoa($nome,$rua,$cpf,$status,$numero,$bairro,$cep,$complemento,$email,$celular,$fixo1,$fixo2) {
            $cmd = $this->pdo->prepare("INSERT INTO medicos 
            (nome_medicos,rua_medicos,cpf,status_medico,numero_medicos,bairro_medicos,cep_medicos,complemento_medicos,email_medicos,celular_medicos,fixo1_medicos,fixo2_medicos) 
            VALUES 
            (:n,:r,:c,:sm,:cm,:b,:cep,:com,:e,:tel,:fix1,:fix2)");
            $cmd->bindValue(":n",$nome);
            $cmd->bindValue(":r",$rua);
            $cmd->bindValue(":c",$cpf);
            $cmd->bindValue(":sm",$status);
            $cmd->bindValue(":cm",$numero);
            $cmd->bindValue(":b",$bairro);
            $cmd->bindValue(":cep",$cep);
            $cmd->bindValue(":com",$complemento);
            $cmd->bindValue(":e",$email);
            $cmd->bindValue(":tel",$celular);
            $cmd->bindValue(":fix1",$fixo1);
            $cmd->bindValue(":fix2",$fixo2);
            $cmd->execute();
    }






}

?>