create table member (
b_no int unsigned not null primary key auto_increment,
b_id varchar(15) not null,
b_passwd varchar(50) not null,
b_name varchar(50) not null,
b_nick varchar(50) not null,
b_sex varchar(50) not null,
b_phone_number varchar(50) not null,
b_regist_day varchar(50),
b_address varchar(50)
);
