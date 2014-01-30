INSERT INTO `opensga_eseg`.`provincias` (`id`, `codigo`, `name`, `paise_id`) VALUES (NULL, NULL, 'Desconhecido', '152'), (NULL, NULL, 'Estrangeiro', '1');
------------------------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`cidades` CHANGE COLUMN `paise_id` `pais_id` INT(11) NULL DEFAULT NULL  , ADD COLUMN `codigo_admissao` INT(11) NULL DEFAULT NULL  AFTER `pais_id` ;

ALTER TABLE `opensga_eseg`.`cursos` ADD COLUMN `codigo_admissao` INT(11) NULL DEFAULT NULL  AFTER `modified_by` ;

ALTER TABLE `opensga_eseg`.`paises` ADD COLUMN `codigo_admissao` INT(11) NULL DEFAULT NULL  AFTER `continente_id` ;

ALTER TABLE `opensga_eseg`.`provincias` CHANGE COLUMN `paise_id` `pais_id` INT(11) NULL DEFAULT NULL  , ADD COLUMN `codigo_admissao` INT(11) NULL DEFAULT NULL  AFTER `pais_id` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
------------------------------------------------------------------------------------------------------------

Ver questao do curso de geografia,Educacao Ambiental,Animacao Turistica,Informacao Turistica, Ciencias de Informacao,Cartografia e pesquisa Geologica, Geologia Aplicada, Geologia Marinha,,Economia Agraria,Filosofia(Todos)
-------------------------------------------------------------------------------------

Cadastrar Curso de Lingua de Sinais, Psicologia Social e Comunitaria, Psicologia das organizacoes,Psicologia escolar e de necessidade,Psicologia das organizacoes,Agroeconomia,Meteorologia Pos-Laboral,Gestao Comercial
----------------------------------------------------------------------------
Gestao de Negocios  - Junho
-----------------------------------------------------------------------
Comunicacao e extensao Rural, Gestao de Empresas(Gestao e Lideranca)?
------------------------------------------------------------------------

INSERT INTO `opensga_eseg`.`documento_identificacaos` (`id`, `name`) VALUES (NULL, 'Talao de Bilhete de Identificacao'), (NULL, 'Cartao de Eleitor'), (NULL, 'Carta de Conducao'), ('','Talao de Carta de Conducao');
---------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`candidaturas` CHANGE COLUMN `numero_candidato` `numero_candidato` INT(11) NULL DEFAULT NULL  , ADD COLUMN `codigo_escola_admissao` INT(11) NULL DEFAULT NULL  AFTER `estado_candidatura_id` , ADD COLUMN `nome_escola_nivel_medio` VARCHAR(255) NULL DEFAULT NULL  AFTER `codigo_escola_admissao` , ADD COLUMN `curso_opcao1` INT(11) NULL DEFAULT NULL  AFTER `nome_escola_nivel_medio` , ADD COLUMN `curso_opcao2` INT(11) NULL DEFAULT NULL  AFTER `curso_opcao1` 
, ADD UNIQUE INDEX `numero_candidato_UNIQUE` (`numero_candidato` ASC) 
, ADD UNIQUE INDEX `numero_estudante_UNIQUE` (`numero_estudante` ASC) ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
-----------------------------------------------------------------------------------------------------------------
20135031
2
20134085
2
-----------------------------------------------------------------------------------------

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`bolsa_bolsas` CHANGE COLUMN `bolsa_candidatura_id` `bolsa_pedido_id` INT(11) NULL DEFAULT NULL  ;

ALTER TABLE `opensga_eseg`.`bolsa_candidaturas` DROP COLUMN `bolsa_tipo_candidatura_id` , DROP COLUMN `entidade_id` , CHANGE COLUMN `data_candidatura` `data_pedido` DATE NULL DEFAULT NULL  
, DROP INDEX `bolsa_candidaturas_tipo_candidaturas` 
, DROP INDEX `bolsa_candidaturas_entidades` , RENAME TO  `opensga_eseg`.`bolsa_pedidos` ;

ALTER TABLE `opensga_eseg`.`bolsa_motivo_indeferimentos` CHANGE COLUMN `name` `name` VARCHAR(255) NULL DEFAULT NULL  , CHANGE COLUMN `alinea` `alinea` VARCHAR(5) NULL DEFAULT NULL  , ADD COLUMN `codigo` INT(11) NULL DEFAULT NULL  AFTER `alinea` , ADD COLUMN `created_by` INT(11) NULL DEFAULT NULL  AFTER `codigo` , ADD COLUMN `modified_by` INT(11) NULL DEFAULT NULL  AFTER `created_by` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
---------------------------------------------------------------------------------------------