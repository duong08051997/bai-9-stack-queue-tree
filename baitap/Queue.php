<?php
class Node{
    public $value;
    public $next;
    public function __construct($value)
    {
        $this->value = $value;
    }

}
class Queue{
   private $queue;
   public function __construct()
   {
       $this->queue = [];
   }

    public function isEmpty()
    {
        return empty($this->queue);
    }

    public function enqueue($value)
    {
        array_push($this->queue,$value);

    }

    public function dequeue()
    {
        $arr = [];
        if ($this->isEmpty()) {

            return null;
        }
       $result = array_pop($this->queue);
        return array_push($arr,$result);

    }
    public function display()
    {

return $this->queue;
    }

}
$queue = new Queue();
$queue->enqueue('start');
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue('end');
print_r($queue->dequeue());
echo '<pre>';
print_r($queue->display());


