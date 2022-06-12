<?php

namespace Wramirez83\Telegram;

class Telegram extends Action{

    
    /**
     * It returns the route of the file.
     * 
     * @param routeFile The path to the file you want to upload.
     * 
     * @return A new CURLFile object.
     */
    public static function curFile($routeFile){
        return new \CURLFile($routeFile);
    }

}