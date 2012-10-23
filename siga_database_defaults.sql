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
(8, 'FAX', 'fax'),
(9, 'Cidade em Que Mora em Tempo de Aulas', 'morada_aulas_cidade'),
(10, 'Província em que mora em tempo de aulas', 'morada_aulas_provincia');
