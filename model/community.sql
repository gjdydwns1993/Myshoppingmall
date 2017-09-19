create table community (
b_no int unsigned not null primary key auto_increment,
b_id varchar(15) not null,
b_passwd varchar(50) not null,
b_title varchar(50) not null,
b_content varchar(500) not null,
b_filePath varchar(50) not null,
b_fileName varchar(20) not null,
b_regist_day varchar(50),
visitNumber int
);
