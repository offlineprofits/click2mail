<?php
session_start();
$data = array(0 => array(
						array('name' => 'NAME', 'value' => 'Some Guy'),
						array('name' => 'ADDRESS', 'value' => '123 Spring St.'),
						array('name' => 'CITY', 'value' => 'Arlington'),
						array('name' => 'STATE', 'value' => 'VA'),
						array('name' => 'ZIP', 'value' => '22902')
						),						
			  1 => array(
						array('name' => 'NAME', 'value' => 'Other Guy'),
						array('name' => 'ADDRESS', 'value' => '456 Main St.'),
						array('name' => 'CITY', 'value' => 'Ridgefield'),
						array('name' => 'STATE', 'value' => 'CT'),
						array('name' => 'ZIP', 'value' => '26810')
						));


echo $data[0][2]["name"];


?>
<?php
$name		=	$_POST['txtname'];
$address	=	$_POST['txtadd'];
$city		=	$_POST['txtcity'];
$state		=	$_POST['txtstate'];
$zip		=	$_POST['txtzip'];
$add = array("NAME" => $name , "ADDRESS" => $address,"CITY"=>$city,"STATE"=>$state,"ZIP"=>$zip) ;




//$all = $_SESSION['all'];

$all[] = $add ;

//$_SESSION['all'] = $all;


echo '<pre>';
$data=$all;
print_r($data);
?>