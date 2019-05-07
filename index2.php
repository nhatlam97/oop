<?php

class A 
{
	// keyword : static - property
	public static $name = 'Nguyen Van A';
	private static $age = 20;
	protected static $money = 100000;

	// keyword : static - method
	public static function getName()
	{
		// return "ABC";
		// return A::getAge();
		//return self::getAge();
		return self::$age;
	}

	private static function getAge()
	{
		return 100;
	}

	public function demo()
	{
		//return $this->getName();
		//$this == A : $this::getName();
		return self::getName();
	}

	public static function test()
	{
		// vi noi bo trong phuong thuc satic khong co con tro this
		// nen can tao ra doi tuong de truy cap vao 1 phuong thuc khong phai la static trong class 
		return (new self)->demo();
	}
}

$a = new A;
$demo = $a->demo();
echo $demo;
echo "<br/>";

$test = A::test();
echo $test;
echo "<br/>";

// $myName = $a->name; // sai vi property co keyword static di kem
// echo $myName;
$myName = A::$name;
echo $myName;
echo "<br/>";
// A::$age; // sai vi property la private
// A::$money // sai vi property la protected

$getName = A::getName();
echo $getName;
