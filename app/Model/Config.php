<?php
    /**
     * Model para as configurações
     *
     * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.controller
     * @since         OpenSGA v 0.1.0
     * @version       OpenSGA v 0.6.0
     *
     */
    App::uses('AppModel', 'Model');

    class Config extends AppModel
    {
        var $name = 'Config';


        public $belongsTo = [
            'SimNaoResposta' => [
                'className'  => 'SimNaoResposta',
                'foreignKey' => 'autoload',
            ],
        ];
    }
