<?php

//  app /Lib/Exception/AppException.php
    class AppException extends CakeException
    {
        public function __construct($message, $code = 0)
        {
            parent::__construct($message, $code);

            return $this;
        }

        public function getRoute()
        {
            return $this->_attributes['route'];
        }

        public function setRoute($route = null)
        {
            $this->_attributes['route'] = $route;

            return $this;
        }

        public function hasRoute()
        {
            return isset($this->_attributes['route']);
        }
    }

?>