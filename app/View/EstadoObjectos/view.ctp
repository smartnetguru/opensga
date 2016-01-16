<div class="estadoObjectos view">
<h2><?php echo __('Estado Objecto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estadoObjecto['EstadoObjecto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($estadoObjecto['EstadoObjecto']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado Objecto'), array('action' => 'edit', $estadoObjecto['EstadoObjecto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado Objecto'), array('action' => 'delete', $estadoObjecto['EstadoObjecto']['id']), array(), __('Are you sure you want to delete # %s?', $estadoObjecto['EstadoObjecto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estado Objectos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado Objecto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bolsa Pedidos'), array('controller' => 'bolsa_pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bolsa Pedido'), array('controller' => 'bolsa_pedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Candidato Graduacaos'), array('controller' => 'candidato_graduacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Candidato Graduacao'), array('controller' => 'candidato_graduacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Curso Responsavels'), array('controller' => 'curso_responsavels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso Responsavel'), array('controller' => 'curso_responsavels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplina Docentes'), array('controller' => 'disciplina_docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina Docente'), array('controller' => 'disciplina_docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplina Plano Estudos'), array('controller' => 'disciplina_plano_estudos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina Plano Estudo'), array('controller' => 'disciplina_plano_estudos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplina Unidade Organicas'), array('controller' => 'disciplina_unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Disciplina Unidade Organica'), array('controller' => 'disciplina_unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidade Contactos'), array('controller' => 'entidade_contactos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade Contacto'), array('controller' => 'entidade_contactos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entidade Identificacaos'), array('controller' => 'entidade_identificacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entidade Identificacao'), array('controller' => 'entidade_identificacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forma Mudanca Cursos'), array('controller' => 'forma_mudanca_cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forma Mudanca Curso'), array('controller' => 'forma_mudanca_cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcao Profissional Roles'), array('controller' => 'funcao_profissional_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcao Profissional Role'), array('controller' => 'funcao_profissional_roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Group Roles'), array('controller' => 'group_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group Role'), array('controller' => 'group_roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups Users'), array('controller' => 'groups_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groups User'), array('controller' => 'groups_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Messages'), array('controller' => 'messages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Plano Estudos'), array('controller' => 'plano_estudos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plano Estudo'), array('controller' => 'plano_estudos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Precedencias'), array('controller' => 'precedencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Precedencia'), array('controller' => 'precedencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organica Roles'), array('controller' => 'unidade_organica_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica Role'), array('controller' => 'unidade_organica_roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Roles'), array('controller' => 'user_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Role'), array('controller' => 'user_roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bolsa Pedidos'); ?></h3>
	<?php if (!empty($estadoObjecto['BolsaPedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Ano Lectivo Id'); ?></th>
		<th><?php echo __('Bolsa Bolsa Id'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Bolsa Tipo Bolsa Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Data Pedido'); ?></th>
		<th><?php echo __('Nivel Estudante'); ?></th>
		<th><?php echo __('Tipo Bolsa Actual'); ?></th>
		<th><?php echo __('Observacoes'); ?></th>
		<th><?php echo __('Agregado Familiar'); ?></th>
		<th><?php echo __('Irmaos Estudantes'); ?></th>
		<th><?php echo __('Irmaos Trabalhadores'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['BolsaPedido'] as $bolsaPedido): ?>
		<tr>
			<td><?php echo $bolsaPedido['id']; ?></td>
			<td><?php echo $bolsaPedido['aluno_id']; ?></td>
			<td><?php echo $bolsaPedido['ano_lectivo_id']; ?></td>
			<td><?php echo $bolsaPedido['bolsa_bolsa_id']; ?></td>
			<td><?php echo $bolsaPedido['estado_objecto_id']; ?></td>
			<td><?php echo $bolsaPedido['bolsa_tipo_bolsa_id']; ?></td>
			<td><?php echo $bolsaPedido['created']; ?></td>
			<td><?php echo $bolsaPedido['modified']; ?></td>
			<td><?php echo $bolsaPedido['data_pedido']; ?></td>
			<td><?php echo $bolsaPedido['nivel_estudante']; ?></td>
			<td><?php echo $bolsaPedido['tipo_bolsa_actual']; ?></td>
			<td><?php echo $bolsaPedido['observacoes']; ?></td>
			<td><?php echo $bolsaPedido['agregado_familiar']; ?></td>
			<td><?php echo $bolsaPedido['irmaos_estudantes']; ?></td>
			<td><?php echo $bolsaPedido['irmaos_trabalhadores']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bolsa_pedidos', 'action' => 'view', $bolsaPedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bolsa_pedidos', 'action' => 'edit', $bolsaPedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bolsa_pedidos', 'action' => 'delete', $bolsaPedido['id']), array(), __('Are you sure you want to delete # %s?', $bolsaPedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bolsa Pedido'), array('controller' => 'bolsa_pedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Candidato Graduacaos'); ?></h3>
	<?php if (!empty($estadoObjecto['CandidatoGraduacao'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Aluno Id'); ?></th>
		<th><?php echo __('Cerimonia Graduacao Id'); ?></th>
		<th><?php echo __('Pedido Certificado'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Estado Candidatura Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Ano Conclusao'); ?></th>
		<th><?php echo __('Data Defesa'); ?></th>
		<th><?php echo __('Media Defesa'); ?></th>
		<th><?php echo __('Media Final'); ?></th>
		<th><?php echo __('Apelido'); ?></th>
		<th><?php echo __('Nomes'); ?></th>
		<th><?php echo __('Data Nascimento'); ?></th>
		<th><?php echo __('Naturalidade'); ?></th>
		<th><?php echo __('Localidade'); ?></th>
		<th><?php echo __('Distrito Nascimento'); ?></th>
		<th><?php echo __('Provincia Nascimento'); ?></th>
		<th><?php echo __('Pais Nascimento'); ?></th>
		<th><?php echo __('Genero Id'); ?></th>
		<th><?php echo __('Nacionalidade'); ?></th>
		<th><?php echo __('Estado Civil Id'); ?></th>
		<th><?php echo __('Regime Estudo Id'); ?></th>
		<th><?php echo __('Regalia Social Id'); ?></th>
		<th><?php echo __('Data Candidatura'); ?></th>
		<th><?php echo __('Telemovel'); ?></th>
		<th><?php echo __('Funcionario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['CandidatoGraduacao'] as $candidatoGraduacao): ?>
		<tr>
			<td><?php echo $candidatoGraduacao['id']; ?></td>
			<td><?php echo $candidatoGraduacao['aluno_id']; ?></td>
			<td><?php echo $candidatoGraduacao['cerimonia_graduacao_id']; ?></td>
			<td><?php echo $candidatoGraduacao['pedido_certificado']; ?></td>
			<td><?php echo $candidatoGraduacao['estado_objecto_id']; ?></td>
			<td><?php echo $candidatoGraduacao['estado_candidatura_id']; ?></td>
			<td><?php echo $candidatoGraduacao['created']; ?></td>
			<td><?php echo $candidatoGraduacao['modified']; ?></td>
			<td><?php echo $candidatoGraduacao['created_by']; ?></td>
			<td><?php echo $candidatoGraduacao['modified_by']; ?></td>
			<td><?php echo $candidatoGraduacao['ano_conclusao']; ?></td>
			<td><?php echo $candidatoGraduacao['data_defesa']; ?></td>
			<td><?php echo $candidatoGraduacao['media_defesa']; ?></td>
			<td><?php echo $candidatoGraduacao['media_final']; ?></td>
			<td><?php echo $candidatoGraduacao['apelido']; ?></td>
			<td><?php echo $candidatoGraduacao['nomes']; ?></td>
			<td><?php echo $candidatoGraduacao['data_nascimento']; ?></td>
			<td><?php echo $candidatoGraduacao['naturalidade']; ?></td>
			<td><?php echo $candidatoGraduacao['localidade']; ?></td>
			<td><?php echo $candidatoGraduacao['distrito_nascimento']; ?></td>
			<td><?php echo $candidatoGraduacao['provincia_nascimento']; ?></td>
			<td><?php echo $candidatoGraduacao['pais_nascimento']; ?></td>
			<td><?php echo $candidatoGraduacao['genero_id']; ?></td>
			<td><?php echo $candidatoGraduacao['nacionalidade']; ?></td>
			<td><?php echo $candidatoGraduacao['estado_civil_id']; ?></td>
			<td><?php echo $candidatoGraduacao['regime_estudo_id']; ?></td>
			<td><?php echo $candidatoGraduacao['regalia_social_id']; ?></td>
			<td><?php echo $candidatoGraduacao['data_candidatura']; ?></td>
			<td><?php echo $candidatoGraduacao['telemovel']; ?></td>
			<td><?php echo $candidatoGraduacao['funcionario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'candidato_graduacaos', 'action' => 'view', $candidatoGraduacao['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'candidato_graduacaos', 'action' => 'edit', $candidatoGraduacao['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'candidato_graduacaos', 'action' => 'delete', $candidatoGraduacao['id']), array(), __('Are you sure you want to delete # %s?', $candidatoGraduacao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Candidato Graduacao'), array('controller' => 'candidato_graduacaos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Curso Responsavels'); ?></h3>
	<?php if (!empty($estadoObjecto['CursoResponsavel'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Funcionario Id'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Data Inicio'); ?></th>
		<th><?php echo __('Data Fim'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['CursoResponsavel'] as $cursoResponsavel): ?>
		<tr>
			<td><?php echo $cursoResponsavel['id']; ?></td>
			<td><?php echo $cursoResponsavel['curso_id']; ?></td>
			<td><?php echo $cursoResponsavel['funcionario_id']; ?></td>
			<td><?php echo $cursoResponsavel['estado_objecto_id']; ?></td>
			<td><?php echo $cursoResponsavel['data_inicio']; ?></td>
			<td><?php echo $cursoResponsavel['data_fim']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'curso_responsavels', 'action' => 'view', $cursoResponsavel['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'curso_responsavels', 'action' => 'edit', $cursoResponsavel['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'curso_responsavels', 'action' => 'delete', $cursoResponsavel['id']), array(), __('Are you sure you want to delete # %s?', $cursoResponsavel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curso Responsavel'), array('controller' => 'curso_responsavels', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cursos'); ?></h3>
	<?php if (!empty($estadoObjecto['Curso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Grau Academico Id'); ?></th>
		<th><?php echo __('Tipo Curso Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Pagamento Exclusivo'); ?></th>
		<th><?php echo __('Unidade Organica Id'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Codigo Admissao'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Ano Criacao'); ?></th>
		<th><?php echo __('Duracao'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['Curso'] as $curso): ?>
		<tr>
			<td><?php echo $curso['id']; ?></td>
			<td><?php echo $curso['name']; ?></td>
			<td><?php echo $curso['grau_academico_id']; ?></td>
			<td><?php echo $curso['tipo_curso_id']; ?></td>
			<td><?php echo $curso['codigo']; ?></td>
			<td><?php echo $curso['created']; ?></td>
			<td><?php echo $curso['modified']; ?></td>
			<td><?php echo $curso['pagamento_exclusivo']; ?></td>
			<td><?php echo $curso['unidade_organica_id']; ?></td>
			<td><?php echo $curso['created_by']; ?></td>
			<td><?php echo $curso['modified_by']; ?></td>
			<td><?php echo $curso['codigo_admissao']; ?></td>
			<td><?php echo $curso['estado_objecto_id']; ?></td>
			<td><?php echo $curso['ano_criacao']; ?></td>
			<td><?php echo $curso['duracao']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), array(), __('Are you sure you want to delete # %s?', $curso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Disciplina Docentes'); ?></h3>
	<?php if (!empty($estadoObjecto['DisciplinaDocente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th><?php echo __('Docente Id'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['DisciplinaDocente'] as $disciplinaDocente): ?>
		<tr>
			<td><?php echo $disciplinaDocente['id']; ?></td>
			<td><?php echo $disciplinaDocente['disciplina_id']; ?></td>
			<td><?php echo $disciplinaDocente['docente_id']; ?></td>
			<td><?php echo $disciplinaDocente['estado_objecto_id']; ?></td>
			<td><?php echo $disciplinaDocente['created']; ?></td>
			<td><?php echo $disciplinaDocente['modified']; ?></td>
			<td><?php echo $disciplinaDocente['created_by']; ?></td>
			<td><?php echo $disciplinaDocente['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'disciplina_docentes', 'action' => 'view', $disciplinaDocente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'disciplina_docentes', 'action' => 'edit', $disciplinaDocente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'disciplina_docentes', 'action' => 'delete', $disciplinaDocente['id']), array(), __('Are you sure you want to delete # %s?', $disciplinaDocente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Disciplina Docente'), array('controller' => 'disciplina_docentes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Disciplina Plano Estudos'); ?></h3>
	<?php if (!empty($estadoObjecto['DisciplinaPlanoEstudo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Plano Estudo Id'); ?></th>
		<th><?php echo __('Ano Curricular'); ?></th>
		<th><?php echo __('Semestre Curricular'); ?></th>
		<th><?php echo __('Carga Horaria Teoricas'); ?></th>
		<th><?php echo __('Carga Horaria Praticas'); ?></th>
		<th><?php echo __('Creditos'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Ramo Id'); ?></th>
		<th><?php echo __('Semestre Sequencial'); ?></th>
		<th><?php echo __('Horas Docente'); ?></th>
		<th><?php echo __('Horas Individual'); ?></th>
		<th><?php echo __('Carga Total'); ?></th>
		<th><?php echo __('Ciclo Plano Estudo Id'); ?></th>
		<th><?php echo __('Ciclo Numero'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['DisciplinaPlanoEstudo'] as $disciplinaPlanoEstudo): ?>
		<tr>
			<td><?php echo $disciplinaPlanoEstudo['id']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['plano_estudo_id']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['ano_curricular']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['semestre_curricular']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['carga_horaria_teoricas']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['carga_horaria_praticas']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['creditos']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['disciplina_id']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['codigo']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['ramo_id']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['semestre_sequencial']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['horas_docente']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['horas_individual']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['carga_total']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['ciclo_plano_estudo_id']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['ciclo_numero']; ?></td>
			<td><?php echo $disciplinaPlanoEstudo['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'disciplina_plano_estudos', 'action' => 'view', $disciplinaPlanoEstudo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'disciplina_plano_estudos', 'action' => 'edit', $disciplinaPlanoEstudo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'disciplina_plano_estudos', 'action' => 'delete', $disciplinaPlanoEstudo['id']), array(), __('Are you sure you want to delete # %s?', $disciplinaPlanoEstudo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Disciplina Plano Estudo'), array('controller' => 'disciplina_plano_estudos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Disciplina Unidade Organicas'); ?></h3>
	<?php if (!empty($estadoObjecto['DisciplinaUnidadeOrganica'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th><?php echo __('Unidade Organica Id'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['DisciplinaUnidadeOrganica'] as $disciplinaUnidadeOrganica): ?>
		<tr>
			<td><?php echo $disciplinaUnidadeOrganica['id']; ?></td>
			<td><?php echo $disciplinaUnidadeOrganica['disciplina_id']; ?></td>
			<td><?php echo $disciplinaUnidadeOrganica['unidade_organica_id']; ?></td>
			<td><?php echo $disciplinaUnidadeOrganica['estado_objecto_id']; ?></td>
			<td><?php echo $disciplinaUnidadeOrganica['created']; ?></td>
			<td><?php echo $disciplinaUnidadeOrganica['modified']; ?></td>
			<td><?php echo $disciplinaUnidadeOrganica['created_by']; ?></td>
			<td><?php echo $disciplinaUnidadeOrganica['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'disciplina_unidade_organicas', 'action' => 'view', $disciplinaUnidadeOrganica['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'disciplina_unidade_organicas', 'action' => 'edit', $disciplinaUnidadeOrganica['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'disciplina_unidade_organicas', 'action' => 'delete', $disciplinaUnidadeOrganica['id']), array(), __('Are you sure you want to delete # %s?', $disciplinaUnidadeOrganica['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Disciplina Unidade Organica'), array('controller' => 'disciplina_unidade_organicas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Entidade Contactos'); ?></h3>
	<?php if (!empty($estadoObjecto['EntidadeContacto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Tipo Contacto Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['EntidadeContacto'] as $entidadeContacto): ?>
		<tr>
			<td><?php echo $entidadeContacto['id']; ?></td>
			<td><?php echo $entidadeContacto['entidade_id']; ?></td>
			<td><?php echo $entidadeContacto['tipo_contacto_id']; ?></td>
			<td><?php echo $entidadeContacto['valor']; ?></td>
			<td><?php echo $entidadeContacto['estado_objecto_id']; ?></td>
			<td><?php echo $entidadeContacto['created']; ?></td>
			<td><?php echo $entidadeContacto['modified']; ?></td>
			<td><?php echo $entidadeContacto['created_by']; ?></td>
			<td><?php echo $entidadeContacto['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'entidade_contactos', 'action' => 'view', $entidadeContacto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'entidade_contactos', 'action' => 'edit', $entidadeContacto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'entidade_contactos', 'action' => 'delete', $entidadeContacto['id']), array(), __('Are you sure you want to delete # %s?', $entidadeContacto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entidade Contacto'), array('controller' => 'entidade_contactos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Entidade Identificacaos'); ?></h3>
	<?php if (!empty($estadoObjecto['EntidadeIdentificacao'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entidade Id'); ?></th>
		<th><?php echo __('Documento Identificacao Id'); ?></th>
		<th><?php echo __('Data Emissao'); ?></th>
		<th><?php echo __('Data Validade'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Local Emissao'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['EntidadeIdentificacao'] as $entidadeIdentificacao): ?>
		<tr>
			<td><?php echo $entidadeIdentificacao['id']; ?></td>
			<td><?php echo $entidadeIdentificacao['entidade_id']; ?></td>
			<td><?php echo $entidadeIdentificacao['documento_identificacao_id']; ?></td>
			<td><?php echo $entidadeIdentificacao['data_emissao']; ?></td>
			<td><?php echo $entidadeIdentificacao['data_validade']; ?></td>
			<td><?php echo $entidadeIdentificacao['numero']; ?></td>
			<td><?php echo $entidadeIdentificacao['created']; ?></td>
			<td><?php echo $entidadeIdentificacao['modified']; ?></td>
			<td><?php echo $entidadeIdentificacao['created_by']; ?></td>
			<td><?php echo $entidadeIdentificacao['modified_by']; ?></td>
			<td><?php echo $entidadeIdentificacao['estado_objecto_id']; ?></td>
			<td><?php echo $entidadeIdentificacao['local_emissao']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'entidade_identificacaos', 'action' => 'view', $entidadeIdentificacao['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'entidade_identificacaos', 'action' => 'edit', $entidadeIdentificacao['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'entidade_identificacaos', 'action' => 'delete', $entidadeIdentificacao['id']), array(), __('Are you sure you want to delete # %s?', $entidadeIdentificacao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Entidade Identificacao'), array('controller' => 'entidade_identificacaos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Forma Mudanca Cursos'); ?></h3>
	<?php if (!empty($estadoObjecto['FormaMudancaCurso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['FormaMudancaCurso'] as $formaMudancaCurso): ?>
		<tr>
			<td><?php echo $formaMudancaCurso['id']; ?></td>
			<td><?php echo $formaMudancaCurso['name']; ?></td>
			<td><?php echo $formaMudancaCurso['estado_objecto_id']; ?></td>
			<td><?php echo $formaMudancaCurso['valor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'forma_mudanca_cursos', 'action' => 'view', $formaMudancaCurso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'forma_mudanca_cursos', 'action' => 'edit', $formaMudancaCurso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forma_mudanca_cursos', 'action' => 'delete', $formaMudancaCurso['id']), array(), __('Are you sure you want to delete # %s?', $formaMudancaCurso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Forma Mudanca Curso'), array('controller' => 'forma_mudanca_cursos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Funcao Profissional Roles'); ?></h3>
	<?php if (!empty($estadoObjecto['FuncaoProfissionalRole'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Funcao Profissional Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['FuncaoProfissionalRole'] as $funcaoProfissionalRole): ?>
		<tr>
			<td><?php echo $funcaoProfissionalRole['id']; ?></td>
			<td><?php echo $funcaoProfissionalRole['funcao_profissional_id']; ?></td>
			<td><?php echo $funcaoProfissionalRole['role_id']; ?></td>
			<td><?php echo $funcaoProfissionalRole['created']; ?></td>
			<td><?php echo $funcaoProfissionalRole['modified']; ?></td>
			<td><?php echo $funcaoProfissionalRole['created_by']; ?></td>
			<td><?php echo $funcaoProfissionalRole['modified_by']; ?></td>
			<td><?php echo $funcaoProfissionalRole['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'funcao_profissional_roles', 'action' => 'view', $funcaoProfissionalRole['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'funcao_profissional_roles', 'action' => 'edit', $funcaoProfissionalRole['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'funcao_profissional_roles', 'action' => 'delete', $funcaoProfissionalRole['id']), array(), __('Are you sure you want to delete # %s?', $funcaoProfissionalRole['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Funcao Profissional Role'), array('controller' => 'funcao_profissional_roles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Group Roles'); ?></h3>
	<?php if (!empty($estadoObjecto['GroupRole'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['GroupRole'] as $groupRole): ?>
		<tr>
			<td><?php echo $groupRole['id']; ?></td>
			<td><?php echo $groupRole['group_id']; ?></td>
			<td><?php echo $groupRole['role_id']; ?></td>
			<td><?php echo $groupRole['created']; ?></td>
			<td><?php echo $groupRole['modified']; ?></td>
			<td><?php echo $groupRole['created_by']; ?></td>
			<td><?php echo $groupRole['modified_by']; ?></td>
			<td><?php echo $groupRole['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'group_roles', 'action' => 'view', $groupRole['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'group_roles', 'action' => 'edit', $groupRole['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'group_roles', 'action' => 'delete', $groupRole['id']), array(), __('Are you sure you want to delete # %s?', $groupRole['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Group Role'), array('controller' => 'group_roles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Groups'); ?></h3>
	<?php if (!empty($estadoObjecto['Group'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['Group'] as $group): ?>
		<tr>
			<td><?php echo $group['id']; ?></td>
			<td><?php echo $group['name']; ?></td>
			<td><?php echo $group['descricao']; ?></td>
			<td><?php echo $group['created']; ?></td>
			<td><?php echo $group['modified']; ?></td>
			<td><?php echo $group['created_by']; ?></td>
			<td><?php echo $group['modified_by']; ?></td>
			<td><?php echo $group['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'groups', 'action' => 'view', $group['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'groups', 'action' => 'edit', $group['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'groups', 'action' => 'delete', $group['id']), array(), __('Are you sure you want to delete # %s?', $group['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Groups Users'); ?></h3>
	<?php if (!empty($estadoObjecto['GroupsUser'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['GroupsUser'] as $groupsUser): ?>
		<tr>
			<td><?php echo $groupsUser['id']; ?></td>
			<td><?php echo $groupsUser['user_id']; ?></td>
			<td><?php echo $groupsUser['group_id']; ?></td>
			<td><?php echo $groupsUser['created']; ?></td>
			<td><?php echo $groupsUser['modified']; ?></td>
			<td><?php echo $groupsUser['created_by']; ?></td>
			<td><?php echo $groupsUser['modified_by']; ?></td>
			<td><?php echo $groupsUser['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'groups_users', 'action' => 'view', $groupsUser['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'groups_users', 'action' => 'edit', $groupsUser['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'groups_users', 'action' => 'delete', $groupsUser['id']), array(), __('Are you sure you want to delete # %s?', $groupsUser['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Groups User'), array('controller' => 'groups_users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Messages'); ?></h3>
	<?php if (!empty($estadoObjecto['Message'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Recipient Id'); ?></th>
		<th><?php echo __('Assunto'); ?></th>
		<th><?php echo __('Data Envio'); ?></th>
		<th><?php echo __('Data Leitura'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Data Delete'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['Message'] as $message): ?>
		<tr>
			<td><?php echo $message['id']; ?></td>
			<td><?php echo $message['user_id']; ?></td>
			<td><?php echo $message['recipient_id']; ?></td>
			<td><?php echo $message['assunto']; ?></td>
			<td><?php echo $message['data_envio']; ?></td>
			<td><?php echo $message['data_leitura']; ?></td>
			<td><?php echo $message['estado_objecto_id']; ?></td>
			<td><?php echo $message['data_delete']; ?></td>
			<td><?php echo $message['created']; ?></td>
			<td><?php echo $message['modified']; ?></td>
			<td><?php echo $message['created_by']; ?></td>
			<td><?php echo $message['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'messages', 'action' => 'view', $message['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'messages', 'action' => 'edit', $message['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'messages', 'action' => 'delete', $message['id']), array(), __('Are you sure you want to delete # %s?', $message['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Message'), array('controller' => 'messages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Plano Estudos'); ?></h3>
	<?php if (!empty($estadoObjecto['PlanoEstudo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Duracao'); ?></th>
		<th><?php echo __('Semestresano'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Numero Ciclos'); ?></th>
		<th><?php echo __('Ano Criacao'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['PlanoEstudo'] as $planoEstudo): ?>
		<tr>
			<td><?php echo $planoEstudo['id']; ?></td>
			<td><?php echo $planoEstudo['name']; ?></td>
			<td><?php echo $planoEstudo['curso_id']; ?></td>
			<td><?php echo $planoEstudo['duracao']; ?></td>
			<td><?php echo $planoEstudo['semestresano']; ?></td>
			<td><?php echo $planoEstudo['codigo']; ?></td>
			<td><?php echo $planoEstudo['numero_ciclos']; ?></td>
			<td><?php echo $planoEstudo['ano_criacao']; ?></td>
			<td><?php echo $planoEstudo['estado_objecto_id']; ?></td>
			<td><?php echo $planoEstudo['created']; ?></td>
			<td><?php echo $planoEstudo['modified']; ?></td>
			<td><?php echo $planoEstudo['created_by']; ?></td>
			<td><?php echo $planoEstudo['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'plano_estudos', 'action' => 'view', $planoEstudo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'plano_estudos', 'action' => 'edit', $planoEstudo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'plano_estudos', 'action' => 'delete', $planoEstudo['id']), array(), __('Are you sure you want to delete # %s?', $planoEstudo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Plano Estudo'), array('controller' => 'plano_estudos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Precedencias'); ?></h3>
	<?php if (!empty($estadoObjecto['Precedencia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Disciplina Plano Estudo Id'); ?></th>
		<th><?php echo __('Disciplina Precedente'); ?></th>
		<th><?php echo __('Tipo Precedencia Id'); ?></th>
		<th><?php echo __('Disciplina Id'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Disciplina Plano Estudo Precedente'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['Precedencia'] as $precedencia): ?>
		<tr>
			<td><?php echo $precedencia['id']; ?></td>
			<td><?php echo $precedencia['disciplina_plano_estudo_id']; ?></td>
			<td><?php echo $precedencia['disciplina_precedente']; ?></td>
			<td><?php echo $precedencia['tipo_precedencia_id']; ?></td>
			<td><?php echo $precedencia['disciplina_id']; ?></td>
			<td><?php echo $precedencia['estado_objecto_id']; ?></td>
			<td><?php echo $precedencia['created']; ?></td>
			<td><?php echo $precedencia['modified']; ?></td>
			<td><?php echo $precedencia['created_by']; ?></td>
			<td><?php echo $precedencia['modified_by']; ?></td>
			<td><?php echo $precedencia['disciplina_plano_estudo_precedente']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'precedencias', 'action' => 'view', $precedencia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'precedencias', 'action' => 'edit', $precedencia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'precedencias', 'action' => 'delete', $precedencia['id']), array(), __('Are you sure you want to delete # %s?', $precedencia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Precedencia'), array('controller' => 'precedencias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Roles'); ?></h3>
	<?php if (!empty($estadoObjecto['Role'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['Role'] as $role): ?>
		<tr>
			<td><?php echo $role['id']; ?></td>
			<td><?php echo $role['name']; ?></td>
			<td><?php echo $role['created']; ?></td>
			<td><?php echo $role['modified']; ?></td>
			<td><?php echo $role['created_by']; ?></td>
			<td><?php echo $role['modified_by']; ?></td>
			<td><?php echo $role['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'roles', 'action' => 'view', $role['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'roles', 'action' => 'edit', $role['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'roles', 'action' => 'delete', $role['id']), array(), __('Are you sure you want to delete # %s?', $role['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Unidade Organica Roles'); ?></h3>
	<?php if (!empty($estadoObjecto['UnidadeOrganicaRole'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Unidade Organica Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['UnidadeOrganicaRole'] as $unidadeOrganicaRole): ?>
		<tr>
			<td><?php echo $unidadeOrganicaRole['id']; ?></td>
			<td><?php echo $unidadeOrganicaRole['unidade_organica_id']; ?></td>
			<td><?php echo $unidadeOrganicaRole['role_id']; ?></td>
			<td><?php echo $unidadeOrganicaRole['created_by']; ?></td>
			<td><?php echo $unidadeOrganicaRole['modified_by']; ?></td>
			<td><?php echo $unidadeOrganicaRole['created']; ?></td>
			<td><?php echo $unidadeOrganicaRole['modified']; ?></td>
			<td><?php echo $unidadeOrganicaRole['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'unidade_organica_roles', 'action' => 'view', $unidadeOrganicaRole['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'unidade_organica_roles', 'action' => 'edit', $unidadeOrganicaRole['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'unidade_organica_roles', 'action' => 'delete', $unidadeOrganicaRole['id']), array(), __('Are you sure you want to delete # %s?', $unidadeOrganicaRole['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Unidade Organica Role'), array('controller' => 'unidade_organica_roles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Unidade Organicas'); ?></h3>
	<?php if (!empty($estadoObjecto['UnidadeOrganica'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Nivel Unidade'); ?></th>
		<th><?php echo __('Tipo Unidade Organica Id'); ?></th>
		<th><?php echo __('Area Academica Id'); ?></th>
		<th><?php echo __('Area Unidade Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Director'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Codigo Interno'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['UnidadeOrganica'] as $unidadeOrganica): ?>
		<tr>
			<td><?php echo $unidadeOrganica['id']; ?></td>
			<td><?php echo $unidadeOrganica['name']; ?></td>
			<td><?php echo $unidadeOrganica['nivel_unidade']; ?></td>
			<td><?php echo $unidadeOrganica['tipo_unidade_organica_id']; ?></td>
			<td><?php echo $unidadeOrganica['area_academica_id']; ?></td>
			<td><?php echo $unidadeOrganica['area_unidade_id']; ?></td>
			<td><?php echo $unidadeOrganica['parent_id']; ?></td>
			<td><?php echo $unidadeOrganica['lft']; ?></td>
			<td><?php echo $unidadeOrganica['rght']; ?></td>
			<td><?php echo $unidadeOrganica['estado_objecto_id']; ?></td>
			<td><?php echo $unidadeOrganica['director']; ?></td>
			<td><?php echo $unidadeOrganica['created']; ?></td>
			<td><?php echo $unidadeOrganica['modified']; ?></td>
			<td><?php echo $unidadeOrganica['created_by']; ?></td>
			<td><?php echo $unidadeOrganica['modified_by']; ?></td>
			<td><?php echo $unidadeOrganica['codigo']; ?></td>
			<td><?php echo $unidadeOrganica['codigo_interno']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'unidade_organicas', 'action' => 'view', $unidadeOrganica['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'unidade_organicas', 'action' => 'edit', $unidadeOrganica['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'unidade_organicas', 'action' => 'delete', $unidadeOrganica['id']), array(), __('Are you sure you want to delete # %s?', $unidadeOrganica['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Roles'); ?></h3>
	<?php if (!empty($estadoObjecto['UserRole'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['UserRole'] as $userRole): ?>
		<tr>
			<td><?php echo $userRole['id']; ?></td>
			<td><?php echo $userRole['user_id']; ?></td>
			<td><?php echo $userRole['role_id']; ?></td>
			<td><?php echo $userRole['created']; ?></td>
			<td><?php echo $userRole['modified']; ?></td>
			<td><?php echo $userRole['created_by']; ?></td>
			<td><?php echo $userRole['modified_by']; ?></td>
			<td><?php echo $userRole['estado_objecto_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_roles', 'action' => 'view', $userRole['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_roles', 'action' => 'edit', $userRole['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_roles', 'action' => 'delete', $userRole['id']), array(), __('Are you sure you want to delete # %s?', $userRole['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Role'), array('controller' => 'user_roles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($estadoObjecto['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Codigocartao'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Ultimo Login'); ?></th>
		<th><?php echo __('Codigo Activacao'); ?></th>
		<th><?php echo __('Estado Objecto Id'); ?></th>
		<th><?php echo __('Verificar Permissoes'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Estado Email'); ?></th>
		<th><?php echo __('Timezone'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estadoObjecto['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['codigocartao']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['created_by']; ?></td>
			<td><?php echo $user['modified_by']; ?></td>
			<td><?php echo $user['ultimo_login']; ?></td>
			<td><?php echo $user['codigo_activacao']; ?></td>
			<td><?php echo $user['estado_objecto_id']; ?></td>
			<td><?php echo $user['verificar_permissoes']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['estado_email']; ?></td>
			<td><?php echo $user['timezone']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
