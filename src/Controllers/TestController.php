<?php

namespace Wtis\Controllers;


class TestController
{

    public function index($someStuff)
    {
        echo 'Hi from test controller';
        echo "\n $someStuff";
    }

}