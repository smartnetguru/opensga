SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`estado_objectos` CHANGE COLUMN `id` `id` TINYINT(3) UNSIGNED NOT NULL AUTO_INCREMENT  ;

ALTER TABLE `opensga_eseg`.`groups` ADD COLUMN `estado_objecto_id` TINYINT(3) UNSIGNED NULL DEFAULT 1  AFTER `modified_by` , 
  ADD CONSTRAINT `groups_estado_objectos_fk`
  FOREIGN KEY (`estado_objecto_id` )
  REFERENCES `opensga_eseg`.`estado_objectos` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `groups_estado_objectos_fk_idx` (`estado_objecto_id` ASC) ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

----------------------------------------------------------------------------
INSERT INTO `opensga_eseg`.`estado_objectos` (`id`, `name`) VALUES (NULL, 'Activo'), (NULL, 'Inactivo'), (NULL, 'Removido');
-----------------------------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`groups` DROP FOREIGN KEY `groups_estado_objectos_fk` ;

ALTER TABLE `opensga_eseg`.`groups` CHANGE COLUMN `estado_objecto_id` `estado_objecto_id` TINYINT(3) UNSIGNED NOT NULL DEFAULT 1  , 
  ADD CONSTRAINT `groups_estado_objectos_fk`
  FOREIGN KEY (`estado_objecto_id` )
  REFERENCES `opensga_eseg`.`estado_objectos` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
------------------------------------------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`unidade_organicas` ADD COLUMN `codigo_interno` VARCHAR(45) NULL DEFAULT NULL  AFTER `codigo` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
-------------------------------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`opensga_sessions` (
  `id` VARCHAR(255) NOT NULL ,
  `data` TEXT NULL DEFAULT NULL ,
  `expires` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
update unidade_organicas set codigo_interno='faculdade' where tipo_unidade_organica_id = 1
---------------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`candidaturas` CHANGE COLUMN `estado_matricula_id` `estado_matricula_id` INT(11) NULL DEFAULT 5  ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
------------------------------------------------------------------------------------------------------------------------------------------
update unidade_organicas set codigo_interno='faculdade' where tipo_unidade_organica_id = 1
-------------------------------------------------------------------------------------------------------------------------------------