

INSERT INTO aluno (nome, data_nascimento, sexo,
                   genero, cpf, cidade, estado,
                   bairro, rua, cep)
VALUES ('João da Silva', '1997-08-12', 'M', 'Masc',
        '8967562398', 'São Paulo', 'SP', 'Alameda dos Anjos',
        'José da Silva', '14125000');

INSERT INTO curso (nome) VALUES ('Informática');

INSERT INTO turma (id_curso, descricao) VALUES (1, '1º Módulo');

INSERT INTO matricula (id_curso, id_aluno, data_matricula) VALUES (1, 1, '2019-09-15');