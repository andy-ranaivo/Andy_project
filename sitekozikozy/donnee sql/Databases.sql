CREATE DATABASE KOZIKOZY;
use KOZIKOZY;
CREATE TABLE formulaire (
	num int NOT NULL auto_increment,
	Pseudo varchar(10),
	mot_de_passe varchar(10),
	nom varchar(20),
	prenom varchar(20),
	age int,
	adresse varchar(20),
	Situation varchar(20),
	PRIMARY KEY  (num)
); 
