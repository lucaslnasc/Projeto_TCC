CREATE DATABASE estacionamento;

USE estacionamento;

CREATE TABLE cadastro(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL,
    email VARCHAR (100) NOT NULL UNIQUE,
    cpf CHAR (11) NOT NULL UNIQUE,
    senha VARCHAR (20) NOT NULL,
    data_nasc DATE NOT NULL,
    telefone VARCHAR (14) NOT NULL, 
    placa_veiculo VARCHAR (7) NOT NULL,
    tipo_veiculo VARCHAR (15) NOT NULL
);

CREATE TABLE pagamento(
	id_pagamento INT PRIMARY KEY AUTO_INCREMENT,
    tipo_cartao VARCHAR(50) NOT NULL,
	numero_cartao CHAR (16) NOT NULL,
    nome_cartao VARCHAR (50) NOT NULL,
    vencimento INT (4) NOT NULL,
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

ALTER TABLE cadastro ADD CONSTRAINT	fk_veiculo FOREIGN KEY (tipo_veiculo) REFERENCES veiculo(cod);

INSERT INTO cadastro(nome, email, cpf, senha, data_nasc, telefone, placa_veiculo, tipo_veiculo)
VALUES
('Lucas de Lima', 'lucaslnascimento090@gmail.com', '16868214790' ,'lucas2006', '2006-01-15' ,'27999943806', 'R8Z9OP5', 'C');

SELECT * FROM cadastro;