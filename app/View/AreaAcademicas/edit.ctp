<?php
/**
 * Pagina para tipos de unidades Organicas
 *
 * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.disciplinas
 * @since         OpenSGA v 0.1.0
 * @version        OpenSGA v 0.5.0
 *
 */
$this->Html->addCrumb(__('Cadastros'), '/cadastros');
$this->Html->addCrumb(__('Áreas Académicas'), '/area_academicas');
$this->Html->addCrumb($this->request->data['AreaAcademica']['name'], '/area_academicas/view/'.$this->request->data['AreaAcademica']['id']);
$this->Html->addCrumb(__('Editar'), '/area_academicas/view/'.$this->request->data['AreaAcademica']['id']);

?>




<div class="container_12">
                <div class="grid_12">
				<div class="block-border">
					<div class="block-content">
						<ul class="shortcut-list">
							<li>
								<?php echo $this->Html->link($this->Html->image('icons/packs/crystal/48x48/apps/kedit.png').__("Lista Áreas Académicas"),array('controller'=>'area_academicas','action'=>'index'),array('escape'=>false)) ?>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Dados da Área Académica') ?></h1><span></span>
            </div>
            <?php echo $this->Form->create('AreaAcademica', array('class' => 'block-content form','inputDefaults'=>array('before'=>'<p>','after'=>'</p>'))); ?>

                <?php echo $this->Form->input('name', array('label' => __('Nome'), 'div' => '_100','before'=>'<p>','after'=>'</p>')); ?>

            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Lista de Áreas Académicas'), array('controller' => 'area_academicas', 'action' => 'index'), array('class' => 'button red')) ?></li>
                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Form->end(array('label' => __('GRAVAR', true), 'class' => 'button')); ?> </li>
                </ul>
            </div>
            </form>
        </div>
    </div>
    <div class="clear height-fix"></div>

</div></div> <!--! end of #main-content -->


<div class="areaAcademicas form">
<?php echo $this->Form->create('AreaAcademica'); ?>
	<fieldset>
		<legend><?php echo __('Edit Area Academica'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AreaAcademica.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AreaAcademica.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Area Academicas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Unidade Organicas'), array('controller' => 'unidade_organicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade Organica'), array('controller' => 'unidade_organicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
