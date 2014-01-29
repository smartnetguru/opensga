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
  INSERT INTO `opensga_eseg`.`grau_parentescos` (`id`, `name`) VALUES (NULL, 'Pai'), (NULL, 'Mae'), (NULL, 'Irmao'), (NULL, 'Familiar'), (NULL, 'Amigo'), (NULL, 'Outro');
  -----------------------------------------------------------------------------------------------------------------------------------
  SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`candidaturas` ADD COLUMN `nome_pai` VARCHAR(100) NULL DEFAULT NULL  AFTER `turno_id` , ADD COLUMN `nome_mae` VARCHAR(100) NULL DEFAULT NULL  AFTER `nome_pai` ;

ALTER TABLE `opensga_eseg`.`matriculas` CHANGE COLUMN `codigo` `codigo` VARCHAR(25) NULL DEFAULT NULL  , CHANGE COLUMN `regimelectivo_id` `regime_lectivo_id` INT(11) NULL DEFAULT NULL  ;

ALTER TABLE `opensga_eseg`.`historico_cursos` DROP COLUMN `funcionario_id` , CHANGE COLUMN `planoestudo_id` `plano_estudo_id` INT(11) NULL DEFAULT NULL  ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
----------------------------------------------------------------------------------------------------------
update historico_cursos set data_conclusao = null where data_conclusao like '%0000-00-00%'
  -----------------------------------------------------------------------------------------
  SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`candidaturas` DROP COLUMN `ano_conclusao` , DROP COLUMN `local_id_normal` , DROP COLUMN `funcionario_id` , DROP COLUMN `tipo_resultado_exame_admissao_id` , DROP COLUMN `entidade_id` , CHANGE COLUMN `ano_conclusao_nivel_medio` `ano_conclusao` YEAR NULL DEFAULT NULL  , CHANGE COLUMN `provincia_id` `provincia_conclusao` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `pais` `pais_conclusao` INT(11) NULL DEFAULT NULL  , ADD COLUMN `data_nascimento` DATE NULL DEFAULT NULL  AFTER `nome_mae` , ADD COLUMN `pais_nascimento` INT(11) NULL DEFAULT NULL  AFTER `data_nascimento` , ADD COLUMN `provincia_nascimento` INT(11) NULL DEFAULT NULL  AFTER `pais_nascimento` , ADD COLUMN `cidade_nascimento` INT(11) NULL DEFAULT NULL  AFTER `provincia_nascimento` , ADD COLUMN `nota_conclusao` DECIMAL(10,2) NULL DEFAULT NULL  AFTER `cidade_nascimento` , ADD COLUMN `pais_morada` INT(11) NULL DEFAULT NULL  AFTER `nota_conclusao` , ADD COLUMN `provincia_morada` INT(11) NULL DEFAULT NULL  AFTER `pais_morada` , ADD COLUMN `cidade_morada` INT(11) NULL DEFAULT NULL  AFTER `provincia_morada` , ADD COLUMN `bairro_morada` INT(11) NULL DEFAULT NULL  AFTER `cidade_morada` , ADD COLUMN `avenida_rua_morada` INT(11) NULL DEFAULT NULL  AFTER `bairro_morada` , ADD COLUMN `caixa_postal_morada` VARCHAR(45) NULL DEFAULT NULL  AFTER `avenida_rua_morada` , ADD COLUMN `quarteirao_morada` VARCHAR(45) NULL DEFAULT NULL  AFTER `caixa_postal_morada` , ADD COLUMN `telemovel` VARCHAR(45) NULL DEFAULT NULL  AFTER `quarteirao_morada` , ADD COLUMN `email` VARCHAR(255) NULL DEFAULT NULL  AFTER `telemovel` , ADD COLUMN `nome_emergencia` VARCHAR(255) NULL DEFAULT NULL  AFTER `email` , ADD COLUMN `telemovel_emergencia` VARCHAR(45) NULL DEFAULT NULL  AFTER `nome_emergencia` , ADD COLUMN `grau_parentesco` INT(11) NULL DEFAULT NULL  AFTER `telemovel_emergencia` , ADD COLUMN `documento_identificacao_id` INT(11) NULL DEFAULT NULL  AFTER `grau_parentesco` , ADD COLUMN `documento_identificacao_numero` VARCHAR(45) NULL DEFAULT NULL  AFTER `documento_identificacao_id` , ADD COLUMN `documento_identificacao_data_emissao` DATE NULL DEFAULT NULL  AFTER `documento_identificacao_numero` , ADD COLUMN `documento_identificacao_local_emissao` VARCHAR(100) NULL DEFAULT NULL  AFTER `documento_identificacao_data_emissao` , ADD COLUMN `documento_identificacao_data_validade` DATE NULL DEFAULT NULL  AFTER `documento_identificacao_local_emissao` , ADD COLUMN `cidade_conclusao` INT(11) NULL DEFAULT NULL  AFTER `documento_identificacao_data_validade` , ADD COLUMN `estado_candidatura_id` INT(11) NULL DEFAULT NULL  AFTER `cidade_conclusao` ;

