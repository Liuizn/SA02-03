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
        $vcpf= new Cpf();
            if ($nome != "" && $celular != "" && $email != "" && $cep != ""){
                            if ($vcpf->validarcpf($cpf) == true) {
                                $cmd = $this->pdo->prepare("SELECT id_medicos FROM medicos WHERE cpf = :e");
                                $cmd->bindValue(":e",$cpf);
                                $cmd->execute();

                                $ema = $this->pdo->prepare("SELECT id_medicos FROM medicos WHERE email_medicos = :em");
                                $ema->bindValue(":em",$email);
                                $ema->execute();

                                        if($cmd->rowCount() > 0) {
                                            echo "<br> CPF ja cadastrado";
                                            echo "<script>
                                            
                                            let el = document.getElementById('cpf');
                                            el.classList.add('input-f');
                                            
                                            </script>";
                                            return false;

                                        }else if ($ema->rowCount() > 0) {
                                            echo "<br> E-mail ja cadastrado";
                                            echo "<script>
                                            
                                            let el = document.getElementById('email');
                                            el.classList.add('input-f');
                                            
                                            </script>";
                                            return false;
                                        }
                                        else{
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
                                            return true;
                                            }





                            }
                else{
                    echo "<br> CPF INVALIDO";
                    echo "<script>
                    
                    let el = document.getElementById('cpf');
                    el.classList.add('input-f');
                    
                    </script>";
                    return false;
                }

            
        } else {
            if ($nome == "") {
                echo "<script>alert('Preencha o campo nome')</script>";
            }
            else if ($celular == ""){
                echo "<script>alert('Preencha o campo celular')</script>";
            }
            else if ($email == ""){
                echo "<script>alert('Preencha o campo email')</script>";
            }
            else if ($cep == ""){
                echo "<script>alert('Preencha o campo cep')</script>";
            }
            
            return false;
        }


    }

    public function buscar() {
        $res = array();
        $cmd = $this->pdo->query("SELECT nome_medicos,email_medicos,cpf,status_medico,celular_medicos,fixo1_medicos,fixo2_medicos,cep_medicos,bairro_medicos,rua_medicos,numero_medicos,complemento_medicos,data_registro_medicos,id_medicos FROM medicos;");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;

    }

    public function atualizar($id_medicos,$nome,$rua,$cpf,$status,$numero,$bairro,$cep,$complemento,$email,$celular,$fixo1,$fixo2){
        $vcpf= new Cpf();
        if ($nome != "" && $celular != "" && $email != "" && $cep != ""){
                    if ($vcpf->validarcpf($cpf) == true) {
                        $cmd = $this->pdo->prepare("UPDATE medicos
                        set nome_medicos = :n,
                            celular_medicos = :c,
                            fixo1_medicos = :f1,
                            fixo2_medicos = :f2,
                            email_medicos = :e,
                            cep_medicos = :cep,
                            bairro_medicos = :ba,
                            rua_medicos = :r,
                            numero_medicos = :num,
                            status_medico = :sm,
                            cpf = :cpf,
                            complemento_medicos = :comp where id_medicos = :id ");
                        $cmd->bindParam(":id",$id_medicos);
                        $cmd->bindParam(":n",$nome);
                        $cmd->bindParam(":c",$celular);
                        $cmd->bindParam(":f1",$fixo1);
                        $cmd->bindParam(":f2",$fixo2);
                        $cmd->bindParam(":e",$email);
                        $cmd->bindParam(":cep",$cep);
                        $cmd->bindParam(":ba",$bairro);
                        $cmd->bindParam(":r",$rua);
                        $cmd->bindParam(":num",$numero);
                        $cmd->bindParam(":sm",$status);
                        $cmd->bindParam(":cpf",$cpf);
                        $cmd->bindParam(":comp",$complemento);
                        $cmd->execute();
                    }
                    else{
                        echo "<br> CPF INVALIDO";
                        echo "<script>
                        
                        let el = document.getElementById('cpf');
                        el.classList.add('input-f');
                        
                        </script>";
                        return false;
                    }

        
        } else {
            if ($nome == "") {
                echo "<script>alert('Preencha o campo nome')</script>";
            }
            else if ($celular == ""){
                echo "<script>alert('Preencha o campo celular')</script>";
            }
            else if ($email == ""){
                echo "<script>alert('Preencha o campo email')</script>";
            }
            else if ($cep == ""){
                echo "<script>alert('Preencha o campo cep')</script>";
            }
            
            return false;
        }



                        
    
    header("location: tabela_medico_POO.php");
    }

    public function buscar1($id_1){
        $res = array();
        $cmd = $this->pdo-> prepare("SELECT * FROM medicos WHERE id_medicos = :id");
        $cmd->bindValue("id",$id_1);
        $cmd->execute();
        $res = $cmd -> fetch(PDO::FETCH_ASSOC);
        return $res;

    }

    public function buscarDadosPessoa($id){
        $res = array(); // Prevenindo erros, caso não venha nada do banco, teremos um array vazio. 
        $cmd = $this->pdo->prepare("SELECT * FROM medicos WHERE id_medicos = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        $res = $cmd->fetch(PDO::FETCH_ASSOC); // Para economizar memória
        return $res;
    }

    public function deletar($id){
        $cmd = $this->pdo->prepare("DELETE FROM medicos WHERE id_medicos = :id");
        $cmd ->bindParam(":id",$id);
        $cmd ->execute();

    }

    





}


class Cpf{
    public function validarcpf($cpf){
        $cpf = preg_replace('/\D/','',$cpf);


        if (strlen($cpf) != 11) {
            return false;
        }

        $cpfValidacao = substr($cpf,0,9);
        $cpfValidacao .= self::calculardigitoverificador($cpfValidacao);
        $cpfValidacao .= self::calculardigitoverificador($cpfValidacao);

        return $cpfValidacao == $cpf;
    }
    public function calculardigitoverificador($base){
        $tamanho = strlen($base);
        $multiplicador = $tamanho + 1;

        $soma = 0;

        for($i = 0; $i<$tamanho ;$i++){
            $soma += $base[$i] * $multiplicador;
            $multiplicador--;
        }


        $resto = $soma % 11;
        return $resto > 1 ? 11 - $resto : 0;
    }


}

?>