To get started you need to install xampp prgram and run the following SQL commands:

CREATE DATABASE misc;
GRANT ALL ON misc.* TO 'fred'@'localhost' IDENTIFIED BY 'zap';
GRANT ALL ON misc.* TO 'fred'@'127.0.0.1' IDENTIFIED BY 'zap';

USE misc; (Or select misc in phpMyAdmin)


CREATE TABLE autos (
  autos_id INTEGER NOT NULL KEY AUTO_INCREMENT,
  make VARCHAR(255),
  model VARCHAR(255),
  year INTEGER,
  mileage INTEGER
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


