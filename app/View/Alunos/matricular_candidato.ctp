
<?php
$this->BreadCumbs->addCrumb('Alunos', '/alunos');
$this->BreadCumbs->addCrumb('Lista de Alunos', '/alunos/index');

echo $this->Html->css('/assets/plugins/select2/select2.css');
echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
echo $this->Html->css('/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css');
echo $this->Html->css('/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css');
echo $this->Html->css('/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css');
echo $this->Html->css('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput.css');
echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
echo $this->Html->css('/assets/plugins/summernote/build/summernote.css');
echo $this->Html->css('/assets/plugins/ckeditor/contents.css');
?>


<div class="row">
    <div class="col-sm-12">
        <!-- start: FORM WIZARD PANEL -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="icon-external-link-sign"></i>
                Matricula de Estudantes
                <div class="panel-tools">
                    <a href="#" class="btn btn-xs btn-link panel-collapse collapses">
                    </a>
                    <a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
                        <i class="icon-wrench"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-refresh">
                        <i class="icon-refresh"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-expand">
                        <i class="icon-resize-full"></i>
                    </a>
                    <a href="#" class="btn btn-xs btn-link panel-close">
                        <i class="icon-remove"></i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
				<?php echo $this->Form->create('Aluno', array('role' => "form", 'novalidade' => 'novalidate', 'enctype' => 'multipart/form-data', 'class' => 'smart-wizard form-horizontal', 'id' => 'form', 'inputDefaults' => array('empty' => 'Seleccione', 'placeholder' => 'Seleccione'))); ?>

                <div class="swMain" id="wizard">
                    <ul>
                        <li>
                            <a href="#step-1">
                                <div class="stepNumber">
                                    1
                                </div>
                                <span class="stepDesc"> Passo 1
                                    <br>
                                    <small>Dados Basicos</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-2">
                                <div class="stepNumber">
                                    2
                                </div>
                                <span class="stepDesc"> Passo 2
                                    <br>
                                    <small>Nivel Anterior</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-3">
                                <div class="stepNumber">
                                    4
                                </div>
                                <span class="stepDesc"> Passo 4
                                    <br>
                                    <small>Identificacao</small> </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-4">
                                <div class="stepNumber">
                                    5
                                </div>
                                <span class="stepDesc"> Passo 5
                                    <br>
                                    <small>Confirmacao</small> </span>
                            </a>
                        </li>
                    </ul>
                    <div class="progress progress-striped active progress-sm">
                        <div class="progress-bar progress-bar-success step-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only"> 0% Completo (sucesso)</span>
                        </div>
                    </div>
                    <div id="step-1">
                        <div class="form-group">
                            <fieldset>
                                <legend><?php echo __('Dados Básicos') ?></legend>

                                <div class="row">
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('Aluno.codigo', 'Numero de Estudante'); ?>
										<?php echo $this->Form->input('Aluno.codigo', array('value' => $candidato['Candidatura']['numero_estudante'], 'label' => false, 'div' => false, 'readonly' => true, 'class' => 'form-control', 'id' => 'codigo')); ?>
                                    </div>
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('Entidade.apelido', 'Apelido'); ?>
										<?php echo $this->Form->input('Entidade.apelido', array('value' => $candidato['Candidatura']['apelido'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo')); ?>
                                    </div>
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('Entidade.nomes', 'Nomes'); ?>
										<?php echo $this->Form->input('Entidade.nomes', array('value' => $candidato['Candidatura']['nomes'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo')); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
										<?php echo $this->Form->label('Candidatura.nome_faculdade', 'Faculdade'); ?>
										<?php echo $this->Form->input('Candidatura.nome_faculdade', array('value' => $candidato['Candidatura']['nome_faculdade'], 'label' => false, 'div' => false, 'readonly' => true, 'class' => 'form-control', 'id' => 'codigo')); ?>
                                    </div>
                                    <div class="col-sm-6">
										<?php echo $this->Form->label('Candidatura.nome_curso', 'Nome do Curso'); ?>
										<?php echo $this->Form->input('Candidatura.nome_curso', array('value' => $candidato['Candidatura']['nome_curso'], 'label' => false, 'div' => false, 'readonly' => true, 'class' => 'form-control', 'id' => 'codigo')); ?>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('Entidade.genero_id', 'Sexo'); ?>
										<?php echo $this->Form->input('Entidade.genero_id',
                                            array('value' => $candidato['Candidatura']['genero_id'],
                                                  'default' => $candidato['Candidatura']['genero_id'],
                                                  'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo')); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
											<?php echo $this->Form->label('Entidade.data_nascimento', 'Data de Nascimento'); ?>
                                            <div class="input-group">
												<?php echo $this->Form->input('Entidade.data_nascimento', array('value' => $candidato['Candidatura']['data_nascimento'], 'label' => false, 'div' => false, 'class' => 'form-control date-picker', 'id' => 'firstname', 'type' => 'text', 'data-date-viewmode' => 'years', 'data-date-format' => 'yyyy-mm-dd')); ?>
                                                <span class="input-group-addon"> <i class="fa fa-calendar"></i> </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('Entidade.estado_civil', 'Estado Civil'); ?>
										<?php echo $this->Form->input('Entidade.estado_civil',
                                            array('default' => $candidato['Candidatura']['estado_civil_id'],
                                                  'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo', 'options' => $estado_civil)); ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
										<?php echo $this->Form->label('Entidade.nome_pai', 'Nome do pai'); ?>
										<?php echo $this->Form->input('Entidade.nome_pai', array('value' => $candidato['Candidatura']['nome_pai'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo')); ?>
                                    </div>
                                    <div class="col-sm-6">
										<?php echo $this->Form->label('Entidade.nome_mae', 'Nome da Mae'); ?>
										<?php echo $this->Form->input('Entidade.nome_mae', array('value' => $candidato['Candidatura']['nome_mae'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo', 'type' => 'text')); ?>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-sm-3">
										<?php echo $this->Form->label('Entidade.naturalidade', 'Naturalidade'); ?>
										<?php echo $this->Form->input('Entidade.naturalidade',
                                            array('value' => $candidato['Candidatura']['localidade'],
                                                  'label' => false, 'div' => false, 'class' => 'form-control',
                                                  'id' => 'naturalidade', 'options' => $naturalidade,
                                                  'autocomplete' => 'on', 'type' => 'text',
                                                  )); ?>
                                    </div>
                                    <div class="col-sm-3">
										<?php echo $this->Form->label('Entidade.pais_nascimento', 'Nacionalidade'); ?>
										<?php echo $this->Form->input('Entidade.pais_nascimento', array('default' => $candidato['Candidatura']['pais_nascimento'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'paisNascimento', 'options' => $paises)); ?>
                                    </div>
                                    <div class="col-sm-3">
										<?php echo $this->Form->label('Entidade.provincia_nascimento', 'Provincia de Nascimento'); ?>
										<?php echo $this->Form->input('Entidade.provincia_nascimento', array('default' => $candidato['Candidatura']['provincia_nascimento'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'provinciaNascimento', 'options' => $provincias)); ?>
                                    </div>
                                    <div class="col-sm-3">
										<?php echo $this->Form->label('Entidade.cidade_nascimento', 'Cidade/Distrito de Nascimento'); ?>
										<?php echo $this->Form->input('Entidade.cidade_nascimento', array('default' => $candidato['Candidatura']['cidade_nascimento'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'cidadeNascimento', 'options' => $cidadeNascimentos)); ?>
                                    </div>
                                </div>

                            </fieldset>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-8">
                                <button class="btn btn-blue next-step btn-block">
                                    Next <i class="icon-circle-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="step-2">
                        <div class="form-group">
                            <fieldset>
                                <legend><?php echo __('Detalhes de Nivel Anterior') ?></legend>

                                <div class="row">
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('AlunoNivelMedio.EscolaNivelMedio.pais_id', 'Pais de Origem'); ?>
										<?php echo $this->Form->input('AlunoNivelMedio.EscolaNivelMedio.pais_id', array('default' => $candidato['Candidatura']['pais_conclusao'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo', 'options' => $paises, 'default' => 152)); ?>
                                    </div>
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('AlunoNivelMedio.EscolaNivelMedio.provincia_id', 'Provincia de Origem'); ?>
										<?php echo $this->Form->input('AlunoNivelMedio.EscolaNivelMedio.provincia_id', array('default' =>$candidato['Candidatura']['provincia_candidatura'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'provinciaOrigem')); ?>
                                    </div>
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('AlunoNivelMedio.EscolaNivelMedio.distrito_id', 'Cidade de Origem'); ?>
										<?php echo $this->Form->input('AlunoNivelMedio.EscolaNivelMedio.distrito_id',
                                            array('default' => $candidato['Candidatura']['cidade_morada'],
                                                  'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'cidadeOrigem', 'options' => $cidades)); ?>
                                    </div>



                                </div>
                                <div class ="row">
                                    <div class="col-sm-6">
										<?php echo $this->Form->label('AlunoNivelMedio.escola_nivel_medio_id', 'Escola de Conclusao'); ?>
										<?php echo $this->Form->input('AlunoNivelMedio.escola_nivel_medio_id', array('default' => $candidato['Candidatura']['escola_nivel_medio_id'], 'label' => false, 'div' => false, 'class' => 'form-control search-select', 'id' => 'escolaOrigem', 'options' => $escolaNivelMedios, 'empty' => true, 'data-placeholder' => 'Seleccione...')); ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
										<?php echo $this->Form->label('AlunoNivelMedio.ano_conclusao', 'Ano de Conclusao'); ?>
										<?php echo $this->Form->input('AlunoNivelMedio.ano_conclusao', array('value' => $candidato['Candidatura']['ano_conclusao'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo', 'type' => 'text')); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <?php
                                            if($candidato['Candidatura']['nota_conclusao']==''){
                                                $candidato['Candidatura']['nota_conclusao']=10;
                                            }
                                        ?>
										<?php echo $this->Form->label('AlunoNivelMedio.nota_final', 'Nota de Conclusao'); ?>
										<?php echo $this->Form->input('AlunoNivelMedio.nota_final', array('value' => $candidato['Candidatura']['nota_conclusao'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo')); ?>
                                    </div>
                                    <div class="col-sm-4">
                                        <?php echo $this->Form->label('EntidadeContacto.2', 'Telemovel'); ?>
                                        <?php echo $this->Form->input('EntidadeContacto.2', array('value' => $candidato['Candidatura']['telemovel'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo')); ?>
                                    </div>
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('Aluno.certificado_nivel_anterior', 'Entregou Certificado?'); ?>
										<?php echo $this->Form->input('Aluno.certificado_nivel_anterior',
                                            array('options' => $simNaoRespostas, 'label' => false, 'div' => false,
                                                  'class' => 'form-control', 'id' => 'codigo','default'=>1)); ?>
                                    </div>
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('Aluno.recenseamento_militar', 'Entregou Documento de Recenseamento Militar?'); ?>
										<?php echo $this->Form->input('Aluno.recenseamento_militar',
                                            array('options' => $simNaoRespostas, 'label' => false, 'div' => false, 'class' => 'form-control','default'=>1)); ?>
                                    </div>


                                </div>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-light-grey back-step btn-block">
                                    <i class="icon-circle-arrow-left"></i> Back
                                </button>
                            </div>
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-blue next-step btn-block">
                                    Next <i class="icon-circle-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="step-3">
                        <div class="form-group">
                            <fieldset>
                                <legend><?php echo __('Detalhes de Identificação') ?></legend>

                                <div class="row">
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('EntidadeIdentificacao.documento_identificacao_id', 'Tipo de Documento'); ?>
										<?php echo $this->Form->input('EntidadeIdentificacao.documento_identificacao_id', array('default' => $candidato['Candidatura']['documento_identificacao_id'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo', 'options' => $documento_identificacaos)); ?>
                                    </div>
                                    <div class="col-sm-4">
										<?php echo $this->Form->label('EntidadeIdentificacao.numero', 'Numero de Documento'); ?>
										<?php echo $this->Form->input('EntidadeIdentificacao.numero', array('value' => $candidato['Candidatura']['documento_identificacao_numero'], 'label' => false, 'div' => false, 'class' => 'form-control', 'id' => 'codigo')); ?>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-light-grey back-step btn-block">
                                    <i class="icon-circle-arrow-left"></i> Back
                                </button>
                            </div>
                            <div class="col-sm-2 col-sm-offset-3">
                                <button class="btn btn-blue next-step btn-block">
                                    Next <i class="icon-circle-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="step-4">
                        <h2 class="StepTitle">Confirmacao dos Dados</h2>
                        <div class="row">
                            <div class="col-sm-4">
                                <fieldset>
                                    <legend>Dados Basicos</legend>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Numero de Estudante:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Aluno][codigo]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Apelido:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Entidade][apelido]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Nomes:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Entidade][nomes]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Curso:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Candidatura][nome_curso]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Faculdade:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Candidatura][nome_faculdade]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Nome do pai:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Entidade][nome_pai]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Nome da Mae:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Entidade][nome_mae]" class="form-control-static display-value"></p>
										</div>
									</div>
                                </fieldset>
                            </div>
                            <div class="col-sm-4">
                                <fieldset>
                                    <legend>Dados Biograficos</legend>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Sexo:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Entidade][genero_id]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Data de Nascimento:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Entidade][data_nascimento]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Estado Civil:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Entidade][estado_civil]" class="form-control-static display-value"></p>
										</div>
									</div>

                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Naturalidade:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Entidade][naturalidade]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Pais de Nascimento:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Entidade][pais_nascimento]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Provincia:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Entidade][provincia_nascimento]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Cidade/Distrito:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Entidade][cidade_nascimento]" class="form-control-static display-value"></p>
										</div>
									</div>
                                </fieldset>
                            </div>
                            <div class="col-sm-4">
                                <fieldset>
                                    <legend>Outros Dados</legend>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Escola Anterior:
										</label>
										<div class="col-sm-8">
											<p data-display="data[AlunoNivelMedio][escola_nivel_medio_id]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Ano de Conclusao:
										</label>
										<div class="col-sm-8">
											<p data-display="data[AlunoNivelMedio][ano_conclusao]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Nota de Conclusao:
										</label>
										<div class="col-sm-8">
											<p data-display="data[AlunoNivelMedio][notal_final]" class="form-control-static display-value"></p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label">
											Entregou Certificado?:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Aluno][certificado_nivel_anterior]" class="form-control-static display-value"></p>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-4 control-label">
											Recenseamento Militar?:
										</label>
										<div class="col-sm-8">
											<p data-display="data[Aluno][recenseamento_militar]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Bairro onde Mora:
										</label>
										<div class="col-sm-8">
											<p data-display="data[EntidadeContacto][6]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Telemovel:
										</label>
										<div class="col-sm-8">
											<p data-display="data[EntidadeContacto][2]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Numero de Identificacao:
										</label>
										<div class="col-sm-8">
											<p data-display="data[EntidadeIdentificacao][numero]" class="form-control-static display-value"></p>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-4 control-label">
											Data de Emissao:
										</label>
										<div class="col-sm-8">
											<p data-display="data[EntidadeIdentificacao][data_emissao]" class="form-control-static display-value"></p>
										</div>
									</div>
                                </fieldset>
                            </div>





							<?php echo $this->Form->input('Aluno.curso_id', array('type' => 'hidden', 'value' => $candidato['Candidatura']['curso_id'], 'label' => false, 'div' => '_30', 'readonly' => true)); ?>
							<?php echo $this->Form->input('Aluno.unidade_organica_id', array('type' => 'hidden', 'value' => $candidato['Candidatura']['curso_id'], 'label' => false, 'div' => '_30', 'readonly' => true)); ?>
							<?php echo $this->Form->input('Aluno.numero_estudante', array('type' => 'hidden', 'value' => $candidato['Candidatura']['numero_estudante'], 'label' => false, 'div' => '_30', 'readonly' => true)); ?>
							<?php echo $this->Form->input('Aluno.aluno_via_admissao_id', array('type' => 'hidden', 'value' => $candidato['Candidatura']['aluno_via_admissao_id'], 'label' => false, 'div' => '_30', 'readonly' => true)); ?>
							<?php echo $this->Form->input('Aluno.ano_ingresso', array('type' => 'hidden', 'value' => $candidato['Candidatura']['ano_lectivo_admissao'], 'label' => false, 'div' => '_30', 'readonly' => true)); ?>
							<div class="form-group">

								<?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'btn btn-success finish-step btn-block', 'div' => 'col-sm-2 col-sm-offset-8')); ?>

							</div>
						</div>

					</div>
					</form>
				</div>
			</div>
			<!-- end: FORM WIZARD PANEL -->
		</div>
	</div>
</div>

<?php
$this->Js->get('#provinciaNascimento')->event('change', $this->Js->request(array(
			'controller' => 'ajax',
			'action' => 'get_cidades_by_provincia'
				), array(
			'update' => '#cidadeNascimento',
			'complete' => '$("#cidadeNascimento").trigger("liszt:updated")',
			'async' => true,
			'method' => 'post',
			'dataExpression' => true,
			'data' => $this->Js->serializeForm(array(
				'isForm' => true,
				'inline' => true
			))
		))
);

$this->Js->get('#provinciaOrigem')->event('change', $this->Js->request(array(
			'controller' => 'ajax',
			'action' => 'get_cidades_by_provincia'
				), array(
			'update' => '#cidadeOrigem',
			'complete' => '$("#cidadeOrigem").trigger("liszt:updated")',
			'async' => true,
			'method' => 'post',
			'dataExpression' => true,
			'data' => $this->Js->serializeForm(array(
				'isForm' => true,
				'inline' => true
			))
		))
);
$this->Js->get('#provinciaMorada')->event('change', $this->Js->request(array(
			'controller' => 'ajax',
			'action' => 'get_cidades_by_provincia'
				), array(
			'update' => '#cidadeMorada',
			'complete' => '$("#cidadeMorada").trigger("liszt:updated")',
			'async' => true,
			'method' => 'post',
			'dataExpression' => true,
			'data' => $this->Js->serializeForm(array(
				'isForm' => true,
				'inline' => true
			))
		))
);
$this->Js->get('#cidadeOrigem')->event('change', $this->Js->request(array(
			'controller' => 'ajax',
			'action' => 'get_escolas_by_distrito'
				), array(
			'update' => '#escolaOrigem',
			'complete' => '$("#escolaOrigem").trigger("liszt:updated")',
			'async' => true,
			'method' => 'post',
			'dataExpression' => true,
			'data' => $this->Js->serializeForm(array(
				'isForm' => true,
				'inline' => true
			))
		))
);
?>
<?php
echo $this->Html->script('/assets/plugins/jquery-validation/dist/jquery.validate.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard', array('block' => 'scriptBottom'));


echo $this->Html->script('/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/autosize/jquery.autosize.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/select2/select2.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jquery.maskedinput/src/jquery.maskedinput', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/moment.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-daterangepicker/daterangepicker', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker', array('block' => 'scriptBottom'));
//echo $this->Html->script('/assets/plugins/bootstrap-colorpicker/js/commits', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/jQuery-Tags-Input/jquery.tagsinput', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/summernote/build/summernote.min', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/ckeditor/ckeditor', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/ckeditor/adapters/jquery', array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.widget'), array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.position'), array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.menu'), array('block' => 'scriptBottom'));
echo $this->Html->script(array('/assets/plugins/jquery-ui/jquery.ui.autocomplete'), array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/form-matricular-candidato-elements', array('block' => 'scriptBottom'), array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/js/form-matricular-candidato-wizard', array('block' => 'scriptBottom'), array('block' => 'scriptBottom'));
?>


<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>


$(document).ready(function() {
$(window).keydown(function(event){
if(event.keyCode == 13) {
event.preventDefault();
return false;
}
});

FormElements.init();
FormWizard.init();
});

$( "#naturalidade" ).autocomplete({
source: "<?php echo $this->Html->url(array('controller' => 'ajax', 'action' => 'get_naturalidades_autocomplete')) ?>",
minLength: 2,
delay: 2
});
$( "#bairroMorada" ).autocomplete({
source: "<?php echo $this->Html->url(array('controller' => 'ajax', 'action' => 'get_bairros_autocomplete')) ?>",
minLength: 2,
delay: 2
});

<?php $this->Html->scriptEnd(); ?>
