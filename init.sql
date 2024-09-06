CREATE TABLE IF NOT EXISTS estoque (
	id_estoque int AUTO_INCREMENT,
	nroproduto int not null,
	nomeproduto varchar(200) not null,
	categoria varchar(100) not null,
	quantidade int not null,
	fornecedor varchar(100) not null,
	PRIMARY KEY(id_estoque) 
);

CREATE TABLE IF NOT EXISTS categoria (
	id_categoria int AUTO_INCREMENT,
	categoria varchar(200) not null,
	PRIMARY KEY (id_categoria)
);

CREATE TABLE IF NOT EXISTS fornecedor (
	id_fornecedor int AUTO_INCREMENT,
	fornecedor varchar(200) not null,
	PRIMARY KEY (id_fornecedor)
);

CREATE TABLE IF NOT EXISTS usuarios (
	id int AUTO_INCREMENT,
	nome varchar(200) not null,
	email varchar(250) not null,
	senha varchar(40) not null, 
	nivel int(2) not null,
	status varchar(50) not null,
	PRIMARY KEY(id)
);

INSERT INTO usuarios (nome, email, senha, nivel, status) VALUES ('Ramos', 'ramos@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'Ativo');