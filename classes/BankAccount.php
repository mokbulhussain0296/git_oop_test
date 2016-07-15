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

        $this->balance=(string)$this->value+(string)$amount;
        
    }


    public function transfer(Money $amount, BankAccount $account)
    {

        
        
        if((string)$amount >(string)$this->balance)

        {

            throw new Exception("Withdrawl amount larger than balance");

        }
       
        $account->balance =(string)$account->balance +(string)$amount;

        $this->balance =(string)$this->balance -(string)$amount;
        
    }


    public function withdraw(Money $amount)

    {

         if ($amount->value() > $this->balance) {
            
            throw new Exception("Withdrawl amount larger than balance");
        }

        $this->balance -= $amount->value();

    }
}
