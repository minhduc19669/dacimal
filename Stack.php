<?php

namespace Decimal;
class Stack
{
    public $stack = [];
    public $limit;

    public function __construct($limit = 1)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    public function push($value)
    {
        while ($value!=0){
            $remainder=$value%2;
            array_push($this->stack,$remainder);
            $value=floor($value/2);
        }
        $arr=$this->stack;
        return implode("",$arr);
    }
    public function pop(){
        if ($this->isEmpty()){
            return 'Nothing to take';
        }else{
            array_shift($this->stack);
        }
        return $this->stack;
    }
    public function top(){
        if (!$this->isEmpty()){
            array_pop($this->stack);
        }else{
            return "nothing to say";
        }
        return $this->stack;
    }
    public function isEmpty(){
        return empty($this->stack);
    }
    public function isFull(){
        if (count($this->stack)==$this->limit){
            return true;
        }else{
            return false;
        }
    }
    public function getStack(){
        return $this->stack;
    }
}