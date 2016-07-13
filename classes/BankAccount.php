<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = null;

     public $value=0;

    public function __construct(Money $openingBalance)
    {
       
        $this->balance = $openingBalance->value();

        $this->value=$this->balance;
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
        //implement this method
    }


    public function transfer(Money $amount, BankAccount $account)
    {
        //implement this method
    }


    public function withdraw(Money $amount)

    {

    }
}