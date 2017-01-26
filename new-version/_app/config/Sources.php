<?php 

namespace PFC\Editor\Config;

class Sources
{    
    protected static $paths = [

          /**
           * DEFAULT WORKSPACE
           */  
          'public' => [
              'section'=>'sources',              
              'title'=>'Workspace',
              'name'=>'public',
              'root'=>\PFC\Editor\PUBLIC_PATH,
              'path'=>'../../../'
          ],
               
        
          /**
           * USER DATA SANDBOX 
           */
          'sandbox-src' => [
              'section'=>'sandbox',
              'title'=>'Sandbox',
              'name'=>'sandbox-src',
              'root'=>\PFC\Editor\USER_DATA_SANDBOX_PATH,
              'path'=>'./'
          ],          

          /**
           * USER DATA HOME 
           */        
          'my-home-src' => [
              'section'=>'my-home',
              'title'=>'MY HOME',
              'name'=>'my-home-src',
              'root'=>\PFC\Editor\USER_DATA_HOME_PATH,
              'path'=>'./'
          ],  
          
          
        
         /**
          * PFC EDITOR SOURCES
          */
        
          'pfc-public' => [
              'section'=>'editor',
              'title'=>'Public',
              'name'=>'pfc-public',
              'root'=>\PFC\Editor\PUBLIC_PATH,
              'path'=>'./'
          ],
        
         'pfc-app' => [
               'section'=>'editor',
                'title'=>'app',
                'name'=>'pfc-app',
                'root'=>\PFC\Editor\APPLICATION_PATH,
                'path'=>'./'              
          ],
        
          'pfc-lib' => [
                'section'=>'editor',
                'title'=>'lib',
                'name'=>'pfc-lib',
                'root'=>\PFC\Editor\LIBRARY_PATH,
                'path'=>'./'              
          ],

          'pfc-data' => [
                'section'=>'editor',
                'title'=>'data',
                'name'=>'pfc-data',
                'root'=>\PFC\Editor\DATA_PATH,
                'path'=>'./'              
          ],
        
          'pfc-cfg' => [
                'section'=>'editor',
                'title'=>'cfg',
                'name'=>'pfc-cfg',
                'root'=>\PFC\Editor\APPLICATION_PATH,
                'path'=>'./config/'              
          ],                                
    ];
 
    public static function getPaths()
    {
        return self::$paths;
    }
    
    public static function getBySections() 
    {
        $sections = [];
        foreach(self::getPaths() as $path) {            
            if(!isset($sections [$path['section']])) {
                $sections [$path['section']]= [];
            }
            
            $sections [$path['section']] [$path['name']]= $path;                            
        }
        
      return $sections;  
    }
    
    public static function getSections() 
    {
        $sections = [];
        foreach(self::getPaths() as $path) {
            if(!in_array($path['section'], $sections)) {
                $sections []= $path['section'];
            }
        }
        
      return $sections;  
    }
    
    public static function addPath(array $data) {        
        self::$paths [$data['name']]= $data;        
    }    
}

