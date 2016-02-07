<div class="tipoInstituicaos view">
    <h2><?php echo __('Tipo Instituicao'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($tipoInstituicao['TipoInstituicao']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($tipoInstituicao['TipoInstituicao']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Tipo Instituicao'),
                    ['action' => 'edit', $tipoInstituicao['TipoInstituicao']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Tipo Instituicao'),
                    ['action' => 'delete', $tipoInstituicao['TipoInstituicao']['id']], null,
                    __('Are you sure you want to delete # %s?', $tipoInstituicao['TipoInstituicao']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipo Instituicaos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipo Instituicao'), ['action' => 'add']); ?> </li>
    </ul>
</div>
