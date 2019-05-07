<?php 
	abstract class A
	{
		//được phép khai báo thuộc tính
		public $age =22;
		protected $name = 'luunhatlam';
		private $address = 'Thanh Hoa';

		//có 2 loại phương thức
		abstract public function demo();//phương thức bắt đầu bằng abstract là phương thức rỗng ,chỉ được phép public hoặc protected,không được phép private
		public function test()
		{
			return $this->age;
		}
	}
	class B extends A
	{
		// các phương thức có ABSTRACT phải khai báo lại
		public function demo()
		{

		}
	}
	//abstract không thể khởi tạo đối tương
	$b = new B;
	echo $b->test();
 ?>