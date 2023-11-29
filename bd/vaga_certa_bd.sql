CREATE DATABASE vaga_certa;

USE vaga_certa;

CREATE TABLE usuario(
	id_usuario INT PRIMARY KEY AUTO_INCREMENT,
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

CREATE TABLE estacionamento(
	id_local INT PRIMARY KEY AUTO_INCREMENT,
    nome_estacionamento VARCHAR (50),
    localizacao VARCHAR (50),
    vagas_disponiveis INT (3)
);

CREATE TABLE estacionamento_cliente(
	id_cliente INT NOT NULL,
    id_estacionamento INT NOT NULL,
    save BOOLEAN
);
ALTER TABLE estacionamento_cliente ADD CONSTRAINT fk_cliente FOREIGN KEY (id_cliente) REFERENCES usuario (id_usuario);
ALTER TABLE estacionamento_cliente ADD CONSTRAINT fk_estacionamento FOREIGN KEY (id_estacionamento) REFERENCES estacionamento (id_local);

SELECT id_cliente, id_estacionamento
FROM estacionamento_cliente
INNER JOIN usuario ON usuario.id_usuario = estacionamento_cliente.id_cliente 
INNER JOIN estacionamento ON estacionamento.id_local = estacionamento_cliente.id_estacionamento;

INSERT INTO estacionamento(nome_estacionamento, localizacao, vagas_disponiveis)
VALUES
('Baratie', 'East - Blue', 23),
('Wano', 'Grand - Line', 30),
('Tech Vitoria', 'Vitoria', 50);

SELECT * FROM usuario;

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

select * from estacionamento;