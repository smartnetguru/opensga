<?php echo $this->Form->create('Artigo', [
        'inputDefaults' => [
                'div'       => 'form-group',
                'wrapInput' => false,
                'class'     => 'form-control',
        ],
        'class'         => 'well',
]); ?>
<fieldset>
    <legend>Adicionar Novo Artigo</legend>
    <div class="row">
        <div class="col-sm-9">
            <?php
                echo $this->Form->input('titulo', [
                        'label'       => 'Título',
                        'placeholder' => 'Titulo do artigo…',
                        'type'        => 'text',

                ]);
                echo $this->Form->textarea(
                        'conteudo',
                        [
                                'class' => 'ckeditor form-control',
                                'label' => 'Conteudo do Artigo',
                        ]
                );
                echo $this->Form->input('resumo');
            ?>
        </div>
        <div class="col-sm-3">
            <?php
                echo $this->Form->input('data_publicacao', [
                        'type'               => 'text',
                        'class'              => 'form-control date-time-picker',
                ]);
                echo $this->Form->input('estado_objecto_id', ['type' => 'hidden', 'value' => 1]);
                echo $this->Form->input('artigo_estado_artigo_id');
                echo $this->Form->submit('Publicar', [
                        'div'   => 'form-group pull-right',
                        'class' => 'btn btn-green',
                ]); ?>
        </div>
    </div>
</fieldset>
<?php echo $this->Form->end(); ?>

