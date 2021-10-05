create database if not exists agencia_estetica;
use agencia_estetica;
create table if not exists pacientes(
id_pacientes int(6) not null auto_increment primary key,
nome varchar(50) not null,
celular varchar(20) not null,
fixo1 varchar(20),
fixo2 varchar(20),
email varchar(60) not null,
cep varchar(9) not null,
bairro varchar(60),
rua varchar(60),
numero varchar(10),
complemento varchar(120),
data_registro date DEFAULT CURRENT_TIMESTAMP
);

create table if not exists medicos(
id_medicos int(6) not null auto_increment primary key,
nome_medicos varchar(50) not null,
celular_medicos varchar(20) not null,
fixo1_medicos varchar(20),
fixo2_medicos varchar(20),
email_medicos varchar(60) not null,
cep_medicos varchar(9) not null,
bairro_medicos varchar(60),
rua_medicos varchar(60),
numero_medicos varchar(10),
complemento_medicos varchar(120),
status_medico boolean,
data_registro_medicos date DEFAULT CURRENT_TIMESTAMP
);

create table if not exists procedimentos(
id_procedimento int(6) not null auto_increment primary key,
nome_procedimento varchar(50) not null,
valor_procedimento varchar(20) not null,
genero varchar(20),
data_procedimento date DEFAULT CURRENT_TIMESTAMP
);

create table if not exists convenios(
id_convenio int(6) not null auto_increment primary key,
nome_fantasia varchar(50) not null,
nome_empresa varchar(50) not null,
nome_contato varchar(50) not null,
cnpj_convenio varchar(18) not null,
fixo1_convenio varchar(20),
fixo2_convenio varchar(20),
email_convenio varchar(60) not null,
homepage varchar(60) not null,
data_registro_convenio date DEFAULT CURRENT_TIMESTAMP
);

# select * from pacientes;
# select * from medicos;
# drop database agencia_estetica;