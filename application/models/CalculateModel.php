<?php

require 'vendor/autoload.php';

class CalculateModel extends CI_Model
{
	public function cal($x,$y)
	{
		
		return $x+$y;
	}
}