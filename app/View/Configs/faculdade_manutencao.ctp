<?php
/**
 * Pagina de Configurações do OpenSGA
 * 
 * 
 * @copyright     Copyright 2010-2011, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 * @link          http://infomoz.net/opensga OpenSGA - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.config
 * @since         OpenSGA v 0.10.0.0

 * 
 */
 ?>
 
 <?php 
$grupo = $this->Session->read('Auth.User.group_id');
$username = $this->Session->read('Auth.User.username');

$this->Breadcumbs->addCrumb('Configurações', '/configs');
$this->Breadcumbs->addCrumb('Lista de Configurações', '/configs/index');
?>

<div class='row'>
    <div class="action-list">
        <div class="col-sm-2">
            <?php echo $this->Html->link('<i class="fa fa-group fa-2x"></i>	Alunos Sem Curriculo',
                array('controller' => 'alunos', 'action' => 'alunos_sem_plano_estudo','faculdade'=>true), array('escape' => false,
                                                                        'class' => 'btn btn-icon btn-block')) ?>
        </div>
    </div>
</div>

