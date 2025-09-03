<?php

class BankAccount
{
    private $pangalan;
    private $balance;

    public function __construct($pangalan, $Balance = 1000)
    {
        $this->pangalan = $pangalan;
        $this->balance = $Balance;

        echo "Welcome $this->pangalan ! your account has been created\n";
        echo "Your current Balance is: " . $this->balance . "\n\n";
    }

    public function __destruct()
    {
        echo "Goodbye {$this->pangalan} your session has ended\n";
    }
}

echo "Enter your name: ";
$name = readline();

$account = new BankAccount($name);

?>