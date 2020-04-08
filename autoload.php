
<?php /*?>
<?php

function controllers_autoload($classname){
	include 'controllers/' . $classname . '.php';
}

spl_autoload_register('controllers_autoload');
?><?php */?>

<?php 

function controller($clasename){
	
	
    require 'controllers/' . $clasename . '.php';
}


spl_autoload_register('controller');


?>