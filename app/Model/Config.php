<?php
/**
 * Model para as configurações
 * 
 * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
 ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
 * @author		  Elisio Leonardo (elisio.leonardo@gmail.com)
 * @package       opensga
 * @subpackage    opensga.core.controller
 * @since         OpenSGA v 0.1.0
 * @version       OpenSGA v 0.6.0

 * 
 */
 
 
class Config extends AppModel {
	var $name = 'Config';
    
    
    public $belongsTo = array(
        'SimNaoResposta' => array(
            'className'    => 'SimNaoResposta',
            'foreignKey'   => 'autoload'
        )
    );
}
