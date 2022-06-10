CREATE DATABASE db_metstars DEFAULT CHARACTER SET utf8 ;
USE db_metstars;

CREATE TABLE tb_candidato (
  cd_candidato INT NOT NULL AUTO_INCREMENT,
  cd_rm INT NOT NULL,
  nm_candidato VARCHAR(60) NOT NULL,
  nm_turma ENUM('1DS','1ADM','1MIN','1MAD','1MAM','2DS','2ADM','2MIN','2MAD','2MAM','3DS','3ADM','3MIN','3MAD','3MAM') NOT NULL,
  ds_representante_sala ENUM('representante','vice-representante') NULL,
  ds_proposta LONGTEXT NOT NULL,
  nr_voto INT NULL DEFAULT '0',
  PRIMARY KEY (cd_candidato)
);

CREATE TABLE tb_gremio (
  cd_gremio INT NOT NULL AUTO_INCREMENT,
  nm_chapa VARCHAR(60) NOT NULL,

  cd_rm_candidato1 INT NOT NULL,
  nm_candidato_chapa1 VARCHAR(60) NOT NULL,
  nm_turma1 ENUM('1DS','1ADM','1MIN','1MAD','1MAM','2DS','2ADM','2MIN','2MAD','2MAM','3DS','3ADM','3MIN','3MAD','3MAM') NOT NULL,
  ds_cargo_gremio1 ENUM('presidente','vice-presidente','tesoureiro','diretor de cultura','diretor de esporte','diretor de imprensa') NULL,
  ds_proposta1 LONGTEXT NOT NULL,

  cd_rm_candidato2 INT NOT NULL,
  nm_candidato_chapa2 VARCHAR(60) NOT NULL,
  nm_turma2 ENUM('1DS','1ADM','1MIN','1MAD','1MAM','2DS','2ADM','2MIN','2MAD','2MAM','3DS','3ADM','3MIN','3MAD','3MAM') NOT NULL,
  ds_cargo_gremio2 ENUM('presidente','vice-presidente','tesoureiro','diretor de cultura','diretor de esporte','diretor de imprensa') NULL,
  ds_proposta2 LONGTEXT NOT NULL,

  cd_rm_candidato3 INT NOT NULL,
  nm_candidato_chapa3 VARCHAR(60) NOT NULL,
  nm_turma3 ENUM('1DS','1ADM','1MIN','1MAD','1MAM','2DS','2ADM','2MIN','2MAD','2MAM','3DS','3ADM','3MIN','3MAD','3MAM') NOT NULL,
  ds_cargo_gremio3 ENUM('presidente','vice-presidente','tesoureiro','diretor de cultura','diretor de esporte','diretor de imprensa') NULL,
  ds_proposta3 LONGTEXT NOT NULL,

  cd_rm_candidato4 INT NOT NULL,
  nm_candidato_chapa4 VARCHAR(60) NOT NULL,
  nm_turma4 ENUM('1DS','1ADM','1MIN','1MAD','1MAM','2DS','2ADM','2MIN','2MAD','2MAM','3DS','3ADM','3MIN','3MAD','3MAM') NOT NULL,
  ds_cargo_gremio4 ENUM('presidente','vice-presidente','tesoureiro','diretor de cultura','diretor de esporte','diretor de imprensa') NULL,
  ds_proposta4 LONGTEXT NOT NULL,

  cd_rm_candidato5 INT NOT NULL,
  nm_candidato_chapa5 VARCHAR(60) NOT NULL,
  nm_turma5 ENUM('1DS','1ADM','1MIN','1MAD','1MAM','2DS','2ADM','2MIN','2MAD','2MAM','3DS','3ADM','3MIN','3MAD','3MAM') NOT NULL,
  ds_cargo_gremio5 ENUM('presidente','vice-presidente','tesoureiro','diretor de cultura','diretor de esporte','diretor de imprensa') NULL,
  ds_proposta5 LONGTEXT NOT NULL,

  cd_rm_candidato6 INT NOT NULL,
  nm_candidato_chapa6 VARCHAR(60) NOT NULL,
  nm_turma6 ENUM('1DS','1ADM','1MIN','1MAD','1MAM','2DS','2ADM','2MIN','2MAD','2MAM','3DS','3ADM','3MIN','3MAD','3MAM') NOT NULL,
  ds_cargo_gremio6 ENUM('presidente','vice-presidente','tesoureiro','diretor de cultura','diretor de esporte','diretor de imprensa') NULL,
  ds_proposta6 LONGTEXT NOT NULL,

  nr_voto INT NULL DEFAULT '0',
  PRIMARY KEY (cd_gremio)
);

CREATE TABLE tb_usuario (
  cd_usuario INT NOT NULL AUTO_INCREMENT,
  cd_rm INT NOT NULL,
  nm_turma ENUM('1DS','1ADM','1MIN','1MAD','1MAM','2DS','2ADM','2MIN','2MAD','2MAM','3DS','3ADM','3MIN','3MAD','3MAM') NOT NULL,
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
INSERT INTO tb_candidato (cd_candidato, cd_rm, nm_candidato, nm_turma, ds_representante_sala, ds_proposta) VALUES 
(null, 20010, "Jessica Moreira", "2DS", "vice-representante", "Posposta de campanha."),
(null, 20011, "Rafa Moreira", "1ADM", "representante", "Posposta de campanha.");

/* chapa */
INSERT INTO `tb_gremio`(`cd_gremio`, `nm_chapa`, `cd_rm_candidato1`, `nm_candidato_chapa1`, `nm_turma1`, `ds_cargo_gremio1`, `ds_proposta1`, `cd_rm_candidato2`, `nm_candidato_chapa2`, `nm_turma2`, `ds_cargo_gremio2`, `ds_proposta2`, `cd_rm_candidato3`, `nm_candidato_chapa3`, `nm_turma3`, `ds_cargo_gremio3`, `ds_proposta3`, `cd_rm_candidato4`, `nm_candidato_chapa4`, `nm_turma4`, `ds_cargo_gremio4`, `ds_proposta4`, `cd_rm_candidato5`, `nm_candidato_chapa5`, `nm_turma5`, `ds_cargo_gremio5`, `ds_proposta5`, `cd_rm_candidato6`, `nm_candidato_chapa6`, `nm_turma6`, `ds_cargo_gremio6`, `ds_proposta6`) 

VALUES (null,"Lua",
        20036,"Lucia Morais","2DS","presidente","Proposta de campanha.",
        23098,"Eduardo Caetano","2ADM","vice-presidente","Proposta de campanha.",
        29888,"Pedro Lucas","1MAM","tesoureiro","Proposta de campanha.",
        29497,"Julia Silva","3MIN","diretor de cultura","Proposta de campanha.",
        29949,"Tonio Souza","1ADM","diretor de esporte","Proposta de campanha.",
        29484,"Rebeca Leal","2MAD","diretor de imprensa","Proposta de campanha.");