INSERT INTO Bloco(nome) VALUES("Bloco I"),("Bloco II"),("Bloco III"),("NIC");

INSERT INTO Cargo(nome) VALUES("Aluno(a)"),("Professor(a)"),("Auxiliar de Docente"),("Coordenador(a)"),("Diretor(a)");

INSERT INTO Sala(nome, numero, fk_bloco) VALUES("Auditório 01", 115, 1),("Laboratório 01", 116, 1),("Laboratório 02", 114, 1),
("Laboratório 04", 216, 2),("Laboratório 05", 214, 2),("Laboratório 06", 212, 2);

INSERT INTO Equipamento(nome) VALUES("Televisão"),("Computador"),("Cadeira");

INSERT INTO Sala_Equipamento_Assoc(fk_sala, fk_equipamento, quantidade) VALUES(1, 1, 1),(1, 2, 1),(1, 3, 40);
INSERT INTO Sala_Equipamento_Assoc(fk_sala, fk_equipamento, quantidade) VALUES(2, 1, 1),(2, 2, 20),(2, 3, 20);
INSERT INTO Sala_Equipamento_Assoc(fk_sala, fk_equipamento, quantidade) VALUES(3, 1, 1),(3, 2, 20),(3, 3, 20);
INSERT INTO Sala_Equipamento_Assoc(fk_sala, fk_equipamento, quantidade) VALUES(4, 1, 2),(4, 2, 30),(4, 3, 40);
INSERT INTO Sala_Equipamento_Assoc(fk_sala, fk_equipamento, quantidade) VALUES(5, 1, 2),(5, 2, 30),(5, 3, 40);
INSERT INTO Sala_Equipamento_Assoc(fk_sala, fk_equipamento, quantidade) VALUES(6, 1, 2),(6, 2, 30),(6, 3, 40);