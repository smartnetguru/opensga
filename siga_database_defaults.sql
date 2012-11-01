--Estado dos Objectos
INSERT INTO `estado_objectos` (`id`, `name`) VALUES
(1, 'Activo'),
(2, 'Inactivo'),
(3, 'Removido'),
(4, 'Cancelado'),
(5, 'Pendente'),
(6, 'Aprovado'),
(7, 'Reprovado');

--
-- Dumping data for table `tipo_contactos`
--

INSERT INTO `tipo_contactos` (`id`, `name`, `codigo`) VALUES
(1, 'Email', 'email'),
(2, 'Telefone Celular Principal', 'telemovel_principal'),
(3, 'Telefone Celular Alternativo', 'telemovel_alternativo'),
(4, 'Telefone Fixo', 'telefone'),
(5, 'Rua onde mora em tempo de aulas', 'morada_aulas_rua'),
(6, 'Bairro em que mora em tempo de aulas', 'morada_aulas_bairro'),
(7, 'Quarterão  em que mora em tempo de aulas', 'morada_aulas_quarterao'),
(8, 'Caixa Postal', 'caixa_postal'),
(9, 'Cidade em Que Mora em Tempo de Aulas', 'morada_aulas_cidade'),
(10, 'Província em que mora em tempo de aulas', 'morada_aulas_provincia');
(11, 'País em que mora em tempo de aulas', 'morada_aulas_provincia');
(12, 'Cidade em que mora em tempo de férias', 'morada_aulas_provincia');
(13, 'Província em que mora em tempo de férias', 'morada_aulas_provincia');
(14, 'País em que mora em tempo de férias', 'morada_aulas_provincia');
(15, 'Telefone Celular do encarregado', 'morada_aulas_provincia');
(16, 'Telefone Fixo do encarregado', 'morada_aulas_provincia');
(17, 'Telefone Celular para casos de emergencia', 'morada_aulas_provincia');
(18, 'Telefone Fixo para casos de emergência', 'morada_aulas_provincia');
(19, 'Telefone Fixo do encarregado', 'morada_aulas_provincia');

-- Tipo de Unidades Organicas
INSERT INTO `opensga_eseg`.`tipo_unidade_organicas` (`id`, `name`, `created`, `modified`, `created_by`, `modified_by`) VALUES (NULL, 'Faculdade', NULL, NULL, NULL, NULL), (NULL, 'Departamento', NULL, NULL, NULL, NULL), (NULL, 'Secção', NULL, NULL, NULL, NULL);