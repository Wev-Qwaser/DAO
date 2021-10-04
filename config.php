<<<<<<< HEAD
<?php

spl_autoload_register(function($class_name){
    $filename ="classes".DIRECTORY_SEPARATOR.$class_name.".php";

    if(file_exists(($filename))) {
        require_once($filename);
    }

});


=======
<?php

spl_autoload_register(function($class_name){
    $filename ="classes".DIRECTORY_SEPARATOR.$class_name.".php";

    if(file_exists(($filename))) {
        require_once($filename);
    }

});


>>>>>>> 514a1cee1fbf649e70cb80636df7e7aecb541353
?>