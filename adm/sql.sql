DROP TABLE IF EXISTS `pioneiro`.`agenda`;
CREATE TABLE  `pioneiro`.`agenda` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_evento` varchar(45) DEFAULT NULL,
  `horario` varchar(45) DEFAULT NULL,
  `titulo` blob DEFAULT NULL,
  `local_evento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `pioneiro`.`usuario`;
CREATE TABLE  `pioneiro`.`usuario` (
  `codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`codigo`)
);
insert into usuario (USUARIO, SENHA) values('midiamix','midiamix');