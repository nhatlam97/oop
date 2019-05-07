<?php

class ChekingNumber
{
	private function check($number)
	{
		if($number % 2 == 0){
			return true;
		}
		return false;
	}

	public function showResult($a)
	{
		return $this->check($a);
	}
}

if(isset($_POST['btnCheck'])){
	$number = $_POST['number'] ?? '';
	// khoi tao doi tuong
	$chk = new ChekingNumber;
	$res = $chk->showResult($number);

	if($res){
		header("Location:../index4.php?state=even");
	} else {
		header("Location:../index4.php?state=odd  ");
	}
}