<div class="grauAcademicos view">
    <h2><?php echo __('Grau Academico'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($grauAcademico['GrauAcademico']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($grauAcademico['GrauAcademico']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Grau Academico'),
                    ['action' => 'edit', $grauAcademico['GrauAcademico']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Grau Academico'),
                    ['action' => 'delete', $grauAcademico['GrauAcademico']['id']], [],
                    __('Are you sure you want to delete # %s?', $grauAcademico['GrauAcademico']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Grau Academicos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Grau Academico'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Candidato Alumnis'),
                    ['controller' => 'candidato_alumnis', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Candidato Alumni'),
                    ['controller' => 'candidato_alumnis', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cursos'), ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Funcionarios'),
                    ['controller' => 'funcionarios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Funcionario'),
                    ['controller' => 'funcionarios', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Candidato Alumnis'); ?></h3>
    <?php if (!empty($grauAcademico['AlumniCandidatoAlumni'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Apelido'); ?></th>
                <th><?php echo __('Nomes'); ?></th>
                <th><?php echo __('Data Nascimento'); ?></th>
                <th><?php echo __('Nome Pai'); ?></th>
                <th><?php echo __('Nome Mae'); ?></th>
                <th><?php echo __('Genero Id'); ?></th>
                <th><?php echo __('Estado Civil Id'); ?></th>
                <th><?php echo __('Pais Nascimento'); ?></th>
                <th><?php echo __('Provincia Nascimento'); ?></th>
                <th><?php echo __('Cidade Nascimento'); ?></th>
                <th><?php echo __('Pais Morada'); ?></th>
                <th><?php echo __('Provincia Morada'); ?></th>
                <th><?php echo __('Cidade Morada'); ?></th>
                <th><?php echo __('Numero Estudante'); ?></th>
                <th><?php echo __('Email'); ?></th>
                <th><?php echo __('Telemovel'); ?></th>
                <th><?php echo __('Unidade Organica Id'); ?></th>
                <th><?php echo __('Ano Conclusao'); ?></th>
                <th><?php echo __('Curso Id'); ?></th>
                <th><?php echo __('Grau Academico Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Created By'); ?></th>
                <th><?php echo __('Modified By'); ?></th>
                <th><?php echo __('Observacoes'); ?></th>
                <th><?php echo __('Documento Identificacao Id'); ?></th>
                <th><?php echo __('Documento Identificacao Numero'); ?></th>
                <th><?php echo __('Documento Identificacao Data Emissao'); ?></th>
                <th><?php echo __('Documento Identificacao Local Emissao'); ?></th>
                <th><?php echo __('Grau Academico Actual'); ?></th>
                <th><?php echo __('Ano Ingresso Uem'); ?></th>
                <th><?php echo __('Local Trabalho Actual'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($grauAcademico['AlumniCandidatoAlumni'] as $candidatoAlumni): ?>
                <tr>
                    <td><?php echo $candidatoAlumni['id']; ?></td>
                    <td><?php echo $candidatoAlumni['apelido']; ?></td>
                    <td><?php echo $candidatoAlumni['nomes']; ?></td>
                    <td><?php echo $candidatoAlumni['data_nascimento']; ?></td>
                    <td><?php echo $candidatoAlumni['nome_pai']; ?></td>
                    <td><?php echo $candidatoAlumni['nome_mae']; ?></td>
                    <td><?php echo $candidatoAlumni['genero_id']; ?></td>
                    <td><?php echo $candidatoAlumni['estado_civil_id']; ?></td>
                    <td><?php echo $candidatoAlumni['pais_nascimento']; ?></td>
                    <td><?php echo $candidatoAlumni['provincia_nascimento']; ?></td>
                    <td><?php echo $candidatoAlumni['cidade_nascimento']; ?></td>
                    <td><?php echo $candidatoAlumni['pais_morada']; ?></td>
                    <td><?php echo $candidatoAlumni['provincia_morada']; ?></td>
                    <td><?php echo $candidatoAlumni['cidade_morada']; ?></td>
                    <td><?php echo $candidatoAlumni['numero_estudante']; ?></td>
                    <td><?php echo $candidatoAlumni['email']; ?></td>
                    <td><?php echo $candidatoAlumni['telemovel']; ?></td>
                    <td><?php echo $candidatoAlumni['unidade_organica_id']; ?></td>
                    <td><?php echo $candidatoAlumni['ano_conclusao']; ?></td>
                    <td><?php echo $candidatoAlumni['curso_id']; ?></td>
                    <td><?php echo $candidatoAlumni['grau_academico_id']; ?></td>
                    <td><?php echo $candidatoAlumni['created']; ?></td>
                    <td><?php echo $candidatoAlumni['modified']; ?></td>
                    <td><?php echo $candidatoAlumni['created_by']; ?></td>
                    <td><?php echo $candidatoAlumni['modified_by']; ?></td>
                    <td><?php echo $candidatoAlumni['observacoes']; ?></td>
                    <td><?php echo $candidatoAlumni['documento_identificacao_id']; ?></td>
                    <td><?php echo $candidatoAlumni['documento_identificacao_numero']; ?></td>
                    <td><?php echo $candidatoAlumni['documento_identificacao_data_emissao']; ?></td>
                    <td><?php echo $candidatoAlumni['documento_identificacao_local_emissao']; ?></td>
                    <td><?php echo $candidatoAlumni['grau_academico_actual']; ?></td>
                    <td><?php echo $candidatoAlumni['ano_ingresso_uem']; ?></td>
                    <td><?php echo $candidatoAlumni['local_trabalho_actual']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['controller' => 'candidato_alumnis', 'action' => 'view', $candidatoAlumni['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['controller' => 'candidato_alumnis', 'action' => 'edit', $candidatoAlumni['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['controller' => 'candidato_alumnis', 'action' => 'delete', $candidatoAlumni['id']], [],
                                __('Are you sure you want to delete # %s?', $candidatoAlumni['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Candidato Alumni'),
                        ['controller' => 'candidato_alumnis', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Cursos'); ?></h3>
    <?php if (!empty($grauAcademico['Curso'])): ?>
        <table cellpadding="0" cellspacing="0">
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
            <?php foreach ($grauAcademico['Curso'] as $curso): ?>
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
                        <?php echo $this->Html->link(__('View'),
                                ['controller' => 'cursos', 'action' => 'view', $curso['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['controller' => 'cursos', 'action' => 'edit', $curso['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['controller' => 'cursos', 'action' => 'delete', $curso['id']], [],
                                __('Are you sure you want to delete # %s?', $curso['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Funcionarios'); ?></h3>
    <?php if (!empty($grauAcademico['Funcionario'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Grau Academico Id'); ?></th>
                <th><?php echo __('Cargo Id'); ?></th>
                <th><?php echo __('Superior Hierarquico'); ?></th>
                <th><?php echo __('Data Inicio'); ?></th>
                <th><?php echo __('Tipo Funcionario Id'); ?></th>
                <th><?php echo __('Codigo'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Entidade Id'); ?></th>
                <th><?php echo __('Unidade Organica Id'); ?></th>
                <th><?php echo __('Funcao Profissional Id'); ?></th>
                <th><?php echo __('Categoria Funcionario Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($grauAcademico['Funcionario'] as $funcionario): ?>
                <tr>
                    <td><?php echo $funcionario['id']; ?></td>
                    <td><?php echo $funcionario['user_id']; ?></td>
                    <td><?php echo $funcionario['grau_academico_id']; ?></td>
                    <td><?php echo $funcionario['cargo_id']; ?></td>
                    <td><?php echo $funcionario['superior_hierarquico']; ?></td>
                    <td><?php echo $funcionario['data_inicio']; ?></td>
                    <td><?php echo $funcionario['tipo_funcionario_id']; ?></td>
                    <td><?php echo $funcionario['codigo']; ?></td>
                    <td><?php echo $funcionario['created']; ?></td>
                    <td><?php echo $funcionario['modified']; ?></td>
                    <td><?php echo $funcionario['entidade_id']; ?></td>
                    <td><?php echo $funcionario['unidade_organica_id']; ?></td>
                    <td><?php echo $funcionario['funcao_profissional_id']; ?></td>
                    <td><?php echo $funcionario['categoria_funcionario_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['controller' => 'funcionarios', 'action' => 'view', $funcionario['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['controller' => 'funcionarios', 'action' => 'edit', $funcionario['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['controller' => 'funcionarios', 'action' => 'delete', $funcionario['id']], [],
                                __('Are you sure you want to delete # %s?', $funcionario['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Funcionario'),
                        ['controller' => 'funcionarios', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
