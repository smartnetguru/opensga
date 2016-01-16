<?php
/**
 * View do Perfil do Aluno
 *
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.estudantes
 * @version       OpenSGA v 0.5.0
 * @since         OpenSGA v 0.1.0

 *
 */
?>

<?php
$this->BreadCumbs->addCrumb(__('Docentes'), '/docentes');
$this->BreadCumbs->addCrumb($docente['Entidade']['name'], '#');
$this->BreadCumbs->addCrumb(__('Perfil'), '#');

echo $this->Html->css('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css');
echo $this->Html->css('/assets/plugins/bootstrap-social-buttons/social-buttons-3.css');
?>

<div class="row">
						<div class="col-sm-12">
							<div class="tabbable">
								<ul id="myTab4" class="nav nav-tabs tab-padding tab-space-3 tab-blue">
									<li class="active">
										<a href="#panel_overview" data-toggle="tab">
											Visao Geral
										</a>
									</li>
                                    <li>
										<a href="#panel_detalhes" data-toggle="tab">
											Detalhes
										</a>
									</li>
									<li>
										<a href="#panel_matriculas" data-toggle="tab">
											Turmas
										</a>
									</li>
									<li>
										<a href="#panel_inscricoes" data-toggle="tab">
											Estudantes
										</a>
									</li>
                                    <li>
										<a href="#panel_pagamentos" data-toggle="tab">
											Avaliacoes
										</a>
									</li>
                                    <li>
										<a href="#panel_mensagens" data-toggle="tab">
											Mensagens
										</a>
									</li>
                                    
								</ul>
								<div class="tab-content">
									<div class="tab-pane in active" id="panel_overview">
										<div class="row">
											<div class="col-sm-5 col-md-4">
												<div class="user-left">
													<div class="center">
														<h4><?php echo h($docente['Entidade']['name']); ?></h4>
														<div data-provides="fileupload" class="fileupload fileupload-new">
															<div class="user-image">
																<div class="fileupload-new thumbnail"><?php echo $this->Html->image(array('controller' => 'docentes', 'action' => 'mostrar_foto', $docente['Docente']['id']), array('class' => '_100','style'=>'max-width:330px;max-height:380px'));?>
																</div>
																<div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
																<div class="user-image-buttons">
																	<span class="btn btn-teal btn-file btn-sm"><span class="fileupload-new"><i class="fa fa-pencil"></i></span><span class="fileupload-exists"><i class="fa fa-pencil"></i></span>
																		<input type="file">
																	</span>
																	<a data-dismiss="fileupload" class="btn fileupload-exists btn-bricky btn-sm" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</div>
														</div>
                                                        <h4><?php echo h($docente['UnidadeOrganica']['name']); ?></h4>
														<hr>
														<p>
                                                            <a class="btn btn-facebook btn-sm btn-squared">
																<i class="fa fa-facebook"></i>
															</a>
															<a class="btn btn-twitter btn-sm btn-squared">
																<i class="fa fa-twitter"></i>
															</a>
															<a class="btn btn-linkedin btn-sm btn-squared">
																<i class="fa fa-linkedin"></i>
															</a>
															<a class="btn btn-google-plus btn-sm btn-squared">
																<i class="fa fa-google-plus"></i>
															</a>
															<a class="btn btn-github btn-sm btn-squared">
																<i class="fa fa-github"></i>
															</a>
														</p>
														<hr>
													</div>
													<table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Dados Pessoais</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Data de Nascimento</td>
																<td><?php h($docente['Entidade']['data_nascimento']);?></td>
																<td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Sexo</td>
																<td><?php echo h($docente['Entidade']['Genero']['name'])?></td>
																<td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Nome do Pai</td>
																<td><?php echo h($docente['Entidade']['nome_pai'])?></td>
																<td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Nome da Mae</td>
																<td><?php echo h($docente['Entidade']['nome_mae'])?></td>
																<td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															<tr>
																<td>Nacionalidade</td>
																<td><span class="label label-sm label-info"><?php echo h($docente['Entidade']['PaisNascimento']['name']);?></span></td>
																<td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
                                                            <tr>
																<td>Naturalidade</td>
																<td><?php echo h($docente['Entidade']['naturalidade']);?> - <?php echo h($docente['Entidade']['ProvinciaNascimento']['name']);?></td>
																<td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
                                                            
														</tbody>
													</table>
													<table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Informacoes do Sistema</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Ultimo acesso</td>
																<td><?php echo h($docente['Entidade']['User']['ultimo_login']);?></td>
																<td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															
														</tbody>
													</table>
												</div>
											</div>
											<div class="col-sm-7 col-md-8">
												<div class="row">
                                                    
         
													<div class="col-sm-2">
                                                        <?php echo $this->Html->link($this->Html->image('icons/student/edit-student.png') . "<br />Editar Perfil", array('controller' => 'docentes', 'action' => 'editar_docente', $docente['Docente']['id']), array('escape' => false,'class'=>'btn btn-icon btn-block')) ?>
														
													</div>
                                                    <div class="col-sm-2">
                                                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Atribuir Turmas", array('controller' => 'docentes', 'action' => 'atribuir_turmas', $docente['Docente']['id']), array('target' => 'blank', 'escape' => false,'class'=>'btn btn-icon btn-block')) ?>
														
													</div>
                                                    <div class="col-sm-2">
                                                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Atribuir Disciplinas", array('controller' => 'docentes', 'action' => 'atribuir_disciplinas', $docente['Docente']['id']), array('escape' => false,'class'=>'btn btn-icon btn-block')) ?>
														
													</div>
                                                    <div class="col-sm-2">
                                                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Alterar Status", array('controller' => 'docentes', 'action' => 'alterar_status', $docente['Docente']['id']), array('escape' => false,'class'=>'btn btn-icon btn-block')) ?>
														
													</div>
                                                    <div class="col-sm-2">
                                                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Alterar Nome", array('controller' => 'docentes', 'action' => 'alterar_nome', $docente['Docente']['id']), array('escape' => false,'class'=>'btn btn-icon btn-block')) ?>
														
													</div>
                                                    <div class="col-sm-2">
                                                        <?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/printer.png') . "<br />Enviar SMS", array('controller' => 'messages', 'action' => 'enviar_sms', $docente['Entidade']['id']), array('escape' => false,'class'=>'btn btn-icon btn-block')) ?>
														
													</div>
                                                    
												</div>
                                                	<div class="row">
												<div class="col-md-12">
													<h3>Dados Academicos e Contactos</h3>
													<hr>
												</div>
												<div class="col-md-6">
                                                    <table class="table table-condensed table-hover">
														<thead>
															<tr>
																<th colspan="3">Disciplinas que Lecciona</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Ultimo acesso</td>
																<td><?php echo h($docente['Entidade']['User']['ultimo_login']);?></td>
																<td><a class="show-tab" href="#panel_edit_account"><i class="fa fa-pencil edit-user-info"></i></a></td>
															</tr>
															
														</tbody>
													</table>
													<div class="form-group">
														<label class="label label-info control-label">
															Curso
														</label>
                                                        <h4> <?php echo h($aluno['Curso']['name'])?> </h4>
														
													</div>
													<div class="form-group">
														<label class="label label-info control-label">
															Faculdade
														</label>
                                                        <p> <?php echo h($aluno['Curso']['UnidadeOrganica']['name'])?> </p>
														
													</div>
													<div class="form-group">
														<label class="label label-info control-label">
															Ano de Ingresso
														</label>
                                                        <p> <?php echo h($aluno['Aluno']['ano_ingresso'])?> </p>
													</div>
													<div class="form-group">
														<label class="label label-info control-label">
															Curriculum
														</label>
                                                        <p> <?php echo h($aluno['Aluno']['PlanoEstudo']['name'])?> </p>
													</div>
												</div>
                                                <div class="col-md-6">
													<div class="form-group">
														<label class="label label-info control-label">
															Morada
														</label>
                                                        <p> <?php echo h($aluno['Entidade']['Bairro']['name'])?> </p>
														
													</div>
													<div class="form-group">
														<label class="label label-info control-label">
															Telemovel
														</label>
														<p> <?php echo h($aluno['Entidade']['telemovel'])?> </p>
													</div>
													<div class="form-group">
														<label class="label label-info control-label">
															Email Institucional
														</label>
                                                        <p> <?php echo h($aluno['Entidade']['email'])?> </p>
														
													</div>
													<div class="form-group">
														<label class="label label-info control-label">
															Email Pessoal
														</label>
                                                        <p> <?php echo h($aluno['Entidade']['User']['username'])?> </p>
														
													</div>
												</div>        
												
											</div>
											
												<div class="panel panel-white">
													<div class="panel-heading">
														<i class="clip-menu"></i>
														Actividades Recentes
														<div class="panel-tools">
															<a href="#" class="btn btn-xs btn-link panel-collapse collapses">
															</a>
															<a data-toggle="modal" href="#panel-config" class="btn btn-xs btn-link panel-config">
																<i class="fa fa-wrench"></i>
															</a>
															<a href="#" class="btn btn-xs btn-link panel-refresh">
																<i class="fa fa-refresh"></i>
															</a>
															<a href="#" class="btn btn-xs btn-link panel-close">
																<i class="fa fa-times"></i>
															</a>
														</div>
													</div>
													<div style="height:300px" class="panel-body panel-scroll ps-container">
														<ul class="activities">
															<li>
																<a href="javascript:void(0)" class="activity">
																	<i class="clip-upload-2 circle-icon circle-green"></i>
																	<span class="desc">You uploaded a new release.</span>
																	<div class="time">
																		<i class="fa fa-time bigger-110"></i>
																		2 hours ago
																	</div>
																</a>
															</li>
															<li>
																<a href="javascript:void(0)" class="activity">
																	<img src="assets/images/avatar-2.jpg" alt="image">
																	<span class="desc">Nicole Bell sent you a message.</span>
																	<div class="time">
																		<i class="fa fa-time bigger-110"></i>
																		3 hours ago
																	</div>
																</a>
															</li>
															
														</ul>
													<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; width: 1051px; display: none;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 300px; display: inherit;"><div class="ps-scrollbar-y" style="top: 0px; height: 206px;"></div></div></div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="panel_detalhes">
										<form id="form" role="form" action="#">
											<div class="row">
												<div class="col-md-12">
													<h3>Account Info</h3>
													<hr>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															First Name
														</label>
														<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Peter">
													</div>
													<div class="form-group">
														<label class="control-label">
															Last Name
														</label>
														<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Clark">
													</div>
													<div class="form-group">
														<label class="control-label">
															Email Address
														</label>
														<input type="email" name="email" id="email" class="form-control" placeholder="peter@example.com">
													</div>
													<div class="form-group">
														<label class="control-label">
															Phone
														</label>
														<input type="email" name="email" id="phone" class="form-control" placeholder="(641)-734-4763">
													</div>
													<div class="form-group">
														<label class="control-label">
															Password
														</label>
														<input type="password" id="password" name="password" class="form-control" placeholder="password">
													</div>
													<div class="form-group">
														<label class="control-label">
															Confirm Password
														</label>
														<input type="password" name="password_again" id="password_again" class="form-control" placeholder="password">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group connected-group">
														<label class="control-label">
															Date of Birth
														</label>
														<div class="row">
															<div class="col-md-3">
																<select class="form-control" id="dd" name="dd">
																	<option value="">DD</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option selected="selected" value="21">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																</select>
															</div>
															<div class="col-md-3">
																<select class="form-control" id="mm" name="mm">
																	<option value="">MM</option>
																	<option value="01">1</option>
																	<option value="02">2</option>
																	<option value="03">3</option>
																	<option value="04">4</option>
																	<option value="05">5</option>
																	<option value="06">6</option>
																	<option value="07">7</option>
																	<option value="08">8</option>
																	<option value="09">9</option>
																	<option selected="selected" value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																</select>
															</div>
															<div class="col-md-3">
																<input type="text" class="form-control" name="yyyy" id="yyyy" placeholder="1982">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label">
															Gender
														</label>
														<div>
															<label class="radio-inline">
																<div class="iradio_minimal-grey" style="position: relative;"><input type="radio" id="gender_female" name="gender" value="" class="grey" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins></div>
																Female
															</label>
															<label class="radio-inline">
																<div class="iradio_minimal-grey checked" style="position: relative;"><input type="radio" checked="checked" id="gender_male" name="gender" value="" class="grey" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins></div>
																Male
															</label>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4">
															<div class="form-group">
																<label class="control-label">
																	Zip Code
																</label>
																<input type="text" id="zipcode" name="zipcode" placeholder="12345" class="form-control">
															</div>
														</div>
														<div class="col-md-8">
															<div class="form-group">
																<label class="control-label">
																	City
																</label>
																<input type="text" id="city" name="city" data-placement="top" title="" data-rel="tooltip" data-original-title="We'll display it when you write reviews" placeholder="London (UK)" class="form-control tooltips">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label>
															Image Upload
														</label>
														<div data-provides="fileupload" class="fileupload fileupload-new">
															<div style="width: 150px; height: 150px;" class="fileupload-new thumbnail"><img alt="" src="assets/images/avatar-1-xl.jpg">
															</div>
															<div style="max-width: 150px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
															<div class="user-edit-image-buttons">
																<span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture"></i> Change</span>
																	<input type="file">
																</span>
																<a data-dismiss="fileupload" class="btn fileupload-exists btn-light-grey" href="#">
																	<i class="fa fa-times"></i> Remove
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<h3>Additional Info</h3>
													<hr>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															Twitter
														</label>
														<span class="input-icon">
															<input type="text" placeholder="Text Field" class="form-control">
															<i class="clip-twitter"></i> </span>
													</div>
													<div class="form-group">
														<label class="control-label">
															Facebook
														</label>
														<span class="input-icon">
															<input type="text" placeholder="Text Field" class="form-control">
															<i class="clip-facebook"></i> </span>
													</div>
													<div class="form-group">
														<label class="control-label">
															Google Plus
														</label>
														<span class="input-icon">
															<input type="text" placeholder="Text Field" class="form-control">
															<i class="clip-google-plus"></i> </span>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															Github
														</label>
														<span class="input-icon">
															<input type="text" placeholder="Text Field" class="form-control">
															<i class="clip-github-2"></i> </span>
													</div>
													<div class="form-group">
														<label class="control-label">
															Linkedin
														</label>
														<span class="input-icon">
															<input type="text" placeholder="Text Field" class="form-control">
															<i class="clip-linkedin"></i> </span>
													</div>
													<div class="form-group">
														<label class="control-label">
															Skype
														</label>
														<span class="input-icon">
															<input type="text" placeholder="Text Field" class="form-control">
															<i class="clip-skype"></i> </span>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div>
														Required Fields
														<hr>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8">
													<p>
														By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
													</p>
												</div>
												<div class="col-md-4">
													<button type="submit" class="btn btn-teal btn-block">
														Update <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane" id="panel_projects">
										<table id="projects" class="table table-striped table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
													<div class="checkbox-table">
														<label>
															<div class="icheckbox_flat-grey" style="position: relative;"><input type="checkbox" class="flat-grey" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins></div>
														</label>
													</div></th>
													<th>Project Name</th>
													<th class="hidden-xs">Client</th>
													<th>Proj Comp</th>
													<th class="hidden-xs">%Comp</th>
													<th class="hidden-xs center">Priority</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<div class="icheckbox_flat-grey" style="position: relative;"><input type="checkbox" class="flat-grey" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins></div>
														</label>
													</div></td>
													<td>IT Help Desk</td>
													<td class="hidden-xs">Master Company</td>
													<td>11 november 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
															<span class="sr-only"> 70% Complete (danger)</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a data-original-title="Edit" data-placement="top" class="btn btn-teal tooltips" href="#"><i class="fa fa-edit"></i></a>
														<a data-original-title="Share" data-placement="top" class="btn btn-green tooltips" href="#"><i class="fa fa-share"></i></a>
														<a data-original-title="Remove" data-placement="top" class="btn btn-bricky tooltips" href="#"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul class="dropdown-menu pull-right" role="menu">
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<div class="icheckbox_flat-grey" style="position: relative;"><input type="checkbox" class="flat-grey" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins></div>
														</label>
													</div></td>
													<td>PM New Product Dev</td>
													<td class="hidden-xs">Brand Company</td>
													<td>12 june 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
															<span class="sr-only"> 40% Complete</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-warning">High</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a data-original-title="Edit" data-placement="top" class="btn btn-teal tooltips" href="#"><i class="fa fa-edit"></i></a>
														<a data-original-title="Share" data-placement="top" class="btn btn-green tooltips" href="#"><i class="fa fa-share"></i></a>
														<a data-original-title="Remove" data-placement="top" class="btn btn-bricky tooltips" href="#"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul class="dropdown-menu pull-right" role="menu">
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<div class="icheckbox_flat-grey" style="position: relative;"><input type="checkbox" class="flat-grey" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins></div>
														</label>
													</div></td>
													<td>ClipTheme Web Site</td>
													<td class="hidden-xs">Internal</td>
													<td>11 november 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
															<span class="sr-only"> 90% Complete</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a data-original-title="Edit" data-placement="top" class="btn btn-teal tooltips" href="#"><i class="fa fa-edit"></i></a>
														<a data-original-title="Share" data-placement="top" class="btn btn-green tooltips" href="#"><i class="fa fa-share"></i></a>
														<a data-original-title="Remove" data-placement="top" class="btn btn-bricky tooltips" href="#"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul class="dropdown-menu pull-right" role="menu">
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<div class="icheckbox_flat-grey" style="position: relative;"><input type="checkbox" class="flat-grey" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins></div>
														</label>
													</div></td>
													<td>Local Ad</td>
													<td class="hidden-xs">UI Fab</td>
													<td>15 april 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
															<span class="sr-only"> 50% Complete</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-success">Normal</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a data-original-title="Edit" data-placement="top" class="btn btn-teal tooltips" href="#"><i class="fa fa-edit"></i></a>
														<a data-original-title="Share" data-placement="top" class="btn btn-green tooltips" href="#"><i class="fa fa-share"></i></a>
														<a data-original-title="Remove" data-placement="top" class="btn btn-bricky tooltips" href="#"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul class="dropdown-menu pull-right" role="menu">
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<div class="icheckbox_flat-grey" style="position: relative;"><input type="checkbox" class="flat-grey" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins></div>
														</label>
													</div></td>
													<td>Design new theme</td>
													<td class="hidden-xs">Internal</td>
													<td>2 october 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
															<span class="sr-only"> 20% Complete (warning)</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-danger">Critical</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a data-original-title="Edit" data-placement="top" class="btn btn-teal tooltips" href="#"><i class="fa fa-edit"></i></a>
														<a data-original-title="Share" data-placement="top" class="btn btn-green tooltips" href="#"><i class="fa fa-share"></i></a>
														<a data-original-title="Remove" data-placement="top" class="btn btn-bricky tooltips" href="#"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul class="dropdown-menu pull-right" role="menu">
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
												<tr>
													<td class="center">
													<div class="checkbox-table">
														<label>
															<div class="icheckbox_flat-grey" style="position: relative;"><input type="checkbox" class="flat-grey" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;"></ins></div>
														</label>
													</div></td>
													<td>IT Help Desk</td>
													<td class="hidden-xs">Designer TM</td>
													<td>6 december 2014</td>
													<td class="hidden-xs">
													<div class="progress progress-striped active progress-sm">
														<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
															<span class="sr-only"> 40% Complete (warning)</span>
														</div>
													</div></td>
													<td class="center hidden-xs"><span class="label label-warning">High</span></td>
													<td class="center">
													<div class="visible-md visible-lg hidden-sm hidden-xs">
														<a data-original-title="Edit" data-placement="top" class="btn btn-teal tooltips" href="#"><i class="fa fa-edit"></i></a>
														<a data-original-title="Share" data-placement="top" class="btn btn-green tooltips" href="#"><i class="fa fa-share"></i></a>
														<a data-original-title="Remove" data-placement="top" class="btn btn-bricky tooltips" href="#"><i class="fa fa-times fa fa-white"></i></a>
													</div>
													<div class="visible-xs visible-sm hidden-md hidden-lg">
														<div class="btn-group">
															<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle btn-sm">
																<i class="fa fa-cog"></i> <span class="caret"></span>
															</a>
															<ul class="dropdown-menu pull-right" role="menu">
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-edit"></i> Edit
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-share"></i> Share
																	</a>
																</li>
																<li role="presentation">
																	<a href="#" tabindex="-1" role="menuitem">
																		<i class="fa fa-times"></i> Remove
																	</a>
																</li>
															</ul>
														</div>
													</div></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

<div class="container_12">
    

  

		
        
        <?php
           // echo $this->Html->script(array('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js'));
           // echo $this->Html->script(array('/assets/plugins/jquery.pulsate/jquery.pulsate.min.js'));
            echo $this->Html->script(array('/assets/js/perfil-estudante.js'));
        ?>

<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>

$(document).ready(function() {

PagesUserProfile.init();
});

/*
* Tabs
*/

/*$("#tab-panel-1").createTabs();

$('#table-ia').dataTable({"iDisplayLength": 5});
$('#table-iap').dataTable({"iDisplayLength": 5});
$('#table-tc').dataTable({
"bSort": false,
"iDisplayLength": 5,
"aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
}); */
<?php $this->Html->scriptEnd(); ?>
<?php //debug($todas_inscricoes); ?>

