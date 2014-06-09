<?php

require_once '../includes/initialize.php';
require_once SITE_ROOT . DS . 'index.php';

class indexTest extends PHPUnit_Framework_TestCase {
    
    public function setup() {
        $this->fetch = new FetchTask;
    }
}
