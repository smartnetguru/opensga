<?php
$this->BreadCumbs->addCrumb('Entidades', '/entidades');
$this->BreadCumbs->addCrumb(h($entidade['Entidade']['name']), '/alunos/perfil_estudante/');
$this->BreadCumbs->addCrumb('Requisicoes', '/alunos/index');
$this->BreadCumbs->addCrumb($requisicao['numero_pedido'], 'requisicoes/');

echo $this->Html->css('/assets/plugins/select2/select2.css');
echo $this->Html->css('/assets/plugins/datepicker/css/datepicker.css');
?>
<?php 


    //Entidade existe 
    if(isset($entidade['Entidade'])){
                
        $this->extend('/Common/entidade_action');
        
    }else{
     
        //Entidade nao existe
        $this->extend('/Common/entidade_nova');
        
    }


?>


<?php $this->start('entidade-form') ?>
<?php echo $this->Form->create('RequisicoesPedido', array('role' => 'form', 'enctype' => 'multipart/form-data', 'class' => '', 'inputDefaults' => array())); ?>
<?php echo $this->Form->hidden('entidade_id', array('value' => $entidade['id'])); ?>
<?php echo $this->Form->hidden('requisicao_id', array('value' => $requisicao['id'])); ?>

<div class="form-group">
	<label>
		<?php echo __('Numero de Requisicao') ?>
	</label>
	<?php echo $this->Form->input('numero_pedido', array('label' => false, 'div' => false, 'class' => 'form-control','readonly'=>'readonly','value'=>$requisicao['numero_pedido'])); ?>
</div>
<div class="form-group">
	<label>
		<?php echo __('Documento/Tipo de Requisicao') ?>
	</label>
	<?php echo $this->Form->input('requisicoes_tipo_pedido_id', array('label' => false, 'div' => false, 'class' => 'form-control', 'empty' => '--Seleccione--','value'=>$requisicao['requisicoes_tipo_pedido_id'],'readonly'=>'readonly')); ?>
    
</div>


<div class="form-group">
	<label>
		<?php echo __('Data de Requisicao') ?>
	</label>
	<?php echo $this->Form->input('data_pedido', array('label' => false, 'div' => false, 'class' => 'form-control date-picker', 'type' => 'text', 'data-date-viewmode' => 'years', 'data-date-format' => 'yyyy-mm-dd','readonly'=>'readonly','value'=>$requisicao['data_pedido'])); ?>
</div>

<div class="form-group">
	<label>
		<?php echo __('Estado da Requisicao') ?>
	</label>
	<?php echo $this->Form->input('requisicoes_estado_pedido_id', array('label' => false, 'div' => false, 'class' => 'form-control','value'=>$requisicao['requisicoes_estado_pedido_id'])); ?>
</div>





<div class="form-group">
	<div class="col-sm-4 col-sm-offset-8">
        
        <?php
            

            //Mostrar botao para salvar requisicao se a entidade tiver sido encontrada
            if($entidade){
                
                    echo $this->Form->end(
                        array('label' => __('GRAVAR', true), 'class' => 'btn btn-blue btn-block'));
                
            }else{
                
                
                echo $this->Form->end();   
                
            }


        ?>
        
		<?php  ?>

	</div>


</div>
<?php
$this->end();
