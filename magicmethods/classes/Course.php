<?php

class Course
{
    function __get($a)
    {
        echo "hello";

    }

    function __set($propertiesname, $propertiesvalue)
    {
       // echo "hello";
       // var_dump($propertiesname);
       // var_dump($propertiesvalue);


    }

    function __call($functionname, $arguments)
    {
        //echo "hello";
        //var_dump($functionname);
        //var_dump($arguments);


    }

    function __sleep(){
        echo "I am Waking.....";
        return array();
    }

    function __wakeup(){
        echo "I am Waking.....";
        return array();
    }
}
