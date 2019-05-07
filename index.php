<?php

// khai niem class trong php
class Student 
{
	// khai bao thuoc tinh cho doi tuong thuoc class
	// thuoc tinh : dac diem - tinh chat cua doi tuong
	// bieu dien thong qua cac bien trong lap trinh
	// khi muon khai bao thuoc tinh cho doi tuong - chung  ta can phai bien khai niem pham vi hoat dong cua thuoc tinh do
	// 1 - private : chi su dung duoc trong pham vi noi bo cua lop
	private $nameClassRoom = 'LPHP';
	// 2 - protected : chi su dung noi bo trong class va nhung lop ke thua chinh lop do
	protected $age = 20;
	// 3 - public: su dung o bat ky dau
	public $name = 'Nguyen Van A';

	// khai bao phuong thuc - method cho doi tuong thuoc class
	// chung ta can khai pham vi hoat dong cho phuong thuc
	// phuong thuc thi chung bieu dien bang ham trong lap trinh php
	private function getNameClass($name = 'abc')
	{
		return $name;
	}

	public function getMyAge()
	{
		// truy cap vao thuoc tinh trong class
		// $this : cont tro dai dien cho object thuoc chinh class do
		return $this->age;
	}

	protected function getName()
	{
		return $this->name . ' - ' . $this->age;
	}
}

// khai niem object trong php
$cntt = new Student;
$cokhi = new Student;
$dientu = new Student;

// cach truy cap vao 1 thuoc tinh trong class thong qua doi tuong thuoc class do
//$nameClass = $cntt->nameClassRoom; sai vi property la private
//echo $nameClass;
//$myAge = $cokhi->age; sai vi property la protected
//echo $myAge;
$myName = $dientu->name;
echo $myName;
echo "<br/>";

// cach truy cap vao 1 phuong thuc trong class thong qua doi tuong thuoc class do
//$nameClass = $cntt->getNameClass('Nguyen Van B'); sai : vi method la private
//echo $nameClass;
$age = $cokhi->getMyAge();
echo $age;
echo "<br/>";

// $name = $dientu->getName(); // sai vi method la protected
// echo $name;



