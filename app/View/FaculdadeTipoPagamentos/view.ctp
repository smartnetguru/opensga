<div class="faculdadeTipoPagamentos view">
<h2><?php  echo __('Faculdade Tipo Pagamento');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($faculdadeTipoPagamento['FaculdadeTipoPagamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faculdade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($faculdadeTipoPagamento['Faculdade']['name'], array('controller' => 'faculdades', 'action' => 'view', $faculdadeTipoPagamento['Faculdade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipopagamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($faculdadeTipoPagamento['Tipopagamento']['name'], array('controller' => 'tipopagamentos', 'action' => 'view', $faculdadeTipoPagamento['Tipopagamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($faculdadeTipoPagamento['FaculdadeTipoPagamento']['valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Faculdade Tipo Pagamento'), array('action' => 'edit', $faculdadeTipoPagamento['FaculdadeTipoPagamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Faculdade Tipo Pagamento'), array('action' => 'delete', $faculdadeTipoPagamento['FaculdadeTipoPagamento']['id']), null, __('Are you sure you want to delete # %s?', $faculdadeTipoPagamento['FaculdadeTipoPagamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculdade Tipo Pagamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculdade Tipo Pagamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculdades'), array('controller' => 'faculdades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculdade'), array('controller' => 'faculdades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipopagamentos'), array('controller' => 'tipopagamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipopagamento'), array('controller' => 'tipopagamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
