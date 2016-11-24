<?php

class Entity
{
    public $vars = array();

    public function set($name, $value) {
        $this->$name = $value;
    }

    public function get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->vars[$name] =$value;
    }

    public function __get($name) {
        return $this->vars[$name];
    }

    function serialize()
    {
       return $this->vars;
    }
}