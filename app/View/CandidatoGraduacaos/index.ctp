<div class="candidatoGraduacaos index">
    <h2><?php echo __('Candidato Graduacaos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
            <th><?php echo $this->Paginator->sort('cerimonia_graduacao_id'); ?></th>
            <th><?php echo $this->Paginator->sort('pedido_certificado'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_objecto_id'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_candidatura_id'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th><?php echo $this->Paginator->sort('created_by'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_by'); ?></th>
            <th><?php echo $this->Paginator->sort('ano_conclusao'); ?></th>
            <th><?php echo $this->Paginator->sort('data_defesa'); ?></th>
            <th><?php echo $this->Paginator->sort('media_defesa'); ?></th>
            <th><?php echo $this->Paginator->sort('media_final'); ?></th>
            <th><?php echo $this->Paginator->sort('apelido'); ?></th>
            <th><?php echo $this->Paginator->sort('nomes'); ?></th>
            <th><?php echo $this->Paginator->sort('data_nascimento'); ?></th>
            <th><?php echo $this->Paginator->sort('naturalidade'); ?></th>
            <th><?php echo $this->Paginator->sort('localidade'); ?></th>
            <th><?php echo $this->Paginator->sort('distrito_nascimento'); ?></th>
            <th><?php echo $this->Paginator->sort('provincia_nascimento'); ?></th>
            <th><?php echo $this->Paginator->sort('pais_nascimento'); ?></th>
            <th><?php echo $this->Paginator->sort('genero_id'); ?></th>
            <th><?php echo $this->Paginator->sort('nacionalidade'); ?></th>
            <th><?php echo $this->Paginator->sort('estado_civil_id'); ?></th>
            <th><?php echo $this->Paginator->sort('regime_estudo_id'); ?></th>
            <th><?php echo $this->Paginator->sort('regalia_social_id'); ?></th>
            <th><?php echo $this->Paginator->sort('data_candidatura'); ?></th>
            <th><?php echo $this->Paginator->sort('telemovel'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($candidatoGraduacaos as $candidatoGraduacao): ?>
            <tr>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['id']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($candidatoGraduacao['Aluno']['id'],
                            ['controller' => 'alunos', 'action' => 'view', $candidatoGraduacao['Aluno']['id']]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($candidatoGraduacao['CerimoniaGraduacao']['name'], [
                            'controller' => 'cerimonia_graduacaos',
                            'action'     => 'view',
                            $candidatoGraduacao['CerimoniaGraduacao']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['pedido_certificado']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($candidatoGraduacao['EstadoObjecto']['name'], [
                            'controller' => 'estado_objectos',
                            'action'     => 'view',
                            $candidatoGraduacao['EstadoObjecto']['id'],
                    ]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($candidatoGraduacao['EstadoCandidatura']['name'], [
                            'controller' => 'estado_candidaturas',
                            'action'     => 'view',
                            $candidatoGraduacao['EstadoCandidatura']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['created']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['modified']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['created_by']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['modified_by']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['ano_conclusao']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['data_defesa']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['media_defesa']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['media_final']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['apelido']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['nomes']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['data_nascimento']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['naturalidade']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['localidade']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['distrito_nascimento']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['provincia_nascimento']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['pais_nascimento']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($candidatoGraduacao['Genero']['name'],
                            ['controller' => 'generos', 'action' => 'view', $candidatoGraduacao['Genero']['id']]); ?>
                </td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['nacionalidade']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($candidatoGraduacao['EstadoCivil']['name'], [
                            'controller' => 'estado_civils',
                            'action'     => 'view',
                            $candidatoGraduacao['EstadoCivil']['id'],
                    ]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($candidatoGraduacao['RegimeEstudo']['name'], [
                            'controller' => 'regime_estudos',
                            'action'     => 'view',
                            $candidatoGraduacao['RegimeEstudo']['id'],
                    ]); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($candidatoGraduacao['RegaliaSocial']['name'], [
                            'controller' => 'regalia_socials',
                            'action'     => 'view',
                            $candidatoGraduacao['RegaliaSocial']['id'],
                    ]); ?>
                </td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['data_candidatura']); ?>&nbsp;</td>
                <td><?php echo h($candidatoGraduacao['CandidatoGraduacao']['telemovel']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'),
                            ['action' => 'view', $candidatoGraduacao['CandidatoGraduacao']['id']]); ?>
                    <?php echo $this->Html->link(__('Edit'),
                            ['action' => 'edit', $candidatoGraduacao['CandidatoGraduacao']['id']]); ?>
                    <?php echo $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $candidatoGraduacao['CandidatoGraduacao']['id']], null,
                            __('Are you sure you want to delete # %s?',
                                    $candidatoGraduacao['CandidatoGraduacao']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
            echo $this->Paginator->counter([
                    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'),
            ]);
        ?>    </p>
    <div class="paging">
        <?php
            echo $this->Paginator->prev('< ' . __('previous'), [], null, ['class' => 'prev disabled']);
            echo $this->Paginator->numbers(['separator' => '']);
            echo $this->Paginator->next(__('next') . ' >', [], null, ['class' => 'next disabled']);
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Candidato Graduacao'), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Alunos'), ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno'), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cerimonia Graduacaos'),
                    ['controller' => 'cerimonia_graduacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Cerimonia Graduacao'),
                    ['controller' => 'cerimonia_graduacaos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Candidaturas'),
                    ['controller' => 'estado_candidaturas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Candidatura'),
                    ['controller' => 'estado_candidaturas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Generos'), ['controller' => 'generos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Genero'), ['controller' => 'generos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Civils'),
                    ['controller' => 'estado_civils', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Civil'),
                    ['controller' => 'estado_civils', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Regime Estudos'),
                    ['controller' => 'regime_estudos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Regime Estudo'),
                    ['controller' => 'regime_estudos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Regalia Socials'),
                    ['controller' => 'regalia_socials', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Regalia Social'),
                    ['controller' => 'regalia_socials', 'action' => 'add']); ?> </li>
    </ul>
</div>
