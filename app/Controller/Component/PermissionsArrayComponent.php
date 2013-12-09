<?php

/**
 * CakePHP Permissions Array by Kevin Wentworth (Saco Design, Inc.)
 *
 * Handles retrieving all ACL Permissions and storing them in an array.
 * 
 *
 * Comments and bug reports welcome at kevin at sacode
sign dot com
 *
 * Licensed under UYOR (Use at Your Own Risk)
 */ 
class PermissionsArrayComponent extends Object {
    
    var $components = array('Acl', 'Auth', 'Session');
    var $options = array('model'=>'Aco', 'field'=>'alias');
    
    
    //used for recursive variable setting/checking
    var $perms = array();   //for ACL defined permissions
    var $permissionsArray = array();    //for all permissions
    var $inheritPermission = array();   //array indexed by level to hold the inherited permission
    
    //called before Controller::beforeFilter()
    function initialize(&$controller, $settings = array()) {
        // saving the controller reference for later use
        $this->controller =& $controller;
    }
 
    //called after Controller::beforeFilter()
    function startup(&$controller) {
    }
 
    //called after Controller::beforeRender()
    function beforeRender(&$controller) {
    }
 
    //called after Controller::render()
    function shutdown(&$controller) {
    }
 
    //called before Controller::redirect()
    function beforeRedirect(&$controller, $url, $status=null, $exit=true) {
    }
 
    function create($group_id = 0, $options = array()) {
        $this->options = array_merge($this->options, $options);
        
        //GET ACL PERMISSIONS
        $acos = $this->Acl->Aco->find('threaded');
        $group_aro = $this->Acl->Aro->find('threaded',array('conditions'=>array('Aro.foreign_key'=>$group_id, 'Aro.model'=>'Group')));
        $group_perms = Set::extract('{n}.Aco', $group_aro);
        $gpAco = array();
        foreach($group_perms[0] as $value) {
            $gpAco[$value['id']] = $value;
        }
        
        $this->perms = $gpAco;
        $this->_addPermissions($acos, $this->options['model'], $this->options['field'], 0, '');
        
        $this->Session->write('Auth.Permissions', $this->permissionsArray);
        return $this->controller->redirect($this->Auth->redirect());
    }
    
    
    function _addPermissions($acos, $modelName, $fieldName, $level, $alias) {
 
        foreach ($acos as $key=>$val)
        {
            $thisAlias = $alias . $val[$modelName][$fieldName];
             
            if(isset($this->perms[$val[$modelName]['id']])) {
                $curr_perm = $this->perms[$val[$modelName]['id']];
                if($curr_perm['Permission']['_create'] == 1) {
                    $this->permissionsArray[] = $thisAlias;
                    $this->inheritPermission[$level] = 1;
                } else {
                    $this->inheritPermission[$level] = -1;
                }
            } else {
                if(!empty($this->inheritPermission)) {
                    //echo $level.'::'.$thisAlias;
                    //var_dump($this->inheritPermission);
                    //check for inheritedPermissions, by checking closest array element
                    $revPerms = array_reverse($this->inheritPermission);             
                    if($revPerms[0] == 1) {
                        $this->permissionsArray[] = $thisAlias; //the level above was set to 1, so this should be a 1
                    }
                     
                }
            }
 
            if(isset($val['children'][0])) {
                $old_alias = $alias;
                $alias .= $val[$modelName][$fieldName] .'/';
                $this->_addPermissions($val['children'], $modelName, $fieldName, $level+1, $alias);
                unset($this->inheritPermission[$level+1]);  //don't want the last level's inheritance, in case it was set
                unset($this->inheritPermission[$level]);    //don't want this inheritance anymore, in case it was set
                $alias = $old_alias;
            }
        }
 
        return;
    }
}
?>