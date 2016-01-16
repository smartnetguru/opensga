<div class="candidatoAlumnis view">
<h2><?php  echo __('Candidato Alumni'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apelido'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['apelido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nomes'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['nomes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Nascimento'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['data_nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Pai'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['nome_pai']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Mae'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['nome_mae']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatoAlumni['Genero']['name'], array('controller' => 'generos', 'action' => 'view', $candidatoAlumni['Genero']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Civil'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatoAlumni['EstadoCivil']['name'], array('controller' => 'estado_civils', 'action' => 'view', $candidatoAlumni['EstadoCivil']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pais Nascimento'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['pais_nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provincia Nascimento'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['provincia_nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade Nascimento'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['cidade_nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pais Morada'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['pais_morada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provincia Morada'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['provincia_morada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade Morada'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['cidade_morada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Estudante'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['numero_estudante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telemovel'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['telemovel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidade Organica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatoAlumni['UnidadeOrganica']['name'], array('controller' => 'unidade_organicas', 'action' => 'view', $candidatoAlumni['UnidadeOrganica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano Conclusao'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['ano_conclusao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatoAlumni['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $candidatoAlumni['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grau Academico'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatoAlumni['GrauAcademico']['name'], array('controller' => 'grau_academicos', 'action' => 'view', $candidatoAlumni['GrauAcademico']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($candidatoAlumni['AlumniCandidatoAlumni']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidato Alumni'), array('action' => 'edit', $candidatoAlumni['AlumniCandidatoAlumni']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Candidato Alumni'), array('action' => 'delete', $candidatoAlumni['AlumniCandidatoAlumni']['id']), null, __('Are you sure you want to delete # %s?', $candidatoAlumni['AlumniCandidatoAlumni']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidato Alumnis'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato Alumni'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Civils'), array('controller' => 'estado_civils', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Civil'), array('controller' => 'estado_civils', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grau Academicos'), array('controller' => 'grau_academicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grau Academico'), array('controller' => 'grau_academicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnis'), array('controller' => 'alumnis', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumni'), array('controller' => 'alumnis', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Alumnis'); ?></h3>
	<?php if (!empty($candidatoAlumni['Alumni'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Data Registo'); ?></th>
		<th><?php echo __('Candidato Alumni Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Data Aprovacao'); ?></th>
		<th><?php echo __('User Aprovacao'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($candidatoAlumni['Alumni'] as $alumni): ?>
		<tr>
			<td><?php echo $alumni['id']; ?></td>
			<td><?php echo $alumni['entidade_id']; ?></td>
			<td><?php echo $alumni['aluno_id']; ?></td>
			<td><?php echo $alumni['data_registo']; ?></td>
			<td><?php echo $alumni['candidato_alumni_id']; ?></td>
			<td><?php echo $alumni['created']; ?></td>
			<td><?php echo $alumni['modified']; ?></td>
			<td><?php echo $alumni['created_by']; ?></td>
			<td><?php echo $alumni['modified_by']; ?></td>
			<td><?php echo $alumni['user_id']; ?></td>
			<td><?php echo $alumni['data_aprovacao']; ?></td>
			<td><?php echo $alumni['user_aprovacao']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alumnis', 'action' => 'view', $alumni['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alumnis', 'action' => 'edit', $alumni['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alumnis', 'action' => 'delete', $alumni['id']), null, __('Are you sure you want to delete # %s?', $alumni['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alumni'), array('controller' => 'alumnis', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
