<?php
/**
 * OpenSGA - Sistema de Gest�o Acad�mica
 *   Copyright (C) 2010-2012  INFOmoz (Inform�tica-Mo�ambique)

 * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
 ** @link         http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.6.0
 * @version       0.6.0

 *
 */
?>

<p>&copy; 2010-<?php echo date('Y') ?>  <strong><?php echo $this->Html->link(__(Configure::read('OpenSGA.desenvolvedor')),
            'http://infomoz.net',
            array('title' => 'Sistemas de Gestão para Educação','target'=>'_blank')) ?></strong> | Desenvolvido para <b><?php echo Configure::read('OpenSGA.instituicao.nome') ?></b>
    
</p>

<div id="ajudaDialog" style="display: none">
    <h1>Página de Ajuda do OpenSGA</h1>
    <p>Brevemente...</p>
</div>