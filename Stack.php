<?php


class Stack
{
    protected $stack;
    protected $size;

    public function __construct()
    {
        $this->stack= [];
        $this->size = 0;
    }

    public function push($element)
    {
        array_push($this->stack,$element);
        $this->size++;
    }

    public function pop()
    {
        if ($this->isEmpty()){
            echo "STACK IS EMPTY!";
        }else{
            return array_pop($this->stack);
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}

