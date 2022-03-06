<?php
// this is our custom helper file 
if(!function_exists("p"))
{
    function p()
    {
        echo "this is sample function.";
    }

    function myDateFormat($date,$format)
    {
        return date($format,strtotime($date));
    }
    
    function printRaw($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
?>