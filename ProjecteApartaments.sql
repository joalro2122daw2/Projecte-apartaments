use mysql;
create user 'admin'@'localhost' identified by "Fjeclot22@";
create database ProjecteApartaments;
use ProjecteApartaments;
grant all privileges on ProjecteApartaments.* to 'admin'@'localhost';
