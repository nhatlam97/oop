<?php 
	//định nghĩa interface
	interface A
	{
		//trong interface không được phép định nghĩa thuộc tính
		//được phép định nghĩa phương thức nhưng phải là phương thức rỗng
		//phạm vi truy cập của phương thức là public ,không được phép protected và private
		public function demo();// đây là phương thức rỗng,không có {}
		public function test();
	}
	//interface kế thừa interface dung extends
	interface B extends A
	{
		public function check();
	}
	// CLASS kế thừa INTERFACE dùng implements
	class C implements B
	{
		// TRONG class C phải khai báo lại toàn bộ các phương thức của interface
		public function demo()
		{
			echo "this is method" .":" .__FUNCTION__;
		}
		public function test()
		{
			echo "this is method" ." ". __FUNCTION__;
		}
		public function check()
		{

		}
	}
		//interface không thể khởi tạo đối tương
	$C = new C;	
	$C->demo();
 ?>