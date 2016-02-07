<?php
    $this->Html->addCrumb('OpenSGA', '/');
    $this->Html->addCrumb('Página Inicial', '/');
    $group_id = $this->Session->read('Auth.User.group_id');
?>

<div class="container_12">

    <div class="grid_12">
        <div class="block-border">
            <div class="block-content">
                <ul class="shortcut-list">
                    <li>
                        <?php
                            echo $this->Html->link($this->Html->image('icons/student/Student-Icon.png') . __("Cursos em Funcionamento"),
                                    ['controller' => 'cursos', 'action' => 'report_cursos_activos'],
                                    ['escape' => false]);
                        ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Matricular Candidato"),
                                ['controller' => 'alunos', 'action' => 'busca_candidato'], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Matricular Candidato"),
                                ['controller' => 'alunos', 'action' => 'busca_candidato'], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Renovações de Matrícula"),
                                ['controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'renovar_matricula'],
                                ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Reingressos"),
                                ['controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'reingresso'],
                                ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Mudança de Curso"),
                                ['controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'mudanca_curso'],
                                ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Mudança de Status de Estudante"),
                                ['controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'alterar_status'],
                                ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Entrega de Certificado"),
                                [
                                        'controller' => 'alunos',
                                        'action'     => 'pesquisa_aluno_action',
                                        'recebe_certificado_nivel_anterior',
                                ], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Conclusão de Curso"),
                                ['controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'concluir_nivel'],
                                ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Alterar Nome de Candidato"),
                                [
                                        'controller' => 'alunos',
                                        'action'     => 'busca_candidatos_action',
                                        'alterar_nome_candidato',
                                ], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Requisicoes"),
                                [
                                        'plugin'     => 'requisicoes',
                                        'controller' => 'requisicoes_pedidos',
                                        'action'     => 'nova_requisicao',
                                ], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Cerimónias de Graduação"),
                                ['plugin' => false, 'controller' => 'cerimonia_graduacaos', 'action' => 'index'],
                                ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Inscrição para Graduação"),
                                [
                                        'plugin'     => false,
                                        'controller' => 'alunos',
                                        'action'     => 'pesquisa_aluno_action',
                                        'cerimonia_graduacao',
                                ], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Enviar Cartao para Faculdade"),
                                [
                                        'controller' => 'alunos',
                                        'action'     => 'pesquisa_aluno_action',
                                        'entregar_cartao_novo_ingresso',
                                        'requisicoes_pedidos',
                                        'requisicoes',
                                ], ['escape' => false]) ?>
                    </li>

                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Mensagens SMS"),
                                ['controller' => 'messages', 'action' => 'sms_index'], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Cartões de Estudantes"),
                                [
                                        'controller' => 'requisicoes_pedidos',
                                        'action'     => 'cartao_estudantes',
                                        'plugin'     => 'requisicoes',
                                ], ['escape' => false]) ?>
                    </li>


                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Anos Lectivos"),
                                ['controller' => 'anolectivos', 'action' => 'index'], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Renovacao de Matricula"),
                                ['controller' => 'matriculas', 'action' => 'renovacao_matriculas'],
                                ['escape' => false]) ?>
                    </li>
                    <!--<li>
                    <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/mailreminder.png') . __("Turmas"),
                            ['controller' => 'turmas', 'action' => 'index'], ['escape' => false]) ?>
                    </li>
                    <li>
                    <?php echo $this->Html->link($this->Html->image('icons/student/teachers_icon.png') . __("Docentes"),
                            ['controller' => 'docentes', 'action' => 'index'], ['escape' => false]) ?>
                    </li>
                    <li>
                    <li>
                    <?php echo $this->Html->link($this->Html->image('icons/student/accounting_icon.png') . __("Contabilidade"),
                            ['controller' => 'financeiro_pagamentos', 'action' => 'index'], ['escape' => false]) ?>
                    </li>
                    <li>
                    <?php echo $this->Html->link($this->Html->image('icons/student/report.png') . __("Relatorios"),
                            ['controller' => 'relatorios', 'action' => 'resumo_semestral'], ['escape' => false]) ?>
                    </li>
                    <li>
                    <?php echo $this->Html->link($this->Html->image('icons/student/admin.png') . __("Administração"),
                            ['controller' => 'administracaos', 'action' => 'index'], ['escape' => false]) ?>
                    </li>
                    -->
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>


    <div class="clear height-fix"></div>

</div>
