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
                        echo $this->Html->link($this->Html->image('icons/student/Student-Icon.png') . __("Cursos em Funcionamento"), array('controller' => 'cursos', 'action' => 'report_cursos_activos'), array('escape' => false));
                        ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Matricular Candidato"), array('controller' => 'alunos', 'action' => 'busca_candidato'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Matricular Candidato"), array('controller' => 'alunos', 'action' => 'busca_candidato'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Renovações de Matrícula"), array('controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'renovar_matricula'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Reingressos"), array('controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'reingresso'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Mudança de Curso"), array('controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'mudanca_curso'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Mudança de Status de Estudante"), array('controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'alterar_status'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Entrega de Certificado"), array('controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'recebe_certificado_nivel_anterior'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Conclusão de Curso"), array('controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'concluir_nivel'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Alterar Nome de Candidato"), array('controller' => 'alunos', 'action' => 'busca_candidatos_action', 'alterar_nome_candidato'), array('escape' => false)) ?>
                    </li>                    
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Requisicoes"), array('plugin' => 'requisicoes', 'controller' => 'requisicoes_pedidos', 'action' => 'nova_requisicao'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Cerimónias de Graduação"), array('plugin' => false, 'controller' => 'cerimonia_graduacaos', 'action' => 'index'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Inscrição para Graduação"), array('plugin' => false, 'controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'cerimonia_graduacao'), array('escape' => false)) ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Enviar Cartao para Faculdade"), array('controller' => 'alunos', 'action' => 'pesquisa_aluno_action', 'entregar_cartao_novo_ingresso', 'requisicoes_pedidos', 'requisicoes'), array('escape' => false)) ?>
                    </li>

                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Mensagens SMS"), array('controller' => 'messages', 'action' => 'sms_index'), array('escape' => false)) ?>
                    </li> 
                    <li>
                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Cartões de Estudantes"), array('controller' => 'requisicoes_pedidos', 'action' => 'cartao_estudantes','plugin'=>'requisicoes'), array('escape' => false)) ?>
                    </li> 

                    
                    <li>
                    <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/penguin.png') . __("Anos Lectivos"), array('controller' => 'anolectivos', 'action' => 'index'), array('escape' => false)) ?>
                    </li>
                    <li>
                    <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/wifi.png') . __("Renovacao de Matricula"), array('controller' => 'matriculas', 'action' => 'renovacao_matriculas'), array('escape' => false)) ?>
                    </li>
                    <!--<li>
                    <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/mailreminder.png') . __("Turmas"), array('controller' => 'turmas', 'action' => 'index'), array('escape' => false)) ?>
                    </li>
                    <li>
                    <?php echo $this->Html->link($this->Html->image('icons/student/teachers_icon.png') . __("Docentes"), array('controller' => 'docentes', 'action' => 'index'), array('escape' => false)) ?>
                    </li>
                    <li>
                    <li>
                    <?php echo $this->Html->link($this->Html->image('icons/student/accounting_icon.png') . __("Contabilidade"), array('controller' => 'financeiro_pagamentos', 'action' => 'index'), array('escape' => false)) ?>
                    </li>
                    <li>
                    <?php echo $this->Html->link($this->Html->image('icons/student/report.png') . __("Relatorios"), array('controller' => 'relatorios', 'action' => 'resumo_semestral'), array('escape' => false)) ?>
                    </li>
                    <li>
                    <?php echo $this->Html->link($this->Html->image('icons/student/admin.png') . __("Administração"), array('controller' => 'administracaos', 'action' => 'index'), array('escape' => false)) ?>
                    </li>
                    -->
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>





    <div class="clear height-fix"></div>

</div>
