CREATE DATABASE bearmoney;

CREATE TABLE profile(
cod int auto_increment NOT NULL,
descr varchar(50) NOT NULL,
valid int NOT NULL DEFAULT 1,
PRIMARY KEY(cod)
);

INSERT INTO profile (descr) VALUES ('admin')

CREATE TABLE bear(
cod varchar(36) NOT NULL,
cod_profile int NOT NULL,
login varchar(50) NOT NULL,
first_name varchar(50) NOT NULL,
last_name varchar(255) NOT NULL,
pw varchar(32) NOT NULL,
email varchar(320) NOT NULL,
PRIMARY KEY(cod),
FOREIGN KEY (cod_profile) REFERENCES profile(cod)
);

CREATE TRIGGER trg_users
	BEFORE INSERT ON bear
	FOR EACH ROW
	SET NEW.cod = uuid();
	
INSERT INTO bear(cod_profile,login,first_name,last_name,pw,email) VALUES (1,'bearcubic','Bear','Cubic',md5('metroide'),'bearcubic@gmail.com');

CREATE TABLE categoria(
cod int AUTO_INCREMENT NOT NULL,
tipo int NOT NULL,
name varchar(255) NOT NULL,
valid int default(1),
PRIMARY KEY(cod)
)

INSERT INTO categoria(tipo,name) VALUES (1,'SALÁRIO');
INSERT INTO categoria(tipo,name) VALUES (1,'CRÉDITO');

INSERT INTO categoria(tipo,name) VALUES (2,'ALIMENTAÇÃO/REFEIÇÃO');
INSERT INTO categoria(tipo,name) VALUES (2,'VESTUÁRIO');
INSERT INTO categoria(tipo,name) VALUES (2,'BELEZA');
INSERT INTO categoria(tipo,name) VALUES (2,'MERCADO');
INSERT INTO categoria(tipo,name) VALUES (2,'ELETRODOMÉSTICOS');
INSERT INTO categoria(tipo,name) VALUES (2,'EDUCAÇÃO');
INSERT INTO categoria(tipo,name) VALUES (2,'MOBILIÁRIO');
INSERT INTO categoria(tipo,name) VALUES (2,'COMBUSTÍVEL');
INSERT INTO categoria(tipo,name) VALUES (2,'TRANSPORTE');
INSERT INTO categoria(tipo,name) VALUES (2,'MECÂNICA/REVISÃO(AUTOMÓVEL)');
INSERT INTO categoria(tipo,name) VALUES (2,'TELEFONIA');
INSERT INTO categoria(tipo,name) VALUES (2,'INTERNET');
INSERT INTO categoria(tipo,name) VALUES (2,'DIVERSÃO/LAZER');
INSERT INTO categoria(tipo,name) VALUES (2,'CONTAS/BOLETOS/');
INSERT INTO categoria(tipo,name) VALUES (2,'PASSAGENS/VIAGENS');
INSERT INTO categoria(tipo,name) VALUES (2,'HOTELARIA');


