<div class="cooperacaoAcordoUnidadeOrganicas view">
<h2><?php echo __('Cooperacao Acordo Unidade Organica'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidade Organica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cooperacaoAcordoUnidadeOrganica['UnidadeOrganica']['name'], array('controller' => 'unidade_organicas', 'action' => 'view', $cooperacaoAcordoUnidadeOrganica['UnidadeOrganica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cooperacao Acordo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordo']['name'], array('controller' => 'cooperacao_acordos', 'action' => 'view', $cooperacaoAcordoUnidadeOrganica['CooperacaoAcordo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cooperacao Acordo Unidade Organica'), array('action' => 'edit', $cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cooperacao Acordo Unidade Organica'), array('action' => 'delete', $cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['id']), null, __('Are you sure you want to delete # %s?', $cooperacaoAcordoUnidadeOrganica['CooperacaoAcordoUnidadeOrganica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordo Unidade Organicas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo Unidade Organica'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cooperacao Acordos'), array('controller' => 'cooperacao_acordos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cooperacao Acordo'), array('controller' => 'cooperacao_acordos', 'action' => 'add')); ?> </li>
	</ul>
</div>
