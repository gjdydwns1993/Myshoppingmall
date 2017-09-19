create table history(
  b_no int unsigned not null primary key auto_increment,
  b_id varchar(15) not null,
  goodsName varchar(20) not null,
  goodsPrice varchar(20) not null,
  buy_regist_day varchar(50)
);
