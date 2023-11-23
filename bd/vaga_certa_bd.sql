CREATE DATABASE estacionamento;

USE estacionamento;

CREATE TABLE usuario(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL UNIQUE,
    cpf CHAR (14) NOT NULL UNIQUE,
    senha VARCHAR (20) NOT NULL,
    data_nasc VARCHAR(10) NOT NULL,
    telefone VARCHAR (16) NOT NULL, 
    placa_veiculo VARCHAR (7) NOT NULL,
    tipo_veiculo CHAR (1) NOT NULL,
    marca_veiculo VARCHAR (30) NOT NULL,
    modelo_veiculo VARCHAR (30) NOT NULL
);

CREATE TABLE pagamento(
	id_pagamento INT PRIMARY KEY AUTO_INCREMENT,
    tipo_cartao VARCHAR(50) NOT NULL,
	numero_cartao CHAR (16) NOT NULL,
    nome_cartao VARCHAR (50) NOT NULL,
    vencimento INT (4) NOT NULL,
    preco_valor DECIMAL (9, 2),
    cvv INT (3) NOT NULL
);

CREATE TABLE vaga(
	id_vaga INT PRIMARY KEY AUTO_INCREMENT,
    nome_vaga VARCHAR (20),
    tipo_vaga VARCHAR (50),
	valor DECIMAL (9,2)
);

CREATE TABLE agendamento(
	vaga VARCHAR(100) NOT NULL,
    data_agen DATE NOT NULL,
    horario DATETIME
);

CREATE TABLE veiculo(
	cod CHAR(1) PRIMARY KEY,
    categoria_veiculo VARCHAR (15) NOT NULL
);

INSERT INTO veiculo(cod, categoria_veiculo)
VALUES
('C', 'Carro'),
('M', 'Moto');

ALTER TABLE usuario ADD CONSTRAINT	fk_tipo_veiculo FOREIGN KEY (tipo_veiculo) REFERENCES veiculo (cod);

SELECT cod, categoria_veiculo 
FROM veiculo
INNER JOIN usuario ON usuario.tipo_veiculo = veiculo.cod;

CREATE TABLE administrador(
id_adm INT primary key auto_increment,
email VARCHAR (100) NOT NULL,
senha VARCHAR (100) NOT NULL
);

INSERT INTO administrador(email, senha) 
VALUES ('adm@adm.com', '123adm');

select * from administrador;

select * from usuario;