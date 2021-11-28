CREATE TABLE inbox (
	cid int(11) not null AUTO_INCREMENT PRIMARY KEY,
    date datetime not null,
    name varchar(128) not null,
    email varchar(255) not null,
    subject TEXT not null,
    message TEXT not null
);