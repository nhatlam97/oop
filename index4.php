<?php 
	namespace Application;
	require 'index3.php';
	use oop\b2\student as MyStudent; //  tên namespace\tên class
	// as MyStudent đổi tên class Student thành MyStudent
	class worker extends MyStudent
	{

	}
	$worker = new worker;
	echo $worker->test();
 ?>