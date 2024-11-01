-- Active: 1728679034835@@127.0.0.1@3306@parras_dev
create database parras_dev;


create table agents(
    num INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(20) NOT NULL,
    paternal_name VARCHAR(20) NOT NULL,
    maternal_name VARCHAR(20),
    email VARCHAR(50),
    phone VARCHAR(10)
);

create table sell_propierties(
    codigo VARCHAR(5) PRIMARY KEY not NULL,
    title VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description longtext,
    city VARCHAR(20),
    size VARCHAR(10),
    TIMESTAMP DATE,
    agent INT NOT NULL,
    Foreign Key (agent) REFERENCES agents (num)
);

insert into agents Values
(null, "Gaddiel", "Barrios", "Uriarte", "gaddielbarrios0925@gmail.com", "6641248317"),
(null, "Ismael", "Reyes", "Cordova", "mimabotchis@gmail.com", "6645234789");

INSERT INTO sell_propierties VALUES
("room1", "Casa en la Playa", 10000000.00, "Casa en la playa de Maldivas con vista a la playa y largas habitaciones", "Maldivas", "100mts^2", )