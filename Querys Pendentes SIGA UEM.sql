SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`avaliacaos` DROP COLUMN `turma_id` , DROP COLUMN `funcionario_id` , DROP COLUMN `inscricao_id` , DROP COLUMN `tipo_avaliacao_id` ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-------------------------------------------------------------------------------------------

INSERT INTO `opensga_eseg`.`estado_turmas` (`id`, `name`) VALUES (NULL, 'Activa'), (NULL, 'Fechada'), (NULL, 'Cancelada');
--------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`avaliacaos` ADD COLUMN `detalhes` VARCHAR(255) NULL DEFAULT NULL  AFTER `estado_avaliacao_id` ;

ALTER TABLE `opensga_eseg`.`messages` DROP COLUMN `mensagem` , CHANGE COLUMN `datainicio` `data_envio` DATETIME NULL DEFAULT NULL  , CHANGE COLUMN `datafim` `data_leitura` DATETIME NOT NULL  , CHANGE COLUMN `estado` `estado_objecto_id` INT(11) NOT NULL  , ADD COLUMN `data_delete` VARCHAR(45) NULL DEFAULT NULL  AFTER `estado_objecto_id` , ADD COLUMN `created` DATETIME NULL DEFAULT NULL  AFTER `data_delete` , ADD COLUMN `modified` DATETIME NULL DEFAULT NULL  AFTER `created` , ADD COLUMN `created_by` INT(11) NULL DEFAULT NULL  AFTER `modified` , ADD COLUMN `modified_by` INT(11) NULL DEFAULT NULL  AFTER `created_by` ;

ALTER TABLE `opensga_eseg`.`turmas` ADD COLUMN `pauta_path` VARCHAR(255) NULL DEFAULT NULL  AFTER `unidade_organica_id` ;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`message_texts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `message_id` INT(11) NOT NULL ,
  `texto` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`aulas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `turma_id` INT(11) NULL DEFAULT NULL ,
  `docente_id` INT(11) NULL DEFAULT NULL ,
  `tema_aula` VARCHAR(255) NULL DEFAULT NULL ,
  `inicio_aula` DATETIME NULL DEFAULT NULL ,
  `fim_aula` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`resumo_aulas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `aula_id` INT(11) NULL DEFAULT NULL ,
  `resumo` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`topico_aulas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `aula_id` INT(11) NULL DEFAULT NULL ,
  `topico` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`presenca_aulas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `aula_id` INT(11) NULL DEFAULT NULL ,
  `aluno_id` INT(11) NULL DEFAULT NULL ,
  `estado_presenca` TINYINT(1) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-----------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`historico_cursos` ADD COLUMN `motivo_termino_curso_id` INT(11) NULL DEFAULT NULL  AFTER `plano_estudo_id` ;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`motivo_termino_cursos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
---------------------------------------------------------------------------------------
INSERT INTO `opensga_eseg`.`motivo_termino_cursos` (`id`, `name`) VALUES (NULL, 'Concluiu'), (NULL, 'Mudou de Curso'), (NULL, 'Cancelou Matricula'), (NULL, 'Desistiu'), (NULL, 'Expulso'), (NULL, 'Fora do Tempo de Estudos');
-------------------------------------------------------------------------------------------