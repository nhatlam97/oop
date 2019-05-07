<?php 
	class Demo{
		// khai báo method magic
		//construct
		public function __construct($a,$b=12)
		{
			//phuong thuc này sẽ luôn luôn chạy đầu tiên khi khởi tạo đối tượng cho class
			echo "this is method construct - {$a} - {$b}";
			echo "<br>";
		}

		//destruct
		public function __destruct(){
			echo "<br>";
			//phương thức này sẽ chạy cuối cùng khi khởi tạo đối tượng cho class
			echo "this is method destruct";
		}
		public function test(){
			// __CLASS__ : lấy ra tên class hiện tại mà phương thức đang làm việc			
			// __FUNCTION__ : lấy ra tên phương thức hiện tại đang làm việc
			echo "this is method test ---"  . __CLASS__ .'---'. __FUNCTION__;
			echo "<br>";
		}
		public function __call($a,$b){
			// __call luôn có 2 tham số truyền vào tùy ý
			echo "this is method __call";
			echo "<br>";
			var_dump($a,$b);
			echo "<br>";
			// phương thức này sẽ chạy khi truy cập vào 1 phuonggw thức ko tồn tại trong class(ko phải là phương thức static)
		}
		public static function __callStatic($a,$b){
			//luôn có 2 tham số truyền vào
			echo "this is method __callStatic";
			echo "<br>";
			//tự động chay khi truy cập vào phương thức static không tồn tại trong class
		}
		public function __get($key){
			echo "bạn vừa truy cập vào thuộc tính {$key} không tồn tại trong class";
			echo "<br>";
		}
		public function __set($key,$value){
			echo "bạn vừa truy cập vào thuộc tính {$key} không tồn tại và gán gia tri {$value} cho thuộc tính {$key}";
			echo "<br>";
		}
	}
	// tham số truyền vào
	$demo = new Demo('lphp1811e');
	$demo->test();
	$demo->testCall();
	Demo::testCallStatic();// truy cập vào phương thức static
	$age  = $demo->age;
	echo "$age";
	$money = $demo->money = 20;
	echo "$money";
 ?>