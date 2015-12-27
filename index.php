<?php

include_once 'autoload.php';

//echo file_exists('Some/Dir/A.php');


Some_Dir_A::say();


Some_Dir_B::say();


use Carbon\Carbon;


$c = new Wtis\Controllers\TestController();
$c->index(Carbon::tomorrow());


//phpinfo();