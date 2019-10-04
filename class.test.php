<?php
class Test{
	public $_firstname;
	public $_lastname;
	
	 public function __construct($_firstname, $_lastname)
    {
        $this->firstname = $_firstname;
        $this->lastname = $_lastname;
    }
	
	public function showData(){
		
		echo $this->firstname.' -- ' . $this->lastname;
	}
	
	
	private function showPrivate(){
		
		echo "private -> ".$this->firstname.' -- ' . $this->lastname;
	}
	
	protected function showProtected(){
		// echo " protected -> ".$this->firstname.' -- ' . $this->lastname;
		return "I am Private!";
	}
	
}





?>