<?php
class Stack{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10)
    {
        $this->stack =array();
        $this->limit = $limit;
    }
    public function push($item)
    {
        if (count($this->stack) < $this->limit) {

         array_unshift($this->stack, $item);
        }
        else{
            throw new \http\Exception\RuntimeException('Stack is full');
        }

    }

    public function pop()
    {
        if ($this->isEmpty()) {

            throw new  \http\Exception\RuntimeException('Stack is empty');
        } else{
          return array_shift($this->stack);
        }

    }

    public function top()
    {
        return current($this->stack);

    }
    public function isEmpty()
    {
        return empty($this->stack);

    }
}
$myBooks = new Stack();
$myBooks->push(1);
$myBooks->push(2);
$myBooks->push(3);
$myBooks->push(4);
$myBooks->push(5);

echo $myBooks->pop();
echo'<br>';
echo $myBooks->pop();
echo'<br>';
echo $myBooks->pop();
echo'<br>';
echo $myBooks->top();
echo'<br>';
echo $myBooks->pop();
echo'<br>';
$myBooks->push(100);
echo $myBooks->pop();
