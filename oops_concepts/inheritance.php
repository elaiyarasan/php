<?php 
//how the class is extends to another another class is called inheritancs
class shap
{
	public function master()
	{
		echo "this public inheritance";
	}
}
class cir extends shap
{

}

$obj=new cir();
$obj->master();
?>