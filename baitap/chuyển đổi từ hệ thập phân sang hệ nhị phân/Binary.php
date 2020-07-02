
<?php

class Binary{
    public $stack;
    public $size;

    public function __construct($size=10)
    {
        $this->stack = [];
    }
     public function changeBinary($number){
        while (floor($number ) > 0){
            $surplus = $number % 2;
            $number =$number/2;
            array_unshift($this->stack,$surplus);
        }
        return implode('',$this->stack);
     }
}

$binary = new Binary();
echo $binary->changeBinary(11);

