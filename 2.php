<?php 

class test2{
    
    public function t1()
    {
        require '1.php';
        $objT1 = new test1();
        
        $fn = function(){
          $this->t2();  
        };
        
        //$fn = test1::t1();
        //$fn();
        
        $objT1->t3($fn);
    }
    
    public function t2(){
        
        echo 345;
    }
    
}

$t2 = new test2();
$t2->t1();


