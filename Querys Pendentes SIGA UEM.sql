update matriculas set user_id=1 where user_id is null;

---------------------------------------------------------------------------------------
INSERT INTO  `opensga_eseg`.`estadoinscricaos` (
`id` ,
`name`
)
VALUES (
NULL ,  'Activa'
), (
NULL ,  'Admitido ao Exame'
), (
NULL ,  'Admitido a Recorrencia'
), (
NULL ,  'Dispensado'
), (
NULL ,  'Aprovado no Exame'
), (
NULL ,  'Aprovado na Recorrencia'
), (
NULL ,  'Excluido'
), (
NULL ,  'Desistido'
), (
NULL ,  'Anulado'
), (
NULL ,  'Reprovado'
), (
NULL ,  'Reprovado por Faltas'
);
------------------------------------------------------------------------------------------
update inscricaos set data = null where data='0000-00-00'
	-----------------------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `opensga_eseg`.`estadoinscricaos` RENAME TO  `opensga_eseg`.`estado_inscricaos` ;

ALTER TABLE `opensga_eseg`.`inscricaos` CHANGE COLUMN `estadoinscricao_id` `estado_inscricao_id` INT(11) NULL DEFAULT NULL  ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

--------------------------------------------------------------------------------------------------------------------------------------
INSERT INTO  `opensga_eseg`.`estado_inscricaos` (
`id` ,
`name`
)
VALUES (
NULL ,  'Reprovado na Recorrencia'
);

---------------------------------------------------------------------------------------------------------------------------------------------
delete from inscricaos where turma_id is null
------------------------------------------------------------------------------------------------------------------------------------------
delete from inscricaos where turma_id not in (select id from turmas)
--------------------------------------------------------------------------------------------------
INSERT INTO `opensga_eseg`.`tipo_inscricaos` (`id`, `name`) VALUES (NULL, 'Frequencia'), (NULL, 'Avaliacoes'), (NULL, 'Exame Final');
-------------------------------------------------------------------------------------------------------------------------------------
INSERT INTO `opensga_eseg`.`estado_inscricaos` (`id`, `name`) VALUES (NULL, 'Aprovado Sem Exames');
----------------------------------------------------------------------------------------------------------------------