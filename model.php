<?php

class A{
    public $a1 = 1;
    protected $a2=2;
    private $a3 = 3;
    public function F1(){
       echo $this->a1 + $this->a2;
    }   
    public const PI = 3.14;
}
   
class B{
    public $b1 = 1;
    public $b2 = 1;  
    function __construct( $b1, $b2=4){
       $this->b1=$b1 ;
        $this->b2=$b2;
    }   
    public function __destruct(){
      echo  $this->b1 + $this->b2;
     }   
     public function F(){
        echo  $this->b1;
       }   
       const n = 100;

}

class C{
   public $c1 = 10;
   public function F1(){
      return new B($this->c1);
   }
}

?>