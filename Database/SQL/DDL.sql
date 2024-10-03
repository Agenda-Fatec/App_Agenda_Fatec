CREATE DATABASE db_agenda_fatec;

USE db_agenda_fatec;

CREATE TABLE Cargo (

    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL UNIQUE

);

CREATE TABLE Bloco (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL UNIQUE,
    observacoes VARCHAR(255) NULL DEFAULT "Nenhuma observação."

);

CREATE TABLE Usuario (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    ra VARCHAR(20),
    email VARCHAR(100) NOT NULL UNIQUE,
    senha CHAR(32) NOT NULL, -- Utilização de MD5 para simular uma criptografia.
    administrador BOOL NOT NULL DEFAULT False,

    fk_cargo INT NOT NULL,
    CONSTRAINT fk_cargo_usuario FOREIGN KEY(fk_cargo) REFERENCES Cargo(id)

);

CREATE TABLE Sala (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL UNIQUE,
    numero VARCHAR(5) NOT NULL UNIQUE,
    observacoes VARCHAR(255) NULL DEFAULT "Nenhuma observação.",

    fk_bloco INT NOT NULL,
    CONSTRAINT fk_bloco_sala FOREIGN KEY(fk_bloco) REFERENCES Bloco(id)

);

CREATE TABLE Equipamento (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL UNIQUE,
    observacoes VARCHAR(255) NULL DEFAULT "Nenhuma observação."

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
    situacao ENUM("Pendente", "Aprovado", "Recusado") NOT NULL DEFAULT "Pendente",

    fk_sala INT NOT NULL,
    CONSTRAINT fk_sala_agendamento FOREIGN KEY(fk_sala) REFERENCES Sala(id),
    
    fk_requisitor INT NOT NULL,
    CONSTRAINT fk_requisitor_agendamento FOREIGN KEY(fk_requisitor) REFERENCES Usuario(id),

    fk_aprovador INT NOT NULL,
    CONSTRAINT fk_aprovador_agendamento FOREIGN KEY(fk_aprovador) REFERENCES Usuario(id)

);