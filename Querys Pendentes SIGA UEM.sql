
Mudar Para Tipo de Requisicao de Cartao de Estudante.
---------------------------------------------------------------------------------------------------------------------
Email Duplicado  usselina.muianga@uem.ac.mz
-----------------------------------------------------------------------------------------------------------------
INSERT INTO `opensga_eseg`.`tipo_contactos` (`id`, `name`, `codigo`) VALUES (NULL, 'Pessoa para Casos de Emergencia', 'nome_emergencia'), (NULL, 'Contacto da pessoa para casos de emergencia', 'telemovel_emergencia'), (NULL, 'Grau de Parentesco da pessoa para casos de emergencia', 'parentesco_encarregado');
----------------------------------------------------------------------------------------------------------------------------

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`aluno_nivel_medios` DROP FOREIGN KEY `aluno_nivel_medios_aluno_id` ;

ALTER TABLE `opensga_eseg`.`cursos` DROP FOREIGN KEY `cursos_unidade_organicas_fk` ;

ALTER TABLE `opensga_eseg`.`funcionarios` DROP FOREIGN KEY `funcionarios_funcao_funcionarios` , DROP FOREIGN KEY `funcionarios_unidade_organicas` , DROP FOREIGN KEY `funcionarios_entidades` ;

ALTER TABLE `opensga_eseg`.`groups` DROP FOREIGN KEY `groups_estado_objectos_fk` ;

ALTER TABLE `opensga_eseg`.`precedencias` DROP FOREIGN KEY `precedencias_estado_objectos_fk` , DROP FOREIGN KEY `precedencias_disciplinas_fk` , DROP FOREIGN KEY `disciplinas_precedencias_precedente_fk` ;

ALTER TABLE `opensga_eseg`.`candidato_alumnis` DROP FOREIGN KEY `c_alumnis_unidades_organicas` , DROP FOREIGN KEY `c_alumnis_cursos` , DROP FOREIGN KEY `c_alumnis_cidade_nascimentos` , DROP FOREIGN KEY `c_alumnis_cidades_moradas` ;

ALTER TABLE `opensga_eseg`.`alumnis` DROP FOREIGN KEY `alumnis_entidades` , DROP FOREIGN KEY `alumnis_alunos` ;

ALTER TABLE `opensga_eseg`.`cooperacao_acordo_unidade_organicas` DROP FOREIGN KEY `cooperacao_acordo_unidade_unidade` ;

ALTER TABLE `opensga_eseg`.`disciplina_docentes` DROP FOREIGN KEY `disciplinas_docentes_estado_objectos` , DROP FOREIGN KEY `disciplinas_docentes_disciplinas_fk` ;

ALTER TABLE `opensga_eseg`.`bairros` DROP FOREIGN KEY `bairros_cidades_fk` ;

ALTER TABLE `opensga_eseg`.`aluno_nivel_medios` DROP FOREIGN KEY `aluno_nivel_medio_escola_nivel_medio_id` ;

ALTER TABLE `opensga_eseg`.`aluno_nivel_medios` 
  ADD CONSTRAINT `aluno_nivel_medio_escola_nivel_medio_id`
  FOREIGN KEY (`escola_nivel_medio_id` )
  REFERENCES `opensga_eseg`.`escola_nivel_medios` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `opensga_eseg`.`messages` DROP COLUMN `estado` , DROP COLUMN `datafim` , DROP COLUMN `datainicio` , ADD COLUMN `datainicio` DATETIME NULL DEFAULT NULL  AFTER `mensagem` , ADD COLUMN `datafim` DATETIME NOT NULL  AFTER `datainicio` , ADD COLUMN `estado` INT(11) NOT NULL  AFTER `datafim` ;

ALTER TABLE `opensga_eseg`.`candidato_alumnis` DROP FOREIGN KEY `c_alumnis_generos` , DROP FOREIGN KEY `c_alumnis_pais_nascimentos` , DROP FOREIGN KEY `c_alumnis_provincia_nascimentos` , DROP FOREIGN KEY `c_alumnis_graus_academicos` ;

ALTER TABLE `opensga_eseg`.`candidato_alumnis` 
  ADD CONSTRAINT `c_alumnis_generos`
  FOREIGN KEY (`genero_id` )
  REFERENCES `opensga_eseg`.`generos` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `c_alumnis_pais_nascimentos`
  FOREIGN KEY (`pais_nascimento` )
  REFERENCES `opensga_eseg`.`paises` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `c_alumnis_provincia_nascimentos`
  FOREIGN KEY (`provincia_nascimento` )
  REFERENCES `opensga_eseg`.`provincias` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION, 
  ADD CONSTRAINT `c_alumnis_graus_academicos`
  FOREIGN KEY (`grau_academico_id` )
  REFERENCES `opensga_eseg`.`grau_academicos` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
-------------------------------------------------------------------------------------------