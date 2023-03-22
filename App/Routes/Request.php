<?php

namespace App\Routes;

class Request {
    
    public static function uri()
    {

        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }
    

    public static function method()
    {

        return $_SERVER['REQUEST_METHOD'];
    }


    public static function data() {

        $content = trim(file_get_contents('php://input'));

        // setting the json object here
        $contentObj = json_decode($content);

        return $contentObj;
    }


    // get any {id} accompanied by the request uri
    public static function isID()
    {

        $requestUri = self::uri();

        // split the request uri into an array
        $requestUriArr = explode("/", $requestUri);

        // pop out the {id} out from the array
        $elem = array_pop($requestUriArr);

        $elem = (int) $elem;

        if(isset($elem) && gettype($elem) === "integer" && $elem !== 0){

            return $elem;
        }
        return null;
    }

    public static function validate(array $uri)
    {
        
    }
}