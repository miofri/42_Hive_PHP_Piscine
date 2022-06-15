<?php
require_once 'Vertex.class.php';
class Vector {
	private $_x;
	private $_y;
	private $_z;
	private $_w;
	public static $verbose = false;

	public function __construct($arr){
		if (isset($arr['dest']))
			$dest = $arr['dest'];
		if (isset($arr['orig']))
			$orig = $arr['orig'];
		else{
			$orig = new Vertex(array('x' => 0, 'y' => 0, 'z' => 0, 'w' => 1));
		}
		$this->_x = $arr['dest']->getX() - $orig->getX();
		$this->_y = $arr['dest']->getY() - $orig->getY();
		$this->_z = $arr['dest']->getZ() - $orig->getZ();
		if (Self::$verbose){
			printf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
		}
	}
	public function __toString(){
		if (Self::$verbose)
			return sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
	}
	public function __destruct(){
		if (Self::$verbose){
		printf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
		}
	}
	static function doc() {
	if (file_exists("Vector.doc.txt")) {
		return file_get_contents("Vector.doc.txt");
		}
	}
	public function magnitude(){
		$magnitude = floatval(sqrt(pow($this->getX(), 2) + pow($this->getY(), 2) + pow($this->getZ(), 2)));
		return $magnitude;
	}
	public function normalize(){
		$mag = $this->magnitude();
		$normalised = new Vertex (
			array(
				'x' => $this->getX() / $mag,
				'y' => $this->getY() / $mag,
				'z' => $this->getZ() / $mag
			)
			);
		return new Vector ( array('dest' => $normalised));
	}
	public function add( Vector $rhs ){
		$add = new Vertex (
			array(
				'x' => $this->getX() + $rhs->getX(),
				'y' => $this->getY() + $rhs->getY(),
				'z' => $this->getZ() + $rhs->getZ(),
			)
			);
		return new Vector(array('dest' => $add));
	}
	public function sub( Vector $rhs ){
		$sub = new Vertex (
			array(
				'x' => $this->getX() - $rhs->getX(),
				'y' => $this->getY() - $rhs->getY(),
				'z' => $this->getZ() - $rhs->getZ(),
			)
			);
		return new Vector(array('dest' => $sub));
	}
	public function opposite()
	{
		$opp = new Vertex (
			array(
				'x' => -($this->getX()),
				'y' => -($this->getY()),
				'z' => -($this->getZ())
			)
			);
		return new Vector (array('dest' => $opp));
	}
	public function scalarProduct( $k ){
		$sp = new Vertex (
			array(
				'x' => $this->getX() * $k,
				'y' => $this->getY() * $k,
				'z' => $this->getZ() * $k
			)
			);
		return new Vector (array('dest' => $sp));
	}
	public function dotProduct( Vector $rhs ){
		$dp = floatval(($this->getX() * $rhs->getX()) + ($this->getY() * $rhs->getY()) + ($this->getZ() * $rhs->getZ()));
		return $dp;
	}
	public function cos( Vector $rhs ){
		$dp = $this->dotProduct($rhs);
		$mag = $this->magnitude() * $rhs->magnitude();
		return floatval($dp / $mag);
	}
	public function crossProduct( Vector $rhs ){
		$cx = ($this->getY() * $rhs->getZ()) - ($this->getZ() * $rhs->getY());
		$cy = ($this->getZ() * $rhs->getX()) - ($this->getX() * $rhs->getZ());
		$cz = ($this->getX() * $rhs->getY()) - ($this->getY() * $rhs->getX());
		$vertex = new Vertex (array('x' => $cx, 'y' => $cy, 'z' => $cz));
		return new Vector ( array( 'dest' => $vertex));
	}
	public function getX() {
		return $this->_x;
	}
	public function getY() {
		return $this->_y;
	}
	public function getZ() {
		return $this->_z;
	}
	public function getW() {
		return $this->_w;
	}
}
?>
