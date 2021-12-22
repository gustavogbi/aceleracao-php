<?php

// Adapter - Design Pattern

interface Payment
{
    function pay($valor);
}

class PaypalAdapter implements Payment
{
    private $payment;

    public function __construct(Paypal $payment)
    {
        $this->payment = $payment;
    }

    public function pay($valor)
    {
        $this->payment->payAmount($valor);
    }
}

class Paypal {
    public function __construct(){
        // Your Code here //
    }

    public function payAmount($amount){
        // Paying via Paypal //
        echo "Paying via Paypal: " . $amount;
    }
}

$paypal = new PaypalAdapter(new Paypal());
$paypal->pay('2629');
