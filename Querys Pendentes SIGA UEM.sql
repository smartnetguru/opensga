SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`alunos` DROP COLUMN `codigo_barras` , DROP COLUMN `numero_estudante_antigo` , ADD COLUMN `certificado_nivel_anterior` TINYINT(1) NULL DEFAULT NULL  AFTER `nota_conclusao` , ADD COLUMN `recenseamento_militar` TINYINT(1) NULL DEFAULT NULL  AFTER `certificado_nivel_anterior` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
---------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`candidaturas` ADD COLUMN `ano_lectivo_admissao` INT(11) NULL DEFAULT NULL  AFTER `codigo_curso_admitido_admissao` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

------------------------------------------------------------------------------------------------------
update candidaturas set ano_lectivo_admissao=2014 where year(created)=2014 and estado_candidatura_id=2
	-----------------------------------------------------
	SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`escola_nivel_medios` ADD COLUMN `codigo` VARCHAR(45) NULL DEFAULT NULL  AFTER `modified_by` , ADD COLUMN `codigo_admissao` INT(11) NULL DEFAULT NULL  AFTER `codigo` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

--------------------------------------------------------------
1096 passa a ser servico social
------------------------------------------