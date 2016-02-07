<?php //include('menu.ctp'); ?>

<div class="projectos form" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de Funcionarios', true)), ['action' => 'index'],
                ['class' => 'button']); ?>
        <h1><?php echo __('Funcionario - editar'); ?></h1>

    </div>
    <div class="table">

        <?php
            //O
            echo $this->Form->create('Funcionario'); ?>
        <table class="listingform" cellpadding="0" cellspacing="0">
            <tr>
                <th class="full" colspan="2">Ficha do Funcionario</th>
            </tr>
            <tr>
                <th class="full" colspan="2">InformaÃƒÂ§ÃƒÂ£o Pessoal</th>
                <?php
                    //echo $this->Form->input('user_id',array('label'=>'codigo','before'=>'<tr><td>','between'=>'</td><td>','after'=>'</td></tr>','div'=>false));
                    echo $this->Form->input('name', [
                            'label'   => 'Nome',
                            'size'    => '60',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('foto', [
                            'type'    => 'file',
                            'label'   => 'Foto',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('tg0019genero_id', [
                            'empty'   => '--seleccione--',
                            'label'   => 'Genero',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('tg0001grauacademico_id', [
                            'empty'   => '--seleccione--',
                            'label'   => 'Grau Academico',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('datanascimento', [
                            'dateFormat' => 'DMY',
                            'minYear'    => '1930',
                            'monthNames' => [
                                    'Janeiro',
                                    'Fevereiro',
                                    'Marco',
                                    'Abril',
                                    'Maio',
                                    'Junho',
                                    'Julho',
                                    'Agosto',
                                    'Setembro',
                                    'Outubro',
                                    'Novembro',
                                    'Dezembro',
                            ],
                            'label'      => 'Data de Nascimento',
                            'before'     => '<tr><td>',
                            'between'    => '</td><td>',
                            'after'      => '</td></tr>',
                            'div'        => false,
                    ]);
                    echo $this->Form->input('tg0004cidade_id', [
                            'empty'   => '--seleccione--',
                            'label'   => 'Naturalidade',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);

                ?></tr>
            <tr>
                <th class="full" colspan="2">Detalhes de DocumentoIdentificacao</th>
                <?php
                    echo $this->Form->input('tg0002paise_id', [
                            'empty'   => '--seleccione--',
                            'label'   => 'Nacionalidade',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('tg0009documento_id', [
                            'empty'   => '--seleccione--',
                            'label'   => 'Tipo de Identificacao',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('numdocid', [
                            'label'   => 'Numero de DocumentoIdentificacao',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('docdataemissao', [
                            'dateFormat' => 'DMY',
                            'monthNames' => [
                                    'Janeiro',
                                    'Fevereiro',
                                    'Marco',
                                    'Abril',
                                    'Maio',
                                    'Junho',
                                    'Julho',
                                    'Agosto',
                                    'Setembro',
                                    'Outubro',
                                    'Novembro',
                                    'Dezembro',
                            ],
                            'label'      => 'Data de EmissÃƒÂ£o',
                            'before'     => '<tr><td>',
                            'between'    => '</td><td>',
                            'after'      => '</td></tr>',
                            'div'        => false,
                    ]);
                    echo $this->Form->input('doclocalemissao', [
                            'label'   => 'Local de EmissÃƒÂ£o',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                ?>
            </tr>
            <tr>
                <th class="full" colspan="2">Detalhes de DomicÃƒÂ­lio e Contactos</th>
                <?php
                    echo $this->Form->input('moradarua', [
                            'label'   => 'Endereco',
                            'size'    => '60',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('tg0004cidade_id', [
                            'empty'   => '--seleccione--',
                            'label'   => 'Cidade',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('moradacpostal', [
                            'label'   => 'Caixa Postal',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('email', [
                            'label'   => 'Email',
                            'size'    => '30',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('telefone', [
                            'label'   => 'Telefone',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('telemovel', [
                            'label'   => 'Telemovel',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                ?>
            </tr>
            <tr>
                <th class="full" colspan="2">Detalhes Institucionais</th>
                <?php
                    echo $this->Form->input('datainicio', [
                            'dateFormat' => 'DMY',
                            'monthNames' => [
                                    'Janeiro',
                                    'Fevereiro',
                                    'Marco',
                                    'Abril',
                                    'Maio',
                                    'Junho',
                                    'Julho',
                                    'Agosto',
                                    'Setembro',
                                    'Outubro',
                                    'Novembro',
                                    'Dezembro',
                            ],
                            'label'      => 'Data Inicio',
                            'before'     => '<tr><td>',
                            'between'    => '</td><td>',
                            'after'      => '</td></tr>',
                            'div'        => false,
                    ]);
                    echo $this->Form->input('tg0011tipofuncionario_id', [
                            'empty'   => '--seleccione--',
                            'label'   => 'Tipo de Funcionario',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('tg0006departamento_id', [
                            'empty'   => '--seleccione--',
                            'label'   => 'Departamento',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                    echo $this->Form->input('tg0005cargo_id', [
                            'empty'   => '--seleccione--',
                            'label'   => 'Cargo',
                            'before'  => '<tr><td>',
                            'between' => '</td><td>',
                            'after'   => '</td></tr>',
                            'div'     => false,
                    ]);
                ?>
            <tr>
                <td></td>
                <td><?php echo $this->Form->end(__('GRAVAR', true)); ?></td>
            </tr>

        </table>
    </div>
</div>