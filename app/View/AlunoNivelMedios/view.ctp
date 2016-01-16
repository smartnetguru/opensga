<div class="alunoNivelMedios view">
<h2><?php  echo __('Aluno Nivel Medio');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alunoNivelMedio['AlunoNivelMedio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alunoNivelMedio['Aluno']['id'], array('controller' => 'alunos', 'action' => 'view', $alunoNivelMedio['Aluno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Escola Nivel Medio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alunoNivelMedio['EscolaNivelMedio']['name'], array('controller' => 'escola_nivel_medios', 'action' => 'view', $alunoNivelMedio['EscolaNivelMedio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano Conclusao'); ?></dt>
		<dd>
			<?php echo h($alunoNivelMedio['AlunoNivelMedio']['ano_conclusao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($alunoNivelMedio['AlunoNivelMedio']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($alunoNivelMedio['AlunoNivelMedio']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aluno Nivel Medio'), array('action' => 'edit', $alunoNivelMedio['AlunoNivelMedio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aluno Nivel Medio'), array('action' => 'delete', $alunoNivelMedio['AlunoNivelMedio']['id']), null, __('Are you sure you want to delete # %s?', $alunoNivelMedio['AlunoNivelMedio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aluno Nivel Medios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno Nivel Medio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alunos'), array('controller' => 'alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno'), array('controller' => 'alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Escola Nivel Medios'), array('controller' => 'escola_nivel_medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escola Nivel Medio'), array('controller' => 'escola_nivel_medios', 'action' => 'add')); ?> </li>
	</ul>
</div>
