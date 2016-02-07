<div class="estadoMatriculas view">
    <h2><?php echo __('Estado Matricula'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($estadoMatricula['EstadoMatricula']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($estadoMatricula['EstadoMatricula']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Estado Matricula'),
                    ['action' => 'edit', $estadoMatricula['EstadoMatricula']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Estado Matricula'),
                    ['action' => 'delete', $estadoMatricula['EstadoMatricula']['id']], [],
                    __('Are you sure you want to delete # %s?', $estadoMatricula['EstadoMatricula']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Matriculas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Matricula'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Candidaturas'),
                    ['controller' => 'candidaturas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Candidatura'),
                    ['controller' => 'candidaturas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Matriculas'),
                    ['controller' => 'matriculas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Matricula'),
                    ['controller' => 'matriculas', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Candidaturas'); ?></h3>
    <?php if (!empty($estadoMatricula['Candidatura'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Name'); ?></th>
                <th><?php echo __('Escola Nivel Medio Id'); ?></th>
                <th><?php echo __('Ano Conclusao'); ?></th>
                <th><?php echo __('Provincia Conclusao'); ?></th>
                <th><?php echo __('Pais Conclusao'); ?></th>
                <th><?php echo __('Aluno Via Admissao Id'); ?></th>
                <th><?php echo __('Curso Id'); ?></th>
                <th><?php echo __('Ano Candidatura'); ?></th>
                <th><?php echo __('Numero Opcao'); ?></th>
                <th><?php echo __('Numero Candidato'); ?></th>
                <th><?php echo __('Apelido'); ?></th>
                <th><?php echo __('Nomes'); ?></th>
                <th><?php echo __('Tipo Ingresso Id'); ?></th>
                <th><?php echo __('Nome Faculdade'); ?></th>
                <th><?php echo __('Nome Curso'); ?></th>
                <th><?php echo __('Estado Matricula Id'); ?></th>
                <th><?php echo __('Data Matricula'); ?></th>
                <th><?php echo __('Unidade Organica Id'); ?></th>
                <th><?php echo __('Localidade'); ?></th>
                <th><?php echo __('Bolsa Tipo Bolsa Id'); ?></th>
                <th><?php echo __('Numero Estudante'); ?></th>
                <th><?php echo __('Genero Id'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Created By'); ?></th>
                <th><?php echo __('Modified By'); ?></th>
                <th><?php echo __('Estado Civil'); ?></th>
                <th><?php echo __('Nacionalidade'); ?></th>
                <th><?php echo __('Turno Id'); ?></th>
                <th><?php echo __('Nome Pai'); ?></th>
                <th><?php echo __('Nome Mae'); ?></th>
                <th><?php echo __('Data Nascimento'); ?></th>
                <th><?php echo __('Pais Nascimento'); ?></th>
                <th><?php echo __('Provincia Nascimento'); ?></th>
                <th><?php echo __('Cidade Nascimento'); ?></th>
                <th><?php echo __('Nota Conclusao'); ?></th>
                <th><?php echo __('Pais Morada'); ?></th>
                <th><?php echo __('Provincia Morada'); ?></th>
                <th><?php echo __('Cidade Morada'); ?></th>
                <th><?php echo __('Bairro Morada'); ?></th>
                <th><?php echo __('Avenida Rua Morada'); ?></th>
                <th><?php echo __('Caixa Postal Morada'); ?></th>
                <th><?php echo __('Quarteirao Morada'); ?></th>
                <th><?php echo __('Telemovel'); ?></th>
                <th><?php echo __('Email'); ?></th>
                <th><?php echo __('Nome Emergencia'); ?></th>
                <th><?php echo __('Telemovel Emergencia'); ?></th>
                <th><?php echo __('Grau Parentesco'); ?></th>
                <th><?php echo __('Documento Identificacao Id'); ?></th>
                <th><?php echo __('Documento Identificacao Numero'); ?></th>
                <th><?php echo __('Documento Identificacao Data Emissao'); ?></th>
                <th><?php echo __('Documento Identificacao Local Emissao'); ?></th>
                <th><?php echo __('Documento Identificacao Data Validade'); ?></th>
                <th><?php echo __('Cidade Conclusao'); ?></th>
                <th><?php echo __('Estado Candidatura Id'); ?></th>
                <th><?php echo __('Codigo Escola Admissao'); ?></th>
                <th><?php echo __('Nome Escola Nivel Medio'); ?></th>
                <th><?php echo __('Curso Opcao1'); ?></th>
                <th><?php echo __('Curso Opcao2'); ?></th>
                <th><?php echo __('Codigo Curso Admitido Admissao'); ?></th>
                <th><?php echo __('Ano Lectivo Admissao'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($estadoMatricula['Candidatura'] as $candidatura): ?>
                <tr>
                    <td><?php echo $candidatura['id']; ?></td>
                    <td><?php echo $candidatura['name']; ?></td>
                    <td><?php echo $candidatura['escola_nivel_medio_id']; ?></td>
                    <td><?php echo $candidatura['ano_conclusao']; ?></td>
                    <td><?php echo $candidatura['provincia_conclusao']; ?></td>
                    <td><?php echo $candidatura['pais_conclusao']; ?></td>
                    <td><?php echo $candidatura['aluno_via_admissao_id']; ?></td>
                    <td><?php echo $candidatura['curso_id']; ?></td>
                    <td><?php echo $candidatura['ano_candidatura']; ?></td>
                    <td><?php echo $candidatura['numero_opcao']; ?></td>
                    <td><?php echo $candidatura['numero_candidato']; ?></td>
                    <td><?php echo $candidatura['apelido']; ?></td>
                    <td><?php echo $candidatura['nomes']; ?></td>
                    <td><?php echo $candidatura['tipo_ingresso_id']; ?></td>
                    <td><?php echo $candidatura['nome_faculdade']; ?></td>
                    <td><?php echo $candidatura['nome_curso']; ?></td>
                    <td><?php echo $candidatura['estado_matricula_id']; ?></td>
                    <td><?php echo $candidatura['data_matricula']; ?></td>
                    <td><?php echo $candidatura['unidade_organica_id']; ?></td>
                    <td><?php echo $candidatura['localidade']; ?></td>
                    <td><?php echo $candidatura['bolsa_tipo_bolsa_id']; ?></td>
                    <td><?php echo $candidatura['numero_estudante']; ?></td>
                    <td><?php echo $candidatura['genero_id']; ?></td>
                    <td><?php echo $candidatura['created']; ?></td>
                    <td><?php echo $candidatura['modified']; ?></td>
                    <td><?php echo $candidatura['created_by']; ?></td>
                    <td><?php echo $candidatura['modified_by']; ?></td>
                    <td><?php echo $candidatura['estado_civil']; ?></td>
                    <td><?php echo $candidatura['nacionalidade']; ?></td>
                    <td><?php echo $candidatura['turno_id']; ?></td>
                    <td><?php echo $candidatura['nome_pai']; ?></td>
                    <td><?php echo $candidatura['nome_mae']; ?></td>
                    <td><?php echo $candidatura['data_nascimento']; ?></td>
                    <td><?php echo $candidatura['pais_nascimento']; ?></td>
                    <td><?php echo $candidatura['provincia_nascimento']; ?></td>
                    <td><?php echo $candidatura['cidade_nascimento']; ?></td>
                    <td><?php echo $candidatura['nota_conclusao']; ?></td>
                    <td><?php echo $candidatura['pais_morada']; ?></td>
                    <td><?php echo $candidatura['provincia_morada']; ?></td>
                    <td><?php echo $candidatura['cidade_morada']; ?></td>
                    <td><?php echo $candidatura['bairro_morada']; ?></td>
                    <td><?php echo $candidatura['avenida_rua_morada']; ?></td>
                    <td><?php echo $candidatura['caixa_postal_morada']; ?></td>
                    <td><?php echo $candidatura['quarteirao_morada']; ?></td>
                    <td><?php echo $candidatura['telemovel']; ?></td>
                    <td><?php echo $candidatura['email']; ?></td>
                    <td><?php echo $candidatura['nome_emergencia']; ?></td>
                    <td><?php echo $candidatura['telemovel_emergencia']; ?></td>
                    <td><?php echo $candidatura['grau_parentesco']; ?></td>
                    <td><?php echo $candidatura['documento_identificacao_id']; ?></td>
                    <td><?php echo $candidatura['documento_identificacao_numero']; ?></td>
                    <td><?php echo $candidatura['documento_identificacao_data_emissao']; ?></td>
                    <td><?php echo $candidatura['documento_identificacao_local_emissao']; ?></td>
                    <td><?php echo $candidatura['documento_identificacao_data_validade']; ?></td>
                    <td><?php echo $candidatura['cidade_conclusao']; ?></td>
                    <td><?php echo $candidatura['estado_candidatura_id']; ?></td>
                    <td><?php echo $candidatura['codigo_escola_admissao']; ?></td>
                    <td><?php echo $candidatura['nome_escola_nivel_medio']; ?></td>
                    <td><?php echo $candidatura['curso_opcao1']; ?></td>
                    <td><?php echo $candidatura['curso_opcao2']; ?></td>
                    <td><?php echo $candidatura['codigo_curso_admitido_admissao']; ?></td>
                    <td><?php echo $candidatura['ano_lectivo_admissao']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['controller' => 'candidaturas', 'action' => 'view', $candidatura['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['controller' => 'candidaturas', 'action' => 'edit', $candidatura['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['controller' => 'candidaturas', 'action' => 'delete', $candidatura['id']], [],
                                __('Are you sure you want to delete # %s?', $candidatura['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Candidatura'),
                        ['controller' => 'candidaturas', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Matriculas'); ?></h3>
    <?php if (!empty($estadoMatricula['Matricula'])): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?php echo __('Id'); ?></th>
                <th><?php echo __('Codigo'); ?></th>
                <th><?php echo __('Aluno Id'); ?></th>
                <th><?php echo __('Curso Id'); ?></th>
                <th><?php echo __('Plano Estudo Id'); ?></th>
                <th><?php echo __('Data'); ?></th>
                <th><?php echo __('Estado Matricula Id'); ?></th>
                <th><?php echo __('Modified'); ?></th>
                <th><?php echo __('Created'); ?></th>
                <th><?php echo __('User Id'); ?></th>
                <th><?php echo __('Ano Lectivo Id'); ?></th>
                <th><?php echo __('Turno Id'); ?></th>
                <th><?php echo __('Nivel'); ?></th>
                <th><?php echo __('Created By'); ?></th>
                <th><?php echo __('Modified By'); ?></th>
                <th><?php echo __('Tipo Matricula Id'); ?></th>
                <th><?php echo __('Regime Lectivo Id'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($estadoMatricula['Matricula'] as $matricula): ?>
                <tr>
                    <td><?php echo $matricula['id']; ?></td>
                    <td><?php echo $matricula['codigo']; ?></td>
                    <td><?php echo $matricula['aluno_id']; ?></td>
                    <td><?php echo $matricula['curso_id']; ?></td>
                    <td><?php echo $matricula['plano_estudo_id']; ?></td>
                    <td><?php echo $matricula['data']; ?></td>
                    <td><?php echo $matricula['estado_matricula_id']; ?></td>
                    <td><?php echo $matricula['modified']; ?></td>
                    <td><?php echo $matricula['created']; ?></td>
                    <td><?php echo $matricula['user_id']; ?></td>
                    <td><?php echo $matricula['ano_lectivo_id']; ?></td>
                    <td><?php echo $matricula['turno_id']; ?></td>
                    <td><?php echo $matricula['nivel']; ?></td>
                    <td><?php echo $matricula['created_by']; ?></td>
                    <td><?php echo $matricula['modified_by']; ?></td>
                    <td><?php echo $matricula['tipo_matricula_id']; ?></td>
                    <td><?php echo $matricula['regime_lectivo_id']; ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'),
                                ['controller' => 'matriculas', 'action' => 'view', $matricula['id']]); ?>
                        <?php echo $this->Html->link(__('Edit'),
                                ['controller' => 'matriculas', 'action' => 'edit', $matricula['id']]); ?>
                        <?php echo $this->Form->postLink(__('Delete'),
                                ['controller' => 'matriculas', 'action' => 'delete', $matricula['id']], [],
                                __('Are you sure you want to delete # %s?', $matricula['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Matricula'),
                        ['controller' => 'matriculas', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
