<div class="sadeAutoAvaliacaos view">
<h2><?php  echo __('Sade Auto Avaliacao');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sadeAutoAvaliacao['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $sadeAutoAvaliacao['Entidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sade Parametro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sadeAutoAvaliacao['SadeParametro']['id'], array('controller' => 'sade_parametros', 'action' => 'view', $sadeAutoAvaliacao['SadeParametro']['id'])); ?>
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
			<?php echo $this->Html->link($sadeAutoAvaliacao['AnoLectivo']['codigo'], array('controller' => 'anolectivos', 'action' => 'view', $sadeAutoAvaliacao['AnoLectivo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SemestreLectivo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sadeAutoAvaliacao['SemestreLectivo']['codigo'], array('controller' => 'semestrelectivos', 'action' => 'view', $sadeAutoAvaliacao['SemestreLectivo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($sadeAutoAvaliacao['SadeAutoAvaliacao']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sade Avaliacao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sadeAutoAvaliacao['SadeAvaliacao']['name'], array('controller' => 'sade_avaliacaos', 'action' => 'view', $sadeAutoAvaliacao['SadeAvaliacao']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sade Auto Avaliacao'), array('action' => 'edit', $sadeAutoAvaliacao['SadeAutoAvaliacao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sade Auto Avaliacao'), array('action' => 'delete', $sadeAutoAvaliacao['SadeAutoAvaliacao']['id']), null, __('Are you sure you want to delete # %s?', $sadeAutoAvaliacao['SadeAutoAvaliacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Auto Avaliacaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Parametros'), array('controller' => 'sade_parametros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Parametro'), array('controller' => 'sade_parametros', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Anolectivos'), array('controller' => 'anolectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New AnoLectivo'), array('controller' => 'anolectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Semestrelectivos'), array('controller' => 'semestrelectivos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New SemestreLectivo'), array('controller' => 'semestrelectivos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Avaliacaos'), array('controller' => 'sade_avaliacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Avaliacao'), array('controller' => 'sade_avaliacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
