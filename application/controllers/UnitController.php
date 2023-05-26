<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UnitController extends CI_Controller
{
	public function index()
	{

		$this->load->model("CalculateModel");

		$x = $this->CalculateModel->cal();
		echo $x;
	}
}
