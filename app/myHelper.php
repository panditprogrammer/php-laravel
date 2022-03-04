<?php
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

}
?>