<?php

App::uses('Model', 'Model');

class AppModel extends Model
{

    public $recursive = -1;
    public $actsAs = array('Containable','Auditable.Auditable');
    //public $useTable = false;

    public function __construct($id = false, $table = null, $ds = null)
    {
        parent::__construct($id, $table, $ds);

            if ($this->name=='Log' || $this->name=='opensgaSession' || $this->alias=='Session') {
                $this->Behaviors->unload('Auditable.Auditable');

        }




    }


    function checkUnique($data, $fields)
    {
// check if the param contains multiple columns or a single one
        if (!is_array($fields)) {
            $fields = array($fields);
        }
// go trough all columns and get their values from the parameters
        foreach ($fields as $key) {
            if(isset($this->data[$this->name][$key])){
                $unique[$key] = $this->data[$this->name][$key];
            } else{
                return true;
            }

        }
// primary key value must be different from the posted value
        if (isset($this->data[$this->name][$this->primaryKey])) {
            $unique[$this->primaryKey] = "<>" . $this->data[$this->name][$this->primaryKey];
        }
        debug($unique);

// use the model's isUnique function to check the unique rule
        return $this->isUnique($unique, false);

    }

    public function getLog()
    {
        $dbo = $this->getDataSource();
        $logs = $dbo->getLog(false, false);

        return $logs['log'];

    }

    public function lastQuery()
    {
        $dbo = $this->getDataSource();
        $logs = $dbo->getLog(false, false);

        return end($logs['log']);
    }

}
