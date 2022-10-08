<?php
namespace app\models;

class Model {
    protected $action;
    protected $data;
    protected $parameters;

    public function __construct()
    {
    }

    public function execute($action, $parameters)
    {
        $this->action = $action;
        $this->parameters = $parameters;
    }

    public function getData()
    {
        return $this->data;
    }
    
    
    
}
