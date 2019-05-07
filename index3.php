<?php

class A 
{
	private $age = 20;
	public $name = 'NVA';
	protected $money = 1000;

	public function getMoney()
	{
		return $this->money;
	}

	protected function getName()
	{
		return $this->name;
	}
}

// ke thua trong lap trinh php
class B extends A 
{
	public function demo()
	{
		return $this->getName();
	}

	// tinh da hinh - override
	public function getMoney()
	{
		return $this->demo();
	}
 
	public function test()
	{
		return parent::getMoney();
	}
}

$b = new B;
$money = $b->getMoney();
//$name = $b->getName();
echo $money;
echo "<br/>";
$demo = $b->demo();
echo $demo;

