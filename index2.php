<?php 
	//chống kế thừa trong oop
	final class A{
		// tất cả các class khác không thể kế thừa class này
		public function test(){
			echo "this is test";
		}
	}
	class B{
		final public function test(){// không cho phép khai báo lại phương thức
			echo "this is test";
		}
	}
	class C extends B{
		public function __construct(){
			echo "this is:" . __FUNCTION__." " ."of class" . __CLASS__;
			echo "<br>";
		}
		public function test2(){
			echo "this is test2";
			echo "<br>";
		}
	}

	class D extends C{
		public function __construct(){
			parent::__construct();//triệu gọi construct của lớp cha
			echo "this is:" . __FUNCTION__." " ."of class" . __CLASS__;
			echo "<br>";
		}
	}
	$B = new B;
	echo $B->test();
	echo "<br>";
	$C= new C;
	echo $C->test2();
	$D = new D;
 ?>