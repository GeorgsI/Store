<?php
namespace app\models;

class Page1 extends Model{
    
   
    function execute($action, $parameters)
    {
        parent::execute($action, $parameters);
        $this->data = 'Данные страницы page1';
    }
    

   

    public function getData()
    {
        return $this->data;
    }
    
}
