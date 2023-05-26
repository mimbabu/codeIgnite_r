<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Newcontroller extends CI_Controller
{


	public function index()
	{
		$this->load->model("TestModel");

		$a = $this->TestModel->add();
		echo $a;
	}






	// $this->load->view('plus',$a);


	// public function add(int $a, int $b)
	// {

	// 	return ($a + $b);




	// }




	// 	$obj= new add();
	// 	$result=$obj->sum(5,6);

	// 	$this->assertEquals(11,$result);

	// 	echo"The result is:" ;

	// 






}
