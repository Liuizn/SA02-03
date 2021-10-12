<?php

class Convenio
{
    public $pdo;
    public $cmd;

    public function __construct($host, $dbname, $user, $senha)
    {
        try {
            $this->pdo = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $senha);
        } catch (PDOException $e) {
            echo "Erro com banco de dados: " . $e->getMessage();
            exit();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            exit();
        }
    }
    public function buscarDados()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM convenios ORDER BY id_convenio ASC");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }


    public function cadastrarConvenio($nomef, $nomee, $nomec, $cnpj, $email, $homepage, $fixo1, $fixo2)
    {
        if ($nomef != "" && $nomee != "" && $nomec != "" && $cnpj != "" && $email != "") {
            $cmd = $this->pdo->prepare("INSERT INTO convenios(nome_fantasia,nome_empresa,nome_contato,cnpj_convenio,homepage,fixo1_convenio,fixo2_convenio,email_convenio) values (:nf,:ne,:nc,:cnpj,:hp,:f1,:f2,:e)");
            $cmd->bindParam(":nf", $nomef);
            $cmd->bindParam(":ne", $nomee);
            $cmd->bindParam(":nc", $nomec);
            $cmd->bindParam(":cnpj", $cnpj);
            $cmd->bindParam(":hp", $homepage);
            $cmd->bindParam(":f1", $fixo1);
            $cmd->bindParam(":f2", $fixo2);
            $cmd->bindParam(":e", $email);
            $cmd->execute();

            return true;
        } else {
            if ($nomef == "") {
                echo "<script>alert('Preencha o campo Nome Fantasia')</script>";
            } else if ($nomee == "") {
                echo "<script>alert('Preencha o campo Nome da Empresa')</script>";
            } else if ($nomec == "") {
                echo "<script>alert('Preencha o campo Nome do Contato')</script>";
            } else if ($cnpj == "") {
                echo "<script>alert('Preencha o campo CNPJ')</script>";
            } else if ($email == "") {
                echo "<script>alert('Preencha o campo Email')</script>";
            }

            return false;
        }
    }

    public function buscar()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT id_convenio, nome_fantasia, nome_empresa, cnpj_convenio, email_convenio, nome_contato, homepage, fixo1_convenio, fixo2_convenio, data_registro_convenio FROM convenios;");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function delete($id)
    {
        $cmd = $this->pdo->prepare("DELETE FROM convenios WHERE id_convenio = :id");
        $cmd->bindParam(":id", $id);
        $cmd->execute();
    }

    public function atualizarConvenio($id_convenio,$nomef, $nomee, $nomec, $cnpj, $email, $homepage, $fixo1, $fixo2)
    {
        if ($nomef != "" && $nomee != "" && $nomec != "" && $cnpj != "" && $email != "") {
            $cmd = $this->pdo->prepare("UPDATE convenios set nome_fantasia = :nf, nome_empresa = :ne, nome_contato = :nc, cnpj_convenio = :cnpj, homepage = :hp, fixo1_convenio = :f1, fixo2_convenio = :f2, email_convenio = :e where id_convenio = :id ");
            $cmd->bindParam(":id", $id_convenio);
            $cmd->bindParam(":nf", $nomef);
            $cmd->bindParam(":ne", $nomee);
            $cmd->bindParam(":nc", $nomec);
            $cmd->bindParam(":cnpj", $cnpj);
            $cmd->bindParam(":hp", $homepage);
            $cmd->bindParam(":f1", $fixo1);
            $cmd->bindParam(":f2", $fixo2);
            $cmd->bindParam(":e", $email);
            $cmd->execute();

            return true;
        } else {
            if ($nomef == "") {
                echo "<script>alert('Preencha o campo Nome Fantasia')</script>";
            } else if ($nomee == "") {
                echo "<script>alert('Preencha o campo Nome da Empresa')</script>";
            } else if ($nomec == "") {
                echo "<script>alert('Preencha o campo Nome do Contato')</script>";
            } else if ($cnpj == "") {
                echo "<script>alert('Preencha o campo CNPJ')</script>";
            } else if ($email == "") {
                echo "<script>alert('Preencha o campo Email')</script>";
            }

            return false;
        }
    }
}
