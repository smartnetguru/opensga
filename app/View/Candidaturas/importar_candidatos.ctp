<?php $this->extend('/Common/form_basic_common'); ?>
<?php $this->start('form-elements') ?>
<?php echo $this->Form->create('Upload', ['enctype' => 'multipart/form-data', 'class' => 'block-content form',]); ?>
<div class="row">
    <div class="alert alert-warning">
        <button data-dismiss="alert" class="close">
            &times;
        </button>
        <i class="fa fa-exclamation-triangle"></i>
        <strong>Atenção!</strong> O Ficheiro não Pode ter mais de 100 Candidatos.
    </div>
    <div class="alert alert-warning">
        <button data-dismiss="alert" class="close">
            &times;
        </button>
        <i class="fa fa-exclamation-triangle"></i>
        <strong>Atenção!</strong> Os cursos devem estar previamente Cadastrados, e bem escritos no ficheiro.
    </div>
    <div class="alert alert-warning">
        <button data-dismiss="alert" class="close">
            &times;
        </button>
        <i class="fa fa-exclamation-triangle"></i>
        <strong>Atenção!</strong> A ordem dos campos no ficheiro é fundamental. Veja abaixo.
    </div>
</div>

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
                        <?php echo $this->Form->input('file', [
                                'type'  => 'file',
                                'label' => false,
                                'div'   => false,
                                'class' => 'file-input required',
                        ]); ?>
                    </div>
                    <a href="#" class="btn btn-light-grey fileupload-exists" data-dismiss="fileupload">
                        <i class="fa fa-times"></i> Remover
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-12">
    <div class="col-sm-2 col-sm-offset-8">
        <?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block']); ?>

    </div>
</div>
<div class="row">
    <h3>Ordem dos Campos no Ficheiro</h3>
    <p>Caso um dos campos não exista, deixe a coluna em branco</p>
    <ul>
        <li><b>A</b> - Número de Estudante<b> (Obrigatório)</b></li>
        <li><b>B</b> - Nome Completo<b> (Obrigatório)</b></li>
        <li><b>C</b> - Nome da Faculdade</li>
        <li><b>D</b> - Nome do Curso<b> (Obrigatório)</b>. O nome do Curso deve estar escrito como na Base de
            Dados
        </li>
    </ul>
</div>
<?php $this->end(); ?>




