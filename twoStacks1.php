<?php
class Stack {

    public $arr = [];
    public function push($s) {
        $this->arr[] = $s;
    }    

    public function pop() {
		if(empty($this->arr)){
		echo "Empty";
		exit;
		}
		else{return array_pop($this->arr);}
    }
}

$obj=new Stack;
$obj2=new Stack;

$obj->push(1);
$obj->push(2);
$obj->push(3);


$obj2->push($obj->pop());
$obj2->push($obj->pop());
$obj2->push($obj->pop());
//$obj2->push($obj->pop());
	
var_dump($obj2->pop());
var_dump($obj2->pop());
var_dump($obj2->pop());
//var_dump($obj2->pop());