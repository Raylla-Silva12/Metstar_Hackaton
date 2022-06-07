CREATE DATABASE db_metstars;
USE db_metstars;

CREATE TABLE tb_candidato (
  cd_candidato INT NOT NULL AUTO_INCREMENT,
  cd_rm INT NOT NULL,
  nm_candidato VARCHAR(60) NOT NULL,
  dt_nasc DATE NOT NULL,
  nm_turma VARCHAR(20) NOT NULL,
  ds_proposta LONGTEXT NOT NULL,
  ds_representante_sala ENUM('representante', 'vice-representante') NULL,
  ds_cargo_gremio ENUM('presidente', 'vice-presidente', 'tesoureiro', 'diretor de cultura', 'diretor de esporte', 'diretor de imprenssa') NULL,
  PRIMARY KEY (cd_candidato)
);

CREATE TABLE tb_admin (
  cd_admin INT NOT NULL AUTO_INCREMENT,
  cd_rm INT NOT NULL,
  nm_admin VARCHAR(60) NOT NULL,
  ds_senha VARCHAR(20) NOT NULL,
  PRIMARY KEY (cd_admin)
);

CREATE TABLE tb_voto (
  cd_voto INT NOT NULL,
  qtd_voto INT NOT NULL,
  id_candidato INT NOT NULL,
  PRIMARY KEY (cd_voto),
  
  FOREIGN KEY (id_candidato) 
  REFERENCES tb_candidato (cd_candidato)
);
