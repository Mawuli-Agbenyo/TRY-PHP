<?php 

class Calc {
    public $operator;
    public $num1;
    public $num2;


public function __construct(string $one, int $two, int $three) {
    $this->operator = $one;
    $this->num1 = $two;
    $this->num2 = $three;

}
public function calculator() {
    switch ($this->operator) {
        case 'add':
            # code...
            $results = $this->num1 + $this->num2;
            return $results;
            break;

        case 'sub':
            # code...
            $results = $this->num1 - $this->num2;
            return $results;
            break;

        case 'div':
            # code...
            $results = $this->num1 / $this->num2;
            return $results;
            break;

        case 'mul':
            # code...
            $results = $this->num1 * $this->num2;
            return $results;
            break;
        default:
            # code...
            echo 'Error Defalut';
            break;
    }
}
}
