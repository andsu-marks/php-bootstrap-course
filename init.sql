create table estoque (
	id_estoque int AUTO_INCREMENT,
	nroproduto int not null,
	nomeproduto varchar(200) not null,
	categoria varchar(100) not null,
	quantidade int not null,
	fornecedor varchar(100) not null,
	PRIMARY KEY(id_estoque) 
)