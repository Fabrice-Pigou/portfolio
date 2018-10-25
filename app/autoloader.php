<?php
namespace app;
/**
 * Class AutoLoader 
 * @author Goupy94 www.goupy.eu
 * @version 1.0
 */
class AutoLoader{
    /**
     * Enregistre notre autoloader
     */
    public static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    
    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    public static function autoload($class){
        
        if (strpos($class, __NAMESPACE__) === 0){
            
            $class = str_replace(__NAMESPACE__, '', $class);
            $class = str_replace('\\', '/', $class);
            require '../app'. $class . '.php';
        }
    }
}