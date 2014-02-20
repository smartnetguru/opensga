Mudar Universidade Eduardo Mondlane pra tipo unidade 4
-------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

TRUNCATE `bairros`;
TRUNCATE `escola_nivel_medios`;
TRUNCATE `ruas`;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
----------------------------------------------------
update aluno_nivel_medios set escola_nivel_medio_id =124 where escola_nivel_medio_id=0;
	----------------------------------------------------------------------------------
	SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`cooperacao_acordos` DROP FOREIGN KEY `cooperacao_acordos_instituicaos` ;

ALTER TABLE `opensga_eseg`.`cursos` ADD COLUMN `estado_objecto_id` INT(11) NULL DEFAULT NULL  AFTER `codigo_admissao` , ADD COLUMN `ano_criacao` YEAR NULL DEFAULT NULL  AFTER `estado_objecto_id` ;

ALTER TABLE `opensga_eseg`.`cooperacao_acordos` DROP COLUMN `instituicao_id` 
, DROP INDEX `cooperacao_acordos_instituicaos_idx` ;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`cooperacao_acordo_instituicaos` (
  `id` INT(11) NOT NULL ,
  `cooperacao_acordo_id` INT(11) NULL DEFAULT NULL ,
  `instituicao_id` INT(11) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `created_by` INT(11) NULL DEFAULT NULL ,
  `modified_by` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `cooperacao_acordos_instituicaos_cooperacao_fk_idx` (`cooperacao_acordo_id` ASC) ,
  INDEX `cooperacao_acordos_instituicaos_instituicaos_fk_idx` (`instituicao_id` ASC) ,
  CONSTRAINT `cooperacao_acordos_instituicaos_cooperacao_fk`
    FOREIGN KEY (`cooperacao_acordo_id` )
    REFERENCES `opensga_eseg`.`cooperacao_acordos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `cooperacao_acordos_instituicaos_instituicaos_fk`
    FOREIGN KEY (`instituicao_id` )
    REFERENCES `opensga_eseg`.`instituicaos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
---------------------------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`mudanca_cursos` DROP COLUMN `funcionario_id` ;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`roles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(100) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `created_by` INT(11) NULL DEFAULT NULL ,
  `modified_by` INT(11) NULL DEFAULT NULL ,
  `estado_objecto_id` TINYINT(4) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`user_roles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `user_id` INT(11) NULL DEFAULT NULL ,
  `role_id` INT(11) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `created_by` INT(11) NULL DEFAULT NULL ,
  `modified_by` INT(11) NULL DEFAULT NULL ,
  `estado_objecto_id` TINYINT(4) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`unidade_organica_roles` (
  `id` INT(11) NOT NULL ,
  `unidade_organica_id` INT(11) NULL DEFAULT NULL ,
  `role_id` INT(11) NULL DEFAULT NULL ,
  `created_by` INT(11) NULL DEFAULT NULL ,
  `modified_by` INT(11) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `estado_objecto_id` TINYINT(4) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`funcao_profissional_roles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `funcao_profissional_id` INT(11) NULL DEFAULT NULL ,
  `role_id` INT(11) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `created_by` INT(11) NULL DEFAULT NULL ,
  `modified_by` INT(11) NULL DEFAULT NULL ,
  `estado_objecto_id` TINYINT(4) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`group_roles` (
  `id` INT(11) NOT NULL ,
  `group_id` INT(11) NULL DEFAULT NULL ,
  `role_id` INT(11) NULL DEFAULT NULL ,
  `created` DATETIME NULL DEFAULT NULL ,
  `modified` DATETIME NULL DEFAULT NULL ,
  `created_by` INT(11) NULL DEFAULT NULL ,
  `modified_by` INT(11) NULL DEFAULT NULL ,
  `estado_objecto_id` TINYINT(4) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `group_roles_groups_idx` (`group_id` ASC) ,
  CONSTRAINT `group_roles_groups`
    FOREIGN KEY (`group_id` )
    REFERENCES `opensga_eseg`.`groups` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
-----------------------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`unidade_organica_roles` CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT  ;

ALTER TABLE `opensga_eseg`.`group_roles` CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT  ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
----------------------------------------------------------------------------------------------------------------------------