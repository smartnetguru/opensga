<div class="alumnis view">
    <h2><?php echo __('Alumni'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($alumni['Alumni']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Entidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($alumni['Entidade']['name'],
                    ['controller' => 'entidades', 'action' => 'view', $alumni['Entidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Aluno'); ?></dt>
        <dd>
            <?php echo $this->Html->link($alumni['Aluno']['id'],
                    ['controller' => 'alunos', 'action' => 'view', $alumni['Aluno']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Registo'); ?></dt>
        <dd>
            <?php echo h($alumni['Alumni']['data_registo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Candidato Alumni'); ?></dt>
        <dd>
            <?php echo $this->Html->link($alumni['AlumniCandidatoAlumni']['id'], [
                    'controller' => 'candidato_alumnis',
                    'action'     => 'view',
                    $alumni['AlumniCandidatoAlumni']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($alumni['Alumni']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($alumni['Alumni']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($alumni['Alumni']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($alumni['Alumni']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User'); ?></dt>
        <dd>
            <?php echo $this->Html->link($alumni['User']['id'],
                    ['controller' => 'users', 'action' => 'view', $alumni['User']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Aprovacao'); ?></dt>
        <dd>
            <?php echo h($alumni['Alumni']['data_aprovacao']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User Aprovacao'); ?></dt>
        <dd>
            <?php echo h($alumni['Alumni']['user_aprovacao']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Alumni'), ['action' => 'edit', $alumni['Alumni']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Alumni'), ['action' => 'delete', $alumni['Alumni']['id']], null,
                    __('Are you sure you want to delete # %s?', $alumni['Alumni']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Alumnis'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Alumni'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Candidato Alumnis'),
                    ['controller' => 'candidato_alumnis', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Candidato Alumni'),
                    ['controller' => 'candidato_alumnis', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), ['controller' => 'users', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), ['controller' => 'users', 'action' => 'add']); ?> </li>
    </ul>
</div>
