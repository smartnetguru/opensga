INSERT INTO `opensga_eseg`.`motivo_estado_alunos` (`id`, `name`) VALUES (NULL, 'Falta Documento do Servico Militar Obrigatorio'), (NULL, 'Falta Certificado de Habilitacoes e Documento de Servico Militar Obrigatorio');
----------------------------------------------------------------------------------------------
O insert de motivo tem que ser id 21 e 22 obrigatoriamente.
-------------------------------------------------------------------
update aluno_estados set data_mudanca = null where data_mudanca like '%0000-00-00%'
	-----------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`alunos` CHANGE COLUMN `certificado_nivel_anterior` `certificado_nivel_anterior` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `recenseamento_militar` `recenseamento_militar` INT(11) NULL DEFAULT NULL  ;

ALTER TABLE `opensga_eseg`.`aluno_estados` DROP COLUMN `funcionario_id` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
