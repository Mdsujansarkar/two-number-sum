<?php
declare(strict_types=1);
namespace App;

class Sum {
    public ?float $first_number;
    public ?float $secound_number;
    public function __construct(float $first_number, float $secound_number)
    {
        $this->first_number = $first_number;
        $this->secound_number = $secound_number;
    }
    public function getSum(): float {
        return $this->first_number * $this->secound_number;
    }
}
$ob = new Sum(5.2, 5.9);
echo $ob->getSum();
