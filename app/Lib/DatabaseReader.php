<?php
App::uses('AuditableConfig', 'Auditable.Lib');

class DatabaseReader implements ConfigReaderInterface
{
    public function __construct($path = null)
    {
        if (!$path) {
            $path = APP . 'Config' . DS;
        }
        $this->_path = $path;
    }

    public function read($key)
    {
        App::uses('Config','Model');

        $this->Config = new Config();

        $configs = $this->Config->find('all',array());
        foreach($configs as $config){
            Configure::write('OpenSGA.'.$config['Config']['name'],$config['Config']['value']);
        }

        return array();
    }

// As of 2.3 a dump() method is also required
    public function dump($key, $data)
    {
// code to dump data to file
    }
}

