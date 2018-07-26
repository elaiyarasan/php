<?php 
class Shape {
	public function name() {
		echo "class";
	}
}

$circle = new Shape();
$circle->name(); // I am a shape
?>