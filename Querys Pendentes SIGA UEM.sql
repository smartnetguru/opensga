SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`alunos` CHANGE COLUMN `parentesco_encarregado` `parentesco_encarregado` TINYINT(3) UNSIGNED NULL DEFAULT NULL  ;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`grau_parentescos` (
  `id` TINYINT(3) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
---------------------------------------------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`alunos` 
  ADD CONSTRAINT `alunos_encarregados_parentescos_fk`
  FOREIGN KEY (`parentesco_encarregado` )
  REFERENCES `opensga_eseg`.`grau_parentescos` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `alunos_encarregados_parentescos_fk_idx` (`parentesco_encarregado` ASC) ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
----------------------------------------------------------------------------------------------
Actualizar Distritos
--------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`bairros` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL DEFAULT NULL ,
  `cidade_id` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `bairros_cidades_fk_idx` (`cidade_id` ASC) ,
  CONSTRAINT `bairros_cidades_fk`
    FOREIGN KEY (`cidade_id` )
    REFERENCES `opensga_eseg`.`cidades` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`ruas` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `cidade_id` INT(11) NULL DEFAULT NULL ,
  `name` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `ruas_cidades_idx` (`cidade_id` ASC) ,
  CONSTRAINT `ruas_cidades`
    FOREIGN KEY (`cidade_id` )
    REFERENCES `opensga_eseg`.`cidades` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
----------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`alunos` DROP COLUMN `observacoes` , DROP COLUMN `turno_ingresso` , DROP COLUMN `regime_ingresso_id` , DROP COLUMN `lista` , DROP COLUMN `estadoentidade_id` , DROP COLUMN `detalhes` , DROP COLUMN `doclocalemissao` , DROP COLUMN `docdataemissao` , DROP COLUMN `empresasite` , DROP COLUMN `empresaemail` , DROP COLUMN `empresatelefone` , DROP COLUMN `empresacontacto` , DROP COLUMN `empresamorada` , CHANGE COLUMN `etrabalhador` `trabalhador` TINYINT(1) NULL DEFAULT NULL  , CHANGE COLUMN `areatrabalho_id` `area_trabalho_id` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `empresanome` `instituicao_id` VARCHAR(45) NULL DEFAULT NULL  , CHANGE COLUMN `codigo_exame_admissao` `numero_candidato` VARCHAR(45) NULL DEFAULT NULL  
, DROP INDEX `Estadoentidade` ;

ALTER TABLE `opensga_eseg`.`entidades` DROP COLUMN `biografia` , CHANGE COLUMN `localidade_morada` `bairro_morada` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `documento_identificacao_num` `documento_identificacao_numero` VARCHAR(45) NULL DEFAULT NULL  , CHANGE COLUMN `documento_identificacao_data` `documento_identificacao_data_emissao` DATE NULL DEFAULT NULL  , CHANGE COLUMN `estadoentidade_id` `estado_entidade_id` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `avenida_rua_bairro` `avenida_rua` VARCHAR(255) NULL DEFAULT NULL  , CHANGE COLUMN `avenida_rua_bairro_ferias` `avenida_rua_ferias` VARCHAR(255) NULL DEFAULT NULL  ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
----------------------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`entidades` CHANGE COLUMN `avenida_rua` `avenida_rua` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `avenida_rua_ferias` `avenida_rua_ferias` INT(11) NULL DEFAULT NULL  ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

----------------------------------------------------------------------------------------------------------
UPDATE entidades SET data_nascimento = NULL WHERE data_nascimento LIKE  '%0000-00-00%'
--------------------------------------------------------------------------------------------------
update entidades set documento_identificacao_data_emissao = null where documento_identificacao_data_emissao like '%0000-00-00%'
  -------------------------------------------------------------------------------------------------------------------------