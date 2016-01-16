<?php
/**
 * OpenSGA - Sistema de Gestão Académica
 *   Copyright (C) 2010-2011  INFOmoz (Informática-Moçambique)
 * 
 * Este programa é um software livre: Você pode redistribuir e/ou modificar
 * todo ou parte deste programa, desde que siga os termos da licença por nele
 * estabelecidos. Grande parte do código deste programa está sob a licença 
 * GNU Affero General Public License publicada pela Free Software Foundation.
 * A versão original desta licença está disponível na pasta raiz deste software.
 * 
 * Este software é distribuido sob a perspectiva de que possa ser útil para 
 * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
 * os termos da licença GNU Affero General Public License para mais detalhes
 * 
 * As redistribuições deste software, mesmo quando o código-fonte for modificado significativamente,
 * devem manter está informação legal, assim como a licença original do software.
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.10.0.0

 * 
 */
 ?>
 

			<div class="container_12">
			
			<div class="grid_12">
				<h1>Cursos</h1>
				<p>Pagina de gestao de cursos do OpenSGA.</p>
			</div>
			
			<div class="grid_6">
				<div class="block-border">
					<div class="block-header">
						<h1>Dados do Curso</h1><span></span>
					</div>
					<?php echo $this->Form->create('Turma',array('class'=>'block-content form'));?>
						<div class="_100">
							<p><label for="textfield">Ano Lectivo</label><?php echo $this->Form->input('ano_lectivo_id',array('label'=>false,'div'=>false,'class'=>'required'));?></p>
						</div>
                                    <div class="_100">
							<p><label for="textfield">Semestre</label><?php  echo $this->Form->input('semestre_lectivo_id',array('label'=>false,'div'=>false));?></p>
                                    </div>
                                    <div class="_100">
							<p><label for="textfield">Plano de Estudos</label><?php  echo $this->Form->input('plano_estudo_id',array('label'=>false,'div'=>false));?></p>
                                    </div>
                                    <div class="_100">
							<p><label for="textfield">Turno</label><?php  echo $this->Form->input('turno_id',array('label'=>false,'div'=>false));?></p>
                                    </div>
                    <div class="_100">
							<p><label for="textfield">Regime</label><?php  echo $this->Form->input('RegimeLectivo_id',array('label'=>false,'div'=>false));?></p>
                                    </div>
                                            <?php /**
                                             * @TODO ainda falta implementar o conceito de seccao/Grupo de Disciplinas
                                             */?>
						<div class="clear"></div>
						<div class="block-actions">
							<ul class="actions-left">
								<li><?php echo $this->Html->link(__('Lista de Cursos'),array('controller'=>'cursos','action'=>'index'),array('class'=>'button red'))?></li>
							</ul>
							<ul class="actions-right">
								<li><?php echo $this->Form->end(array('label'=>__('GRAVAR', true),'class'=>'button'));?> </li>
							</ul>
						</div>
					</form>
				</div>
                        </div>
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->

                
        <?php
        /**
         *@todo Adicionar Escola no futuro
         * @todo O Curso tambem ;) 
         */
        
        ?>        
      
        
        