create database a1;

create table itens (
	id int not null auto_increment,
	group_id int,
	material_id int,
	item_qty decimal(10,9),
	item_dim_1 varchar(10),
	item_dim_2 varchar(10),
	item_dim_3 varchar (10),
	item_class varchar(20),
    primary key (id)
);

SELECT * FROM itens LIMIT 0, 16000;