ALTER TABLE `opensga_eseg`.`matriculas` DROP COLUMN `regime_lectivo_id` , ADD COLUMN `regime_lectivo_id` INT(11) NULL DEFAULT NULL  AFTER `tipo_matricula_id` ;

ALTER TABLE `opensga_eseg`.`historico_cursos` DROP COLUMN `plano_estudo_id` , ADD COLUMN `plano_estudo_id` INT(11) NULL DEFAULT NULL  AFTER `funcionario_confirmador` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
------------------------------------------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`turmas` CHANGE COLUMN `anocurricular` `ano_curricular` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `semestrecurricular` `semestre_curricular` INT(11) NULL DEFAULT NULL  ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
------------------------------------------------------------------------------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`avaliacaos` CHANGE COLUMN `tipoavaliacao_id` `tipo_avaliacao_id` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `pontos` `nota` DECIMAL(5,2) NULL DEFAULT NULL  , CHANGE COLUMN `turmatipoavaliacao_id` `turma_tipo_avaliacao_id` INT(11) NULL DEFAULT NULL  , ADD COLUMN `aluno_id` INT(11) NULL DEFAULT NULL  AFTER `modified_by` , ADD COLUMN `estado_avaliacao_id` INT(11) NULL DEFAULT NULL  AFTER `aluno_id` ;

ALTER TABLE `opensga_eseg`.`turmas` DROP COLUMN `anosemestrecurr` , CHANGE COLUMN `nummaximo` `capacidade_maxima` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `numaprovados` `total_aprovados` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `mediaturma` `media_turma` FLOAT(11) NULL DEFAULT NULL  , CHANGE COLUMN `numreprovados` `total_reprovados` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `semestrelectivo_id` `semestre_lectivo_id` INT(11) NULL DEFAULT NULL  ;

ALTER TABLE `opensga_eseg`.`turmatipoavaliacaos` DROP COLUMN `data` , CHANGE COLUMN `tipoavaliacao_id` `tipo_avaliacao_id` INT(11) NULL DEFAULT NULL  , CHANGE COLUMN `scanpauta` `scan_pauta` VARCHAR(255) NULL DEFAULT NULL  , RENAME TO  `opensga_eseg`.`turma_tipo_avaliacaos` ;

CREATE  TABLE IF NOT EXISTS `opensga_eseg`.`estado_avaliacaos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
-----------------------------------------------------------------------------------------------------------------------------------------------------------
INSERT INTO `opensga_eseg`.`estado_docente_turmas` (`id`, `name`) VALUES (NULL, 'Activo'), (NULL, 'Transferido'), (NULL, 'Demitido'), (NULL, 'Substituido');
----------------------------------------------------------------------------------------------------------------------------------------------------------------
INSERT INTO `opensga_eseg`.`tipo_docente_turmas` (`id`, `name`) VALUES (NULL, 'Regente'), (NULL, 'Assistente'), (NULL, 'Monitor');
----------------------------------------------------------------------------------------------------------------------------------------------------------------
update turmas set estado_turma_id =1 where estado_turma_id is null
  ------------------------------------------------------------------------