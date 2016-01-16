<div class="candidaturas view">
<h2><?php echo __('Candidatura'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['Entidade']['name'], array('controller' => 'entidades', 'action' => 'view', $candidatura['Entidade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Escola Nivel Medio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['EscolaNivelMedio']['name'], array('controller' => 'escola_nivel_medios', 'action' => 'view', $candidatura['EscolaNivelMedio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano Conclusao Nivel Medio'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['ano_conclusao_nivel_medio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provincia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['Provincia']['name'], array('controller' => 'provincias', 'action' => 'view', $candidatura['Provincia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pais'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['pais']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aluno Via Admissao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['AlunoViaAdmissao']['name'], array('controller' => 'aluno_via_admissaos', 'action' => 'view', $candidatura['AlunoViaAdmissao']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Resultado Exame Admissao Id'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['tipo_resultado_exame_admissao_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $candidatura['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano Candidatura'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['ano_candidatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Opcao'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['numero_opcao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Candidato'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['numero_candidato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apelido'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['apelido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nomes'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['nomes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Ingresso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['TipoIngresso']['name'], array('controller' => 'tipo_ingressos', 'action' => 'view', $candidatura['TipoIngresso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Faculdade'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['nome_faculdade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome Curso'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['nome_curso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Matricula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['EstadoMatricula']['name'], array('controller' => 'estadomatriculas', 'action' => 'view', $candidatura['EstadoMatricula']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Matricula'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['data_matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Funcionario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['Funcionario']['id'], array('controller' => 'funcionarios', 'action' => 'view', $candidatura['Funcionario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidade Organica'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['UnidadeOrganica']['name'], array('controller' => 'unidade_organicas', 'action' => 'view', $candidatura['UnidadeOrganica']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localidade'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['localidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local Id Normal'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['local_id_normal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bolsa Tipo Bolsa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['BolsaTipoBolsa']['name'], array('controller' => 'bolsa_tipo_bolsas', 'action' => 'view', $candidatura['BolsaTipoBolsa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Estudante'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['numero_estudante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ano Conclusao'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['ano_conclusao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['Genero']['name'], array('controller' => 'generos', 'action' => 'view', $candidatura['Genero']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Civil'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['estado_civil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nacionalidade'); ?></dt>
		<dd>
			<?php echo h($candidatura['Candidatura']['nacionalidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Turno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($candidatura['Turno']['name'], array('controller' => 'turnos', 'action' => 'view', $candidatura['Turno']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Candidatura'), array('action' => 'edit', $candidatura['Candidatura']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Candidatura'), array('action' => 'delete', $candidatura['Candidatura']['id']), null, __('Are you sure you want to delete # %s?', $candidatura['Candidatura']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidaturas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidatura'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidades'), array('controller' => 'entidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade'), array('controller' => 'entidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Escola Nivel Medios'), array('controller' => 'escola_nivel_medios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escola Nivel Medio'), array('controller' => 'escola_nivel_medios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provincias'), array('controller' => 'provincias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia'), array('controller' => 'provincias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aluno Via Admissaos'), array('controller' => 'aluno_via_admissaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aluno Via Admissao'), array('controller' => 'aluno_via_admissaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Ingressos'), array('controller' => 'tipo_ingressos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Ingresso'), array('controller' => 'tipo_ingressos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estadomatriculas'), array('controller' => 'estadomatriculas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Matricula'), array('controller' => 'estadomatriculas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'), array('controller' => 'bolsa_tipo_bolsas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'), array('controller' => 'bolsa_tipo_bolsas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Generos'), array('controller' => 'generos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genero'), array('controller' => 'generos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turnos'), array('controller' => 'turnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turno'), array('controller' => 'turnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
