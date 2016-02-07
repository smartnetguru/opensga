<div class="candidatoGraduacaos form">
    <?php echo $this->Form->create('CandidatoGraduacao'); ?>
    <fieldset>
        <legend><?php echo __('Add Candidato Graduacao'); ?></legend>
        <?php
            echo $this->Form->input('aluno_id');
            echo $this->Form->input('cerimonia_graduacao_id');
            echo $this->Form->input('pedido_certificado');
            echo $this->Form->input('estado_objecto_id');
            echo $this->Form->input('estado_candidatura_id');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
            echo $this->Form->input('ano_conclusao');
            echo $this->Form->input('data_defesa');
            echo $this->Form->input('media_defesa');
            echo $this->Form->input('media_final');
            echo $this->Form->input('apelido');
            echo $this->Form->input('nomes');
            echo $this->Form->input('data_nascimento');
            echo $this->Form->input('naturalidade');
            echo $this->Form->input('localidade');
            echo $this->Form->input('distrito_nascimento');
            echo $this->Form->input('provincia_nascimento');
            echo $this->Form->input('pais_nascimento');
            echo $this->Form->input('genero_id');
            echo $this->Form->input('nacionalidade');
            echo $this->Form->input('estado_civil_id');
            echo $this->Form->input('regime_estudo_id');
            echo $this->Form->input('regalia_social_id');
            echo $this->Form->input('data_candidatura');
            echo $this->Form->input('telemovel');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Candidato Graduacaos'), ['action' => 'index']); ?></li>
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
