<div class="sadeAvaliacaoAlunos view">
    <h2><?php echo __('Sade Avaliacao Aluno'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacaoAluno['SadeAvaliacaoAluno']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Aluno'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliacaoAluno['Aluno']['name'],
                    ['controller' => 'alunos', 'action' => 'view', $sadeAvaliacaoAluno['Aluno']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Entidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliacaoAluno['Entidade']['name'],
                    ['controller' => 'entidades', 'action' => 'view', $sadeAvaliacaoAluno['Entidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sade Parametro'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliacaoAluno['SadeParametro']['id'], [
                    'controller' => 'sade_parametros',
                    'action'     => 'view',
                    $sadeAvaliacaoAluno['SadeParametro']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Resposta'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacaoAluno['SadeAvaliacaoAluno']['resposta']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pontos Obtidos'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacaoAluno['SadeAvaliacaoAluno']['pontos_obtidos']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AnoLectivo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliacaoAluno['AnoLectivo']['codigo'],
                    ['controller' => 'anolectivos', 'action' => 'view', $sadeAvaliacaoAluno['AnoLectivo']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacaoAluno['SadeAvaliacaoAluno']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacaoAluno['SadeAvaliacaoAluno']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Sade Avaliacao Aluno'),
                    ['action' => 'edit', $sadeAvaliacaoAluno['SadeAvaliacaoAluno']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Sade Avaliacao Aluno'),
                    ['action' => 'delete', $sadeAvaliacaoAluno['SadeAvaliacaoAluno']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $sadeAvaliacaoAluno['SadeAvaliacaoAluno']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacao Alunos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliacao Aluno'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Parametros'),
                    ['controller' => 'sade_parametros', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Parametro'),
                    ['controller' => 'sade_parametros', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Anolectivos'),
                    ['controller' => 'anolectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New AnoLectivo'),
                    ['controller' => 'anolectivos', 'action' => 'add']); ?> </li>
    </ul>
</div>
