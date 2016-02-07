<div class="sadeAvaliacaoQualitativas view">
    <h2><?php echo __('Sade Avaliacao Qualitativa'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sade Avaliador'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliacaoQualitativa['SadeAvaliador']['id'], [
                    'controller' => 'sade_avaliadors',
                    'action'     => 'view',
                    $sadeAvaliacaoQualitativa['SadeAvaliador']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Entidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliacaoQualitativa['Entidade']['name'],
                    ['controller' => 'entidades', 'action' => 'view', $sadeAvaliacaoQualitativa['Entidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sade Parametro'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliacaoQualitativa['SadeParametro']['id'], [
                    'controller' => 'sade_parametros',
                    'action'     => 'view',
                    $sadeAvaliacaoQualitativa['SadeParametro']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Resposta'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['resposta']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pontos Obtidos'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['pontos_obtidos']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('AnoLectivo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($sadeAvaliacaoQualitativa['AnoLectivo']['codigo'], [
                    'controller' => 'anolectivos',
                    'action'     => 'view',
                    $sadeAvaliacaoQualitativa['AnoLectivo']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['data']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Sade Avaliacao Qualitativa'),
                    ['action' => 'edit', $sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Sade Avaliacao Qualitativa'),
                    ['action' => 'delete', $sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $sadeAvaliacaoQualitativa['SadeAvaliacaoQualitativa']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliacao Qualitativas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliacao Qualitativa'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Sade Avaliadors'),
                    ['controller' => 'sade_avaliadors', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Sade Avaliador'),
                    ['controller' => 'sade_avaliadors', 'action' => 'add']); ?> </li>
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
