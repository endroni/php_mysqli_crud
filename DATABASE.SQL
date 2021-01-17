/* CRIA UM BANCO CHAMADO db_cinemas */
CREATE DATABASE db_cinemas;

/* Coloca o banco db_cinemas em USO */
USE db_cinemas;

/* Cria a tabela tbl_filmes com alguns atributos */
CREATE TABLE tbl_filmes
	( id_filme INT(5) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	nome_filme VARCHAR(30) );
    
    /* Observações */
    /* INT(6) - Tipo numérico com 6 algarismos */
    /* UNSIGNED - Usado para tipos de número, limita os dados armazenados a números positivos e zero */
    
    /* Inserindo um registro */
    INSERT INTO tbl_filmes (nome_filme) VALUES ("Donnie Darko"), ("Die hard");
    