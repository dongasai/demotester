<?php

namespace unittest;

abstract class TestCase extends \Tester\TestCase
{

    public function __construct()
    {
        dump(10);
        include_once "/var/www/html/vendor/autoload.php";
    }

}