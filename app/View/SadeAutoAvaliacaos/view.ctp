<div class="sadeAutoAvaliacaos view">
    <h2><?php echo __('Sade Auto Avaliacao'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Entidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAutoAvaliacao['Entidade']['name'],
                    ['controller' => 'entidades', 'action' => 'view', $sadeAutoAvaliacao['Entidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sade Parametro'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAutoAvaliacao['SadeParametro']['id'], [
                    'controller' => 'sade_parametros',
                    'action'     => 'view',
                    $sadeAutoAvaliacao['SadeParametro']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Resposta'); ?></dt>
        <dd>
            <?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['resposta']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pontos Obtidos'); ?></dt>
        <dd>
            <?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['pontos_obtidos']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pontos Bonificados'); ?></dt>
        <dd>
            <?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['pontos_bonificados']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Detalhes'); ?></dt>
        <dd>
            <?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['detalhes']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AnoLectivo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAutoAvaliacao['AnoLectivo']['codigo'],
                    ['controller' => 'anolectivos', 'action' => 'view', $sadeAutoAvaliacao['AnoLectivo']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('SemestreLectivo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAutoAvaliacao['SemestreLectivo']['codigo'], [
                    'controller' => 'semestrelectivos',
                    'action'     => 'view',
                    $sadeAutoAvaliacao['SemestreLectivo']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data'); ?></dt>
        <dd>
            <?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['data']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sade Avaliacao'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAutoAvaliacao['SadeAvaliacao']['name'], [
                    'controller' => 'sade_avaliacaos',
                    'action'     => 'view',
                    $sadeAutoAvaliacao['SadeAvaliacao']['id'],
            ]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Sade Auto Avaliacao'),
                    ['action' => 'edit', $sadeAutoAvaliacao['SadeAutoAvaliacao']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Sade Auto Avaliacao'),
                    ['action' => 'delete', $sadeAutoAvaliacao['SadeAutoAvaliacao']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $sadeAutoAvaliacao['SadeAutoAvaliacao']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Auto Avaliacaos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'), ['action' => 'add']); ?> </li>
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
        <li><?php echo $this->Html->link(__('List Semestrelectivos'),
                    ['controller' => 'semestrelectivos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New SemestreLectivo'),
                    ['controller' => 'semestrelectivos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacaos'),
                    ['controller' => 'sade_avaliacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliacao'),
                    ['controller' => 'sade_avaliacaos', 'action' => 'add']); ?> </li>
    </ul>
</div>
