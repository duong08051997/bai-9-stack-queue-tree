<?php

class Stack{
    public $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            array_push($this->stack,$arr[$i]);
        }
    }

    public function pop($arr)
    {
        $newArr = [];
        for ($i = 0; $i < count($arr); $i++) {
            $result = array_pop($this->stack);
            array_push($newArr,$result);
        }
        return $newArr;
    }
    public function display()
    {
        return $this->stack;
    }
}
$arr = [1,2,3,4,5,6,7,8,9];
$stack = new Stack();
$stack->push($arr);
echo '<pre>';
print_r($stack->display());
echo '<pre>';
print_r($stack->pop($arr));