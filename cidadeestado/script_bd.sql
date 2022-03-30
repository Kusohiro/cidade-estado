create schema `cidade/estado`;

create table `estado`(
`id` int auto_increment not null,
`estado` varchar(45),
`sigla` varchar(2),
primary key (`id`)
);

create table `cidade`(
`id` int auto_increment not null,
`id_estado` int,
`nome` varchar(45),
primary key (`id`),
foreign key (`id_estado`) references estado (id)
)