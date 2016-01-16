<div class="sadeParametros view">
<h2><?php  echo __('Sade Parametro');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sadeParametro['SadeParametro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($sadeParametro['SadeParametro']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($sadeParametro['SadeParametro']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sade Indicador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sadeParametro['SadeIndicador']['id'], array('controller' => 'sade_indicadors', 'action' => 'view', $sadeParametro['SadeIndicador']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade Padrao'); ?></dt>
		<dd>
			<?php echo h($sadeParametro['SadeParametro']['quantidade_padrao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pontos Padrao'); ?></dt>
		<dd>
			<?php echo h($sadeParametro['SadeParametro']['pontos_padrao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pontos Bonificados'); ?></dt>
		<dd>
			<?php echo h($sadeParametro['SadeParametro']['pontos_bonificados']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sade Parametro'), array('action' => 'edit', $sadeParametro['SadeParametro']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sade Parametro'), array('action' => 'delete', $sadeParametro['SadeParametro']['id']), null, __('Are you sure you want to delete # %s?', $sadeParametro['SadeParametro']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Parametros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Parametro'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Indicadors'), array('controller' => 'sade_indicadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Indicador'), array('controller' => 'sade_indicadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Auto Avaliacaos'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Avaliacao Alunos'), array('controller' => 'sade_avaliacao_alunos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Avaliacao Aluno'), array('controller' => 'sade_avaliacao_alunos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sade Avaliacao Qualitativas'), array('controller' => 'sade_avaliacao_qualitativas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sade Avaliacao Qualitativa'), array('controller' => 'sade_avaliacao_qualitativas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sade Auto Avaliacaos');?></h3>
	<?php if (!empty($sadeParametro['SadeAutoAvaliacao'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Sade Parametro Id'); ?></th>
		<th><?php echo __('Resposta'); ?></th>
		<th><?php echo __('Pontos Obtidos'); ?></th>
		<th><?php echo __('Pontos Bonificados'); ?></th>
		<th><?php echo __('Detalhes'); ?></th>
		<th><?php echo __('AnoLectivo Id'); ?></th>
		<th><?php echo __('SemestreLectivo Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Sade Avaliacao Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sadeParametro['SadeAutoAvaliacao'] as $sadeAutoAvaliacao): ?>
		<tr>
			<td><?php echo $sadeAutoAvaliacao['id'];?></td>
			<td><?php echo $sadeAutoAvaliacao['entidade_id'];?></td>
			<td><?php echo $sadeAutoAvaliacao['sade_parametro_id'];?></td>
			<td><?php echo $sadeAutoAvaliacao['resposta'];?></td>
			<td><?php echo $sadeAutoAvaliacao['pontos_obtidos'];?></td>
			<td><?php echo $sadeAutoAvaliacao['pontos_bonificados'];?></td>
			<td><?php echo $sadeAutoAvaliacao['detalhes'];?></td>
			<td><?php echo $sadeAutoAvaliacao['ano_lectivo_id'];?></td>
			<td><?php echo $sadeAutoAvaliacao['semestre_lectivo_id'];?></td>
			<td><?php echo $sadeAutoAvaliacao['data'];?></td>
			<td><?php echo $sadeAutoAvaliacao['sade_avaliacao_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'view', $sadeAutoAvaliacao['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'edit', $sadeAutoAvaliacao['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'delete', $sadeAutoAvaliacao['id']), null, __('Are you sure you want to delete # %s?', $sadeAutoAvaliacao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sade Auto Avaliacao'), array('controller' => 'sade_auto_avaliacaos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sade Avaliacao Alunos');?></h3>
	<?php if (!empty($sadeParametro['SadeAvaliacaoAluno'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Sade Parametro Id'); ?></th>
		<th><?php echo __('Resposta'); ?></th>
		<th><?php echo __('Pontos Obtidos'); ?></th>
		<th><?php echo __('AnoLectivo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sadeParametro['SadeAvaliacaoAluno'] as $sadeAvaliacaoAluno): ?>
		<tr>
			<td><?php echo $sadeAvaliacaoAluno['id'];?></td>
			<td><?php echo $sadeAvaliacaoAluno['aluno_id'];?></td>
			<td><?php echo $sadeAvaliacaoAluno['entidade_id'];?></td>
			<td><?php echo $sadeAvaliacaoAluno['sade_parametro_id'];?></td>
			<td><?php echo $sadeAvaliacaoAluno['resposta'];?></td>
			<td><?php echo $sadeAvaliacaoAluno['pontos_obtidos'];?></td>
			<td><?php echo $sadeAvaliacaoAluno['ano_lectivo_id'];?></td>
			<td><?php echo $sadeAvaliacaoAluno['created'];?></td>
			<td><?php echo $sadeAvaliacaoAluno['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sade_avaliacao_alunos', 'action' => 'view', $sadeAvaliacaoAluno['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sade_avaliacao_alunos', 'action' => 'edit', $sadeAvaliacaoAluno['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sade_avaliacao_alunos', 'action' => 'delete', $sadeAvaliacaoAluno['id']), null, __('Are you sure you want to delete # %s?', $sadeAvaliacaoAluno['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sade Avaliacao Aluno'), array('controller' => 'sade_avaliacao_alunos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sade Avaliacao Qualitativas');?></h3>
	<?php if (!empty($sadeParametro['SadeAvaliacaoQualitativa'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sade Avaliador Id'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Sade Parametro Id'); ?></th>
		<th><?php echo __('Resposta'); ?></th>
		<th><?php echo __('Pontos Obtidos'); ?></th>
		<th><?php echo __('AnoLectivo Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sadeParametro['SadeAvaliacaoQualitativa'] as $sadeAvaliacaoQualitativa): ?>
		<tr>
			<td><?php echo $sadeAvaliacaoQualitativa['id'];?></td>
			<td><?php echo $sadeAvaliacaoQualitativa['sade_avaliador_id'];?></td>
			<td><?php echo $sadeAvaliacaoQualitativa['entidade_id'];?></td>
			<td><?php echo $sadeAvaliacaoQualitativa['sade_parametro_id'];?></td>
			<td><?php echo $sadeAvaliacaoQualitativa['resposta'];?></td>
			<td><?php echo $sadeAvaliacaoQualitativa['pontos_obtidos'];?></td>
			<td><?php echo $sadeAvaliacaoQualitativa['ano_lectivo_id'];?></td>
			<td><?php echo $sadeAvaliacaoQualitativa['data'];?></td>
			<td><?php echo $sadeAvaliacaoQualitativa['created'];?></td>
			<td><?php echo $sadeAvaliacaoQualitativa['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sade_avaliacao_qualitativas', 'action' => 'view', $sadeAvaliacaoQualitativa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sade_avaliacao_qualitativas', 'action' => 'edit', $sadeAvaliacaoQualitativa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sade_avaliacao_qualitativas', 'action' => 'delete', $sadeAvaliacaoQualitativa['id']), null, __('Are you sure you want to delete # %s?', $sadeAvaliacaoQualitativa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sade Avaliacao Qualitativa'), array('controller' => 'sade_avaliacao_qualitativas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
