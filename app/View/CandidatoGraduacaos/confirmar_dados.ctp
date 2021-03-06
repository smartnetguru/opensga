<div class="candidatoGraduacaos view">
    <h2><?php echo __('Candidato Graduacao'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Aluno'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatoGraduacao['Aluno']['id'],
                    ['controller' => 'alunos', 'action' => 'view', $candidatoGraduacao['Aluno']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cerimonia Graduacao'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatoGraduacao['CerimoniaGraduacao']['name'], [
                    'controller' => 'cerimonia_graduacaos',
                    'action'     => 'view',
                    $candidatoGraduacao['CerimoniaGraduacao']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pedido Certificado'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['pedido_certificado']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatoGraduacao['EstadoObjecto']['name'], [
                    'controller' => 'estado_objectos',
                    'action'     => 'view',
                    $candidatoGraduacao['EstadoObjecto']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Candidatura'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatoGraduacao['EstadoCandidatura']['name'], [
                    'controller' => 'estado_candidaturas',
                    'action'     => 'view',
                    $candidatoGraduacao['EstadoCandidatura']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ano Conclusao'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['ano_conclusao']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Defesa'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['data_defesa']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Media Defesa'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['media_defesa']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Media Final'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['media_final']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Apelido'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['apelido']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nomes'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['nomes']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Nascimento'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['data_nascimento']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Naturalidade'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['naturalidade']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Localidade'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['localidade']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Distrito Nascimento'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['distrito_nascimento']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Provincia Nascimento'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['provincia_nascimento']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pais Nascimento'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['pais_nascimento']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Genero'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatoGraduacao['Genero']['name'],
                    ['controller' => 'generos', 'action' => 'view', $candidatoGraduacao['Genero']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nacionalidade'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['nacionalidade']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Civil'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatoGraduacao['EstadoCivil']['name'],
                    ['controller' => 'estado_civils', 'action' => 'view', $candidatoGraduacao['EstadoCivil']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Regime Estudo'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatoGraduacao['RegimeEstudo']['name'], [
                    'controller' => 'regime_estudos',
                    'action'     => 'view',
                    $candidatoGraduacao['RegimeEstudo']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Regalia Social'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatoGraduacao['RegaliaSocial']['name'], [
                    'controller' => 'regalia_socials',
                    'action'     => 'view',
                    $candidatoGraduacao['RegaliaSocial']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Candidatura'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['data_candidatura']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Telemovel'); ?></dt>
        <dd>
            <?php echo h($candidatoGraduacao['CandidatoGraduacao']['telemovel']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Candidato Graduacao'),
                    ['action' => 'edit', $candidatoGraduacao['CandidatoGraduacao']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Candidato Graduacao'),
                    ['action' => 'delete', $candidatoGraduacao['CandidatoGraduacao']['id']], null,
                    __('Are you sure you want to delete # %s?',
                            $candidatoGraduacao['CandidatoGraduacao']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Candidato Graduacaos'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Candidato Graduacao'), ['action' => 'add']); ?> </li>
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
