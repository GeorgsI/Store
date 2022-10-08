<?php
namespace app\models;
use core\ConnectDB;
use \PDO;
class PagePromo extends Model{

    function execute($action, $parameters)
    {
        parent::execute($action, $parameters);
        //$this->data = 'Данные страницы Promo';
        include_once('settings.php');
       
        $db = new ConnectDB(HOST, USER, PASSWORD ,DATABASE, CHARSET);
        $t = $db->executeAll('SELECT * FROM userstatus', PDO::FETCH_NUM );
        
        
        
        $this->data =  $t ;
        
        
    }
    
    
   

    public function getData()
    {
        
        return $this->data;
    }
    
}

