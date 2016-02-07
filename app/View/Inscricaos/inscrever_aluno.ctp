<div class="table">
    <?php echo $this->Form->create('Inscricao',
            ['url' => ['controller' => 'inscricaos', 'action' => 'inscrever_aluno', $aluno_id]]); ?>

    <fieldset>
        <legend>Disciplinas por se Inscrever</legend>
        <table class="listingform" cellpadding="0" cellspacing="0">
            <?php
                $ii = 0;
                foreach ($turmas as $turma) {

                    ?>
                    <tr>
                        <td><?php echo $this->Form->checkbox('Inscricao.' . $ii . '.turma_id',
                                    ['hiddenField' => false, 'value' => $turma['Turma']['id'], 'div' => false]); ?>
                            <label><?php echo $turma['Turma']['id'] . ' - ' . $turma['Disciplina']['name']; ?></label>
                        </td>
                    </tr>
                    <?php echo $this->Form->hidden('Inscricao.' . $ii . '.aluno_id', ['value' => $aluno_id]);
                    echo $this->Form->hidden('Inscricao.' . $ii . '.estadoinscricao_id', ['value' => 1]);
                    $ii++;
                }
            ?>
        </table>
    </fieldset>
    <fieldset>
        <legend>Detalhes de Pagamento</legend>
        <table class="listingform" cellpadding="0" cellspacing="0">
            <?php


                echo $this->Form->input('Pagamento.talao', [
                        'checked'     => 'true',
                        'disabled'    => true,
                        'hiddenField' => false,
                        'type'        => 'checkbox',
                        'label'       => 'Registrar também o pagamento da inscrição',
                        'before'      => '<tr><td>',
                        'between'     => '',
                        'after'       => '</td></tr>',
                        'div'         => false,
                ]);
            ?>
            <tr>
                <td colspan="2"></td>
            </tr>
        </table>
    </fieldset>
    <?php echo $this->Form->end(__('GRAVAR', true)); ?>
</div>
