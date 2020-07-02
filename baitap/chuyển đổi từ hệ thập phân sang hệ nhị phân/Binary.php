<?php
class Binary{
    public $stack;
    public $size;

    public function __construct($size=10)
    {
        $this->stack = [];
    }
     public function changeBinary($number){
        $arr = [];
        while ($number > 0){
            $numberOne = (int)($number/2);
            $surplus = $number % 2;
            $number = $numberOne;
            array_unshift($arr,$surplus);
        }
        return implode('',$arr);
     }

}
$number = new Binary();
echo $number->changeBinary(10);