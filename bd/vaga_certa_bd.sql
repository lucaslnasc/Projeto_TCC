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