    CREATE DATABASE vaga_certa;

    USE vaga_certa;

    CREATE TABLE usuario(
        id_usuario INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR (100) NOT NULL,
        email VARCHAR (100) NOT NULL UNIQUE,
        cpf CHAR (14) NOT NULL UNIQUE,
        senha VARCHAR (255) NOT NULL,
        data_nasc VARCHAR(10) NOT NULL,
        telefone VARCHAR (16) NOT NULL, 
        placa_veiculo VARCHAR (7) NOT NULL,
        tipo_veiculo CHAR (1) NOT NULL,
        marca_veiculo VARCHAR (30) NOT NULL,
        modelo_veiculo VARCHAR (30) NOT NULL,
        sexo VARCHAR(30) NOT NULL
    );
    
    
    CREATE TABLE pagamento(
        id_pagamento INT PRIMARY KEY AUTO_INCREMENT,
        id_card_pagamento INT,
        preco_valor decimal(9,2)
    );

    CREATE TABLE cartao(
        id_cartao INT PRIMARY KEY AUTO_INCREMENT,
        numero_cartao CHAR(20),
        nome_cartao varchar(50), 
        validade_mes varchar(2), 
        validade_ano varchar(4),
        id_usuario INT,
        cvv int(3)
    );

    ALTER TABLE pagamento ADD CONSTRAINT fk_id_card FOREIGN KEY (id_card_pagamento) REFERENCES cartao (id_cartao);
    ALTER TABLE cartao ADD CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario);

    CREATE TABLE estacionamento(
        id_local INT PRIMARY KEY AUTO_INCREMENT,
        nome_estacionamento VARCHAR (50),
        localizacao VARCHAR (50),
        vagas_disponiveis INT (3),
        id_usuario INT
    );

	ALTER TABLE estacionamento ADD CONSTRAINT fk_id_estacionamento_user FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario);

    CREATE TABLE estacionamento_cliente(
        id_cliente INT NOT NULL,
        id_estacionamento INT NOT NULL,
        save BOOLEAN
    );
    
    
    SELECT * FROM usuario;

    ALTER TABLE estacionamento_cliente ADD CONSTRAINT fk_cliente FOREIGN KEY (id_cliente) REFERENCES usuario (id_usuario);
    ALTER TABLE estacionamento_cliente ADD CONSTRAINT fk_estacionamento FOREIGN KEY (id_estacionamento) REFERENCES estacionamento (id_local);

    SELECT id_cliente, id_estacionamento
    FROM estacionamento_cliente
    INNER JOIN usuario ON usuario.id_usuario = estacionamento_cliente.id_cliente 
    INNER JOIN estacionamento ON estacionamento.id_local = estacionamento_cliente.id_estacionamento;

    INSERT INTO estacionamento(nome_estacionamento, localizacao, vagas_disponiveis)
    VALUES
    ('Baratie', 'East - Blue', 23);

    CREATE TABLE vaga(
        id_vaga INT PRIMARY KEY AUTO_INCREMENT,
        nome_vaga VARCHAR (20),
        tipo_vaga VARCHAR (50),
        valor DECIMAL (9,2),
        ocupado BOOLEAN
    );
select * from vaga;

INSERT INTO vaga (nome_vaga, tipo_vaga) VALUES ("VAGA - 1","Normal");

INSERT INTO vaga (nome_vaga, tipo_vaga) VALUES ("VAGA - 2","Normal");

select * from usuario;

CREATE TABLE agendamento(
	id_agendamento INT PRIMARY KEY AUTO_INCREMENT,
	vaga VARCHAR(100) NOT NULL,
	data_agend DATE NOT NULL,
	id_usuario INT,
	horario_inicio TIME,
	horario_final TIME
    );
    
describe agendamento;

ALTER TABLE agendamento ADD CONSTRAINT fk_agenda_user FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario);

select * from agendamento;

    CREATE TABLE veiculo(
	cod CHAR(1) PRIMARY KEY,
	categoria_veiculo VARCHAR (15) NOT NULL
    );

    INSERT INTO veiculo(cod, categoria_veiculo)
    VALUES
    ('C', 'Carro'),
    ('M', 'Moto');

    CREATE TABLE administrador(
    id_adm INT primary key auto_increment,
    email VARCHAR (100) NOT NULL,
    senha VARCHAR (100) NOT NULL
    );

    INSERT INTO administrador(email, senha) 
    VALUES ('adm@adm.com', '123adm');

    CREATE TABLE relatorio_vagas( 
    id_relatorio_vagas INT PRIMARY KEY AUTO_INCREMENT, 
    id_vaga INT, 
    id_veiculo CHAR(1), 
    placa_veiculo VARCHAR(20), 
    modelo_veiculo VARCHAR(50), 
    data_agendamento DATE, 
    hora_agendamento TIME 
    );
    
    select * from usuario;
    select * from cartao;
    
    ALTER TABLE relatorio_vagas ADD CONSTRAINT fk_id_vaga FOREIGN KEY (id_vaga) REFERENCES vaga (id_vaga); 
    ALTER TABLE relatorio_vagas ADD CONSTRAINT fk_id_veiculo FOREIGN KEY (id_veiculo) REFERENCES veiculo (cod);