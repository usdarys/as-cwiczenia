<?php

require_once dirname(__FILE__) . '/../../init.php';

switch($action) {
    default: 
        include_once 'creditCalculator/CreditCalculatorController.class.php';
        $controller = new CreditCalculatorController();
        $controller->process();
    break;
    case 'creditCalculator':
        include_once 'creditCalculator/CreditCalculatorController.class.php';
        $controller = new CreditCalculatorController();
        $controller->process();      
    break;
}