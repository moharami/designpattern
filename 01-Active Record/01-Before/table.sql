create table Users(
   id INT NOT NULL AUTO_INCREMENT,
   first_name VARCHAR(100) NOT NULL,
   last_name VARCHAR(40) NOT NULL,
   company VARCHAR(40) NOT NULL,
   email VARCHAR(40) NOT NULL,
   PRIMARY KEY ( id )
);