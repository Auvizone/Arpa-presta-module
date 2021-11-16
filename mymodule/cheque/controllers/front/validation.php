<?php

class ChequeValidationModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
    $this->context->smarty->assign(
        array(
        'paymentId' => Tools::getValue('id'),
        'paymentStatus' => [...],
        ));
    }

    $this->setTemplate('module:cheque/views/templates/front/validation.tpl');

}