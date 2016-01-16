<div class="smsEnviadas view">
<h2><?php echo __('Sms Enviada'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($smsEnviada['SmsEnviada']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destination'); ?></dt>
		<dd>
			<?php echo h($smsEnviada['SmsEnviada']['destination']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($smsEnviada['SmsEnviada']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($smsEnviada['SmsEnviada']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($smsEnviada['SmsEnviada']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($smsEnviada['User']['id'], array('controller' => 'users', 'action' => 'view', $smsEnviada['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sms Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($smsEnviada['SmsTipo']['name'], array('controller' => 'sms_tipos', 'action' => 'view', $smsEnviada['SmsTipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($smsEnviada['SmsEnviada']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($smsEnviada['SmsEnviada']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultado'); ?></dt>
		<dd>
			<?php echo h($smsEnviada['SmsEnviada']['resultado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sms Enviada'), array('action' => 'edit', $smsEnviada['SmsEnviada']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sms Enviada'), array('action' => 'delete', $smsEnviada['SmsEnviada']['id']), null, __('Are you sure you want to delete # %s?', $smsEnviada['SmsEnviada']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sms Enviadas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sms Enviada'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sms Tipos'), array('controller' => 'sms_tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sms Tipo'), array('controller' => 'sms_tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
