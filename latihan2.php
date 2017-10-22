<?php 
class hargapakaian{
	public $celana;
	public $baju;
	public $rok;
	public $levis;
	public $harga1;
	public $harga2;
	public $harga3;
	public $harga4;

public function __construct($a,$b,$c,$d,$e,$f,$g,$h)
{
	$this->celana = $a;
	$this->baju = $b;
	$this->rok = $c;
	$this->levis = $d;
	$this->harga1 = $e;
	$this->harga2 = $f;
	$this->harga3 =$g;
	$this->harga4 =$h;
}

public function a()
{
	return $this->celana;
}
public function b()
{
	return $this->baju;
}
public function c()
{
	return $this->rok;
}
public function d()
{
	return $this->levis;
}
public function e()
{
	return $this->harga1;
}
public function f()
{
	return $this->harga2;
}
public function g()
{
	return $this->harga3;
}
public function h()
{
	return $this->harga4;
}
}

 ?>