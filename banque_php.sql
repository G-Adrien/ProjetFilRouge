-- supprimer la base de données si une basse de données nommée "banque_php" exsiste
DROP DATABASE IF EXISTS banque_php;

-- creer une basse de données nommé "banque_php"
CREATE DATABASE banque_php;

-- supprimer utilisateur "banque_php" si existant 
DROP USER IF EXISTS banque_php;


--creer un utilisateur "banque_php" avec droit restraint 
CREATE USER 'banque_php'@'localhost' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON 'banque_php' . * TO 'banque_php'@'localhost';
FLUSH PRIVILEGES;





-- creer les tables

-- CREATE TABLE account
-- (





-- )