<?php $this->extend('/Common/form_basic_common'); ?>
<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('Upload', ['enctype' => 'multipart/form-data', 'class' => 'block-content form',]); ?>

    <div class="form-group">
        <div class="col-sm-12">
            <label>
                Escolha o Ficheiro Excel de Candidatos
            </label>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="input-group">
                    <div class="form-control uneditable-input">
                        <i class="fa fa-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                    </div>
                    <div class="input-group-btn">
                        <div class="btn btn-light-grey btn-file">
                            <span class="fileupload-new"><i class="fa fa-folder-open-o"></i> Escolher Ficheiro</span>
                            <span class="fileupload-exists"><i class="fa fa-folder-open-o"></i> Trocar</span>
                            <?php
                                echo $this->Form->input('file', [
                                        'type'  => 'file',
                                        'label' => false,
                                        'div'   => false,
                                        'class' => 'file-input required',
                                ]);

                            ?>

                        </div>
                        <a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
                            <i class="fa fa-times"></i> Remover
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="form-group">
        <?php
            echo $this->Form->input('ano_lectivo', [
                    'div'     => 'col-sm-6 form-group',
                    'label'   => ['class' => 'control-label'],
                    'class'   => 'form-control',
                    'id'      => 'anoLectivoID',
                    'options' => $anoLectivos,
            ]);
        ?>
    </div>
    <div class="form-group col-sm-12">
        <div class="col-sm-4 col-sm-offset-6">
            <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']); ?>

        </div>
    </div>
<?php $this->end(); ?>