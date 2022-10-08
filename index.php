<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="icon-fonts/css/all.css" rel="stylesheet"> 
    </head>
    <body>
        <div class="wrepper">
        <?php
       
        include_once('routes.php');
        spl_autoload_register(function($class){
            $class =  str_replace('\\', '/', strtolower($class)).'.php';
                    
           
            //echo $class;
            if (file_exists($class))
                return include_once($class);
                //echo 1;
            else
               //echo 2;
                return false;
            
            
        });
        
      
       if(isset($_GET)){
            $r = new router\Router( $_GET, $return);
            $r->getRoute();
            
       } 
       //var_dump($_GET); 
        
     
        
        ?>
        </div>    
        <script src="javaScript/script.js"></script>
    </body>
</html>
