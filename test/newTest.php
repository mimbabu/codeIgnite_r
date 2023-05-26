<?php

use PHPUnit\Framework\TestCase;

class newTest extends TestCase
{
public function __construct()

	{
		parent::__construct();
	}
	
	public function testsum()
	{
		
      $this->load->model('CalculateModel');
	  
	  $obj = $this->CalculateModel->cal();
		
		

		$obj= new CalculateModel;
        $result = $obj->cal(5,6);

        $this->assertEquals(11, $result);
	}
}