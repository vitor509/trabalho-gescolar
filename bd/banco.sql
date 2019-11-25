create database gescolar;

use gescolar;

create table aluno (
    id int auto_increment,
    nome varchar(255),
    data_nascimento date,
    sexo char(1),
    genero varchar(255),
    cpf char(11),
    cidade varchar(100),
    estado char(2),
    bairro varchar(150),
    rua varchar(100),
    cep char(8),
    primary key (id)
);

create table curso (
    id int auto_increment,
    nome varchar(150),
    primary key (id)
);

create table turma (
    id int auto_increment,
    id_curso int,
    descricao varchar(50),
    primary key (id),
    foreign key (id_curso) references curso (id)
);

create table matricula (
    id_turma int,
    id_aluno int,
    data_matricula date,
    PRIMARY KEY (id_turma, id_aluno),
    FOREIGN KEY (id_turma) REFERENCES turma(id),
    FOREIGN KEY (id_aluno) REFERENCES aluno(id)  
);