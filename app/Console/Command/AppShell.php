<?php

App::uses('Shell', 'Console');
App::uses('AuditableConfig', 'Auditable.Lib');

/**
 * Application Shell
 *
 * Add your application-wide methods in the class below, your shells
 * will inherit them.
 *
 * @package       app.Console.Command
 */
class AppShell extends Shell
{

    public function perform()
    {

        $this->initialize();
        $this->{array_shift($this->args)}();
    }


}
