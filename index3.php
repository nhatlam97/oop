<?php 
	namespace oop\b2 ;
	//không được phép có bất kỳ dòng lệnh nào đứng bên trên từ khóa NAMESPACE
	class student
	{
		public function test(){
			return "đây là " ."phương thức: " . __FUNCTION__ .",". "namespace:" . __NAMESPACE__;
		}
	}
 ?>