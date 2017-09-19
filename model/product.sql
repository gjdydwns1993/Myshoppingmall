create table product (
b_no int unsigned not null primary key auto_increment,
goodsName varchar(20) not null,
goodsOrigin varchar(15) not null,
mainGroup varchar(15) not null,
subGroup varchar(15) not null,
mainPhoto varchar(60) not null,
subPhoto varchar(120) not null,
goodsPrice varchar(15) not null,
goodsNumber varchar(15) not null,
goods_regist_day varchar(50),
visitNumber int
);
