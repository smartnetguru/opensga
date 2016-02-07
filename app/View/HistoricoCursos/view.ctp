<div class="historicoCursos view">
    <h2><?php echo __('Historico Curso'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Aluno'); ?></dt>
        <dd>
            <?php echo $this->Html->link($historicoCurso['Aluno']['id'],
                    ['controller' => 'alunos', 'action' => 'view', $historicoCurso['Aluno']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Curso'); ?></dt>
        <dd>
            <?php echo $this->Html->link($historicoCurso['Curso']['name'],
                    ['controller' => 'cursos', 'action' => 'view', $historicoCurso['Curso']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ano Ingresso'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['ano_ingresso']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ano Fim'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['ano_fim']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ano Lectivo Ingresso'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['ano_lectivo_ingresso']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ano Lectivo Fim'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['ano_lectivo_fim']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Conclusao'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['data_conclusao']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nota Final'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['nota_final']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Anexo Url'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['anexo_url']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Conclusao Confirmada'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['conclusao_confirmada']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Funcionario Confirmador'); ?></dt>
        <dd>
            <?php echo h($historicoCurso['HistoricoCurso']['funcionario_confirmador']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Plano Estudo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($historicoCurso['PlanoEstudo']['name'],
                    ['controller' => 'plano_estudos', 'action' => 'view', $historicoCurso['PlanoEstudo']['id']]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Historico Curso'),
                    ['action' => 'edit', $historicoCurso['HistoricoCurso']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Historico Curso'),
                    ['action' => 'delete', $historicoCurso['HistoricoCurso']['id']], null,
                    __('Are you sure you want to delete # %s?', $historicoCurso['HistoricoCurso']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Historico Cursos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Historico Curso'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cursos'), ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Plano Estudos'),
                    ['controller' => 'plano_estudos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Plano Estudo'),
                    ['controller' => 'plano_estudos', 'action' => 'add']); ?> </li>
    </ul>
</div>
