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

create table if not exists procedimentos(
id_procedimento int(6) not null auto_increment primary key,
nome_procedimento varchar(50) not null,
valor_procedimento varchar(20) not null,
genero varchar(20),
data_procedimento date DEFAULT CURRENT_TIMESTAMP
);

desc pacientes;
INSERT INTO pacientes
VALUES (default, 'carlos', 123123, 1123123123,123123123,'carlinhps@',12831823,'cam[ps','aasasjsda','123123','casinha',default);

select * from pacientes;




