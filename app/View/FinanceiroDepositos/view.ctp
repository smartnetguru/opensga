<div class="financeiroDepositos view">
<h2><?php  echo __('Financeiro Deposito'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($financeiroDeposito['FinanceiroDeposito']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financeiroDeposito['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $financeiroDeposito['Entidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Financeiro Conta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financeiroDeposito['FinanceiroConta']['id'], array('controller' => 'financeiro_contas', 'action' => 'view', $financeiroDeposito['FinanceiroConta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Deposito'); ?></dt>
		<dd>
			<?php echo h($financeiroDeposito['FinanceiroDeposito']['data_deposito']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Reconciliacao'); ?></dt>
		<dd>
			<?php echo h($financeiroDeposito['FinanceiroDeposito']['data_reconciliacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Financeiro Estado Deposito'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financeiroDeposito['FinanceiroEstadoDeposito']['name'], array('controller' => 'financeiro_estado_depositos', 'action' => 'view', $financeiroDeposito['FinanceiroEstadoDeposito']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($financeiroDeposito['FinanceiroDeposito']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($financeiroDeposito['FinanceiroDeposito']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($financeiroDeposito['FinanceiroDeposito']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($financeiroDeposito['FinanceiroDeposito']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Comprovativo'); ?></dt>
		<dd>
			<?php echo h($financeiroDeposito['FinanceiroDeposito']['numero_comprovativo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Financeiro Forma Deposito'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financeiroDeposito['FinanceiroFormaDeposito']['name'], array('controller' => 'financeiro_forma_depositos', 'action' => 'view', $financeiroDeposito['FinanceiroFormaDeposito']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Financeiro Banco'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financeiroDeposito['FinanceiroBanco']['name'], array('controller' => 'financeiro_bancos', 'action' => 'view', $financeiroDeposito['FinanceiroBanco']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Financeiro Deposito'), array('action' => 'edit', $financeiroDeposito['FinanceiroDeposito']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Financeiro Deposito'), array('action' => 'delete', $financeiroDeposito['FinanceiroDeposito']['id']), null, __('Are you sure you want to delete # %s?', $financeiroDeposito['FinanceiroDeposito']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Depositos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Deposito'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Contas'), array('controller' => 'financeiro_contas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Conta'), array('controller' => 'financeiro_contas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Estado Depositos'), array('controller' => 'financeiro_estado_depositos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Estado Deposito'), array('controller' => 'financeiro_estado_depositos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Forma Depositos'), array('controller' => 'financeiro_forma_depositos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Forma Deposito'), array('controller' => 'financeiro_forma_depositos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeiro Bancos'), array('controller' => 'financeiro_bancos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeiro Banco'), array('controller' => 'financeiro_bancos', 'action' => 'add')); ?> </li>
	</ul>
</div>
