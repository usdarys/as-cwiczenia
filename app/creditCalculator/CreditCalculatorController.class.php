<?php

require_once $conf->rootPath . '/vendor/smarty/smarty/libs/Smarty.class.php';
require_once $conf->rootPath . '/app/creditCalculator/CreditCalculatorForm.class.php';
require_once $conf->rootPath . '/app/shared/messageList/MessageList.class.php';

class CreditCalculatorController {

    private $form;
    private $installment;
    private $messages;

    public function __construct() {
        $this->form = new CreditCalculatorForm();
        $this->messages = new MessageList();
        $this->installment = null;
    }

    public function process() {
        if ($this->validateForm()) {
            $this->calculateCreditInstallment();
        }

        $this->generateView();
    }

    private function validateForm() {    
        if (!isset($this->form->amount) || !isset($this->form->numberOfYears) || !isset($this->form->interest)) {
            return false;
        }

        if (!is_numeric($this->form->amount)) {
            $this->messages->addItem('Niepoprawny format kwoty');
        }
        
        if (!is_numeric($this->form->numberOfYears)) {
            $this->messages->addItem('Niepoprawny format liczby lat');
        }
        
        if (!is_numeric($this->form->interest)) {
            $this->messages->addItem('Niepoprawny format oprocentowania');
        }

        if (!$this->messages->isEmpty()) {
            return false;
        }
        
        $this->form->amount = floatval($this->form->amount);
        $this->form->numberOfYears = intval($this->form->numberOfYears);
        $this->form->interest = floatval($this->form->interest);
        
        if ($this->form->amount <= 0) {
            $this->messages->addItem('Kwota musi być większa od zera');
        }
    
        if ($this->form->numberOfYears <= 0) {
            $this->messages->addItem('Liczba lat musi byc min. 1');
        }
    
        if ($this->form->interest < 0) {
            $this->messages->addItem('Oprocentowanie nie moze być mniejsze niż 0');
        }
    
        if (!$this->messages->isEmpty()) {
            return false;
        }
    
        return true;
    }

    private function calculateCreditInstallment() {
        if ($this->form->interest == 0) {
            $this->installment = $this->form->amount / ($this->form->numberOfYears * 12);
        } else {
            $this->installment = ($this->form->amount / ($this->form->numberOfYears * 12)) + ($this->form->interest * $this->form->amount / 100);
        }
    
        return $this->installment;
    }

    private function generateView() {
        global $conf;

        $smarty = new Smarty;

        $smarty->assign('conf', $conf);
        $smarty->assign('amount', $this->form->amount);
        $smarty->assign('numberOfYears', $this->form->numberOfYears);
        $smarty->assign('interest', $this->form->interest);
        $smarty->assign('installment', $this->installment);
        $smarty->assign('messages', $this->messages);
        $smarty->assign('appUrl', $conf->appUrl);
        
        $smarty->display($conf->rootPath . '/app/creditCalculator/creditCalculatorView.tpl');
    }

}