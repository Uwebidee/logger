<?php

class System_Log_Log {
    protected $handle;
    protected $vars;

    function __construct(System_Log_LogInterface $handle) {
        $this->handle = $handle;
    }

    public static function getInstance($type) {
        if (!isset($type) || (strlen($type) < 1)) {
            return null;
        }

        $type = 'System_Log_' . $type;

        if (class_exists($type)) {
            $class = new $type();
        }

        
     
        return new self($class);
    }

    public function prepare() {
        $args = func_get_args();
        $this->vars = $this->handle->prepare($args);
        return $this;
    }

    public function save() {
        $this->handle->save($this->vars);
    }
}