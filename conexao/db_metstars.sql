CREATE DATABASE db_metstars DEFAULT CHARACTER SET utf8 ;
USE db_metstars;

CREATE TABLE tb_candidato (
  cd_candidato INT NOT NULL AUTO_INCREMENT,
  cd_rm INT NOT NULL,
  nm_candidato VARCHAR(60) NOT NULL,
  dt_nasc DATE NOT NULL,
  nm_turma ENUM('1ds','1adm','1min','1mad','1mam','2ds','2adm','2min','2mad','2mam','3ds','3adm','3min','3mad','3mam') NOT NULL,
  ds_representante_sala ENUM('representante','vice-representante') NULL,
  ds_cargo_gremio ENUM('presidente','vice-presidente','tesoureiro','diretor de cultura','diretor de esporte','diretor de imprensa') NULL,
  ds_proposta LONGTEXT NOT NULL,
  nr_voto INT NULL DEFAULT '0',
  PRIMARY KEY (cd_candidato)
);

CREATE TABLE tb_usuario (
  cd_usuario INT NOT NULL AUTO_INCREMENT,
  cd_rm INT NOT NULL,
  nm_turma ENUM('1ds','1adm','1min','1mad','1mam','2ds','2adm','2min','2mad','2mam','3ds','3adm','3min','3mad','3mam') NOT NULL,
  nm_usuario VARCHAR(60) NOT NULL,
  ds_senha VARCHAR(20) NOT NULL,
  ds_cargo ENUM('aluno', 'coordenador'),
  PRIMARY KEY (cd_usuario)
);


/* INSERT P/ TESTES */

/* usuários */
INSERT INTO tb_usuario (cd_usuario, cd_rm, nm_usuario, ds_senha, ds_cargo) VALUES 
(null,20024,"Raylla",123,"aluno"),
(null,20023,"Marcelo",123,"coordenador");

/* candidatos */
INSERT INTO tb_candidato (cd_candidato, cd_rm, nm_candidato, dt_nasc, nm_turma, ds_representante_sala, ds_cargo_gremio, ds_proposta) VALUES 
(null, 20010, "Jessica Moreira", "2005-01-10", "2DS", null, "presidente", "Posposta de campanha."),
(null, 20011, "Rafa Moreira", "2003-07-14", "1ADM", "representante", null, "Posposta de campanha.");