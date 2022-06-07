CREATE DATABASE db_metstars;
USE db_metstars;

CREATE TABLE tb_candidato (
  cd_candidato INT NOT NULL AUTO_INCREMENT,
  cd_rm INT NOT NULL,
  nm_candidato VARCHAR(60) NOT NULL,
  dt_nasc DATE NOT NULL,
  nm_turma VARCHAR(20) NOT NULL,
  ds_representante_sala ENUM('representante', 'vice-representante') NULL,
  ds_cargo_gremio ENUM('presidente', 'vice-presidente', 'tesoureiro', 'diretor de cultura', 'diretor de esporte', 'diretor de imprenssa') NULL,
  ds_proposta LONGTEXT NOT NULL,
  PRIMARY KEY (cd_candidato)
);

CREATE TABLE tb_usuario (
  cd_usuario INT NOT NULL AUTO_INCREMENT,
  cd_rm INT NOT NULL,
  nm_usuario VARCHAR(60) NOT NULL,
  ds_senha VARCHAR(20) NOT NULL,
  ds_cargo ENUM('Aluno', 'Coordenador'),
  PRIMARY KEY (cd_usuario)
);

CREATE TABLE tb_voto (
  cd_voto INT NOT NULL,
  qtd_voto INT NOT NULL,
  id_candidato INT NOT NULL,
  PRIMARY KEY (cd_voto),
  
  FOREIGN KEY (id_candidato) 
  REFERENCES tb_candidato (cd_candidato)
);


/* INSERT P/ TESTES */
INSERT INTO `tb_usuario`(`cd_usuario`, `cd_rm`, `nm_usuario`, `ds_senha`, `ds_cargo`) VALUES 
(null,20024,"Raylla",123,"Aluno"),
(null,20023,"Marcelo",123,"Coordenador");