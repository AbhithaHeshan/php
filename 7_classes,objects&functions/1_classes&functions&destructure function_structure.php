<?php
   class ClassName {
    // Properties (attributes)
    public $property1;
    private $property2;
    protected $property3;

    // this is the constructor
    // public function __construct() {
    
    // }

     // we can use only one constructure in php but we can alternative option for it
     public function __construct($param1 = null, $param2 = null) {
           
     }


      // destructreFunction
      // this function calls after object creation
     public function __destruct() {
        echo "Object destroyed! {$this-> property1} and {$this-> property2}";
     }

    // Methods (functions)
    public function method1($var) {   
        // Code goes here
    }

    private function method2() {
        // Code goes here
    }

    protected function method3() {
        // Code goes here
    }
}
     // this is object
     $ref = new ClassName();

     // add data to the object
     $ref->method1("data");
     
?>