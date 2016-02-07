<div class="regaliaSocials view">
    <h2><?php echo __('Regalia Social'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($regaliaSocial['RegaliaSocial']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($regaliaSocial['RegaliaSocial']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Regalia Social'),
                    ['action' => 'edit', $regaliaSocial['RegaliaSocial']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Regalia Social'),
                    ['action' => 'delete', $regaliaSocial['RegaliaSocial']['id']], null,
                    __('Are you sure you want to delete # %s?', $regaliaSocial['RegaliaSocial']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Regalia Socials'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Regalia Social'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Candidato Graduacaos'),
                    ['controller' => 'candidato_graduacaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Candidato Graduacao'),
                    ['controller' => 'candidato_graduacaos', 'action' => 'add']); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Candidato Graduacaos'); ?></h3>
    <?php if (!empty($regaliaSocial['CandidatoGraduacao'])): ?>
        <table cellpadding="0" cellspacing="0">
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
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($regaliaSocial['CandidatoGraduacao'] as $candidatoGraduacao): ?>
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
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), [
                                'controller' => 'candidato_graduacaos',
                                'action'     => 'view',
                                $candidatoGraduacao['id'],
                        ]); ?>
                        <?php echo $this->Html->link(__('Edit'), [
                                'controller' => 'candidato_graduacaos',
                                'action'     => 'edit',
                                $candidatoGraduacao['id'],
                        ]); ?>
                        <?php echo $this->Form->postLink(__('Delete'), [
                                'controller' => 'candidato_graduacaos',
                                'action'     => 'delete',
                                $candidatoGraduacao['id'],
                        ], null, __('Are you sure you want to delete # %s?', $candidatoGraduacao['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Candidato Graduacao'),
                        ['controller' => 'candidato_graduacaos', 'action' => 'add']); ?> </li>
        </ul>
    </div>
</div>
