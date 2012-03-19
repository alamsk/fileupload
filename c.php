<?php
class Test{
 public $b='Alam';
  public $data;
   public function __construct()
    {
	   echo this->;
	 
	   }
	
  
  public function printTest($data){
      
    if(isset($this)){
	  //echo $this->b;
	  echo $this->data=$data;
	  echo $this->b;
	  echo get_class($this);
	     }
     else{
	  echo 'This is not define';
	   }
      }
  }
  
    $T=new Test();
	$T->printTest(5);
	//echo $T->b;
	
 class B extends Test{
      public $data;
	  public $b='Bisu';
	   public function printTest($data){
	      parent::printTest(6);
	    echo $this->data=$data;
	    
	   }
      	
	  }
	  
	 $B=new B(); 
	 $B->printTest(10);

?>