CREATE DATABASE db_agenda_fatec;

USE db_agenda_fatec;

CREATE TABLE Cargo (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL UNIQUE,
    ativo TINYINT(1) NOT NULL DEFAULT 1

);

CREATE TABLE Bloco (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL UNIQUE,
    descricao VARCHAR(255) NULL DEFAULT "Nenhuma descrição.",
    ativo TINYINT(1) NOT NULL DEFAULT 1

);

CREATE TABLE Usuario (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha CHAR(32) NOT NULL, -- Utilização de MD5 para simular uma criptografia.
    administrador TINYINT(1) NOT NULL DEFAULT 0,
    ativo TINYINT(1) NOT NULL DEFAULT 1,

    fk_cargo INT NOT NULL,
    CONSTRAINT fk_cargo_usuario FOREIGN KEY(fk_cargo) REFERENCES Cargo(id)

);

CREATE TABLE Sala (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL UNIQUE,
    numero VARCHAR(5) NOT NULL UNIQUE,
    descricao VARCHAR(255) NULL DEFAULT "Nenhuma descrição.",
    status_atual ENUM("Disponível", "Em uso", "Indisponível") NOT NULL DEFAULT "Disponível",
    ativo TINYINT(1) NOT NULL DEFAULT 1,

    fk_bloco INT NOT NULL,
    CONSTRAINT fk_bloco_sala FOREIGN KEY(fk_bloco) REFERENCES Bloco(id)

);

CREATE TABLE Equipamento (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL UNIQUE,
    descricao VARCHAR(255) NULL DEFAULT "Nenhuma descrição.",
    ativo TINYINT(1) NOT NULL DEFAULT 1

);

CREATE TABLE Sala_Equipamento_Assoc (

    quantidade INT NOT NULL,

    fk_sala INT NOT NULL,
    CONSTRAINT fk_sala_item FOREIGN KEY(fk_sala) REFERENCES Sala(id),

    fk_equipamento INT NOT NULL,
    CONSTRAINT fk_equipamento_item FOREIGN KEY(fk_equipamento) REFERENCES Equipamento(id)

);

CREATE TABLE Agendamento (

    id INT AUTO_INCREMENT PRIMARY KEY,
    data_requisicao DATE NOT NULL, -- Data em que o registro foi criado.
    hora_requisicao TIME NOT NULL, -- Hora em que o registro foi criado.
    data_utilizacao DATE NOT NULL,
    hora_inicio_utilizacao TIME NOT NULL,
    hora_fim_utilizacao TIME NOT NULL,
    situacao ENUM("Pendente", "Aprovado", "Negado") NOT NULL DEFAULT "Pendente",

    fk_sala INT NOT NULL,
    CONSTRAINT fk_sala_agendamento FOREIGN KEY(fk_sala) REFERENCES Sala(id),
    
    fk_requisitor INT NOT NULL,
    CONSTRAINT fk_requisitor_agendamento FOREIGN KEY(fk_requisitor) REFERENCES Usuario(id),

    fk_aprovador INT NOT NULL,
    CONSTRAINT fk_aprovador_agendamento FOREIGN KEY(fk_aprovador) REFERENCES Usuario(id)

);

SHOW TABLES;