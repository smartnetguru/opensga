<div class="uploads view">
    <h2><?php echo __('Upload'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($upload['Upload']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($upload['Upload']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Tipo Upload'); ?></dt>
        <dd>
            <?php echo $this->Html->link($upload['TipoUpload']['name'],
                    ['controller' => 'tipo_uploads', 'action' => 'view', $upload['TipoUpload']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Upload'); ?></dt>
        <dd>
            <?php echo h($upload['Upload']['data_upload']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Upload'); ?></dt>
        <dd>
            <?php echo $this->Html->link($upload['EstadoUpload']['name'],
                    ['controller' => 'estado_uploads', 'action' => 'view', $upload['EstadoUpload']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($upload['Upload']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($upload['Upload']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($upload['Upload']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($upload['Upload']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('File Url'); ?></dt>
        <dd>
            <?php echo h($upload['Upload']['file_url']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Upload'), ['action' => 'edit', $upload['Upload']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Upload'), ['action' => 'delete', $upload['Upload']['id']], null,
                    __('Are you sure you want to delete # %s?', $upload['Upload']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Uploads'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Upload'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipo Uploads'),
                    ['controller' => 'tipo_uploads', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipo Upload'),
                    ['controller' => 'tipo_uploads', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Uploads'),
                    ['controller' => 'estado_uploads', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Upload'),
                    ['controller' => 'estado_uploads', 'action' => 'add']); ?> </li>
    </ul>
</div>
