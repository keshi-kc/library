<?php 

//print_r($_POST); 
foreach ($_POST as $key=>$value)
{
	echo "<br/> ";
	echo $key."=>>";
	echo $value;
	
}

die;
$fields=array();
$where=array();

class controller {
	
		public function showReport() {
		require_once('searchmodel.php');
		$obj = new mymodel();
		
		foreach ($_POST as $key=>$value)
			{
				if($value=="on"){
					$obj->fields[]=$key;
				}
				else{
					$obj->where['a.'.$key]=$value;
					}
			}
			
			if(!empty($obj->where)) {
				$obj->displayReport($obj->fields,$obj->where);
			}
			else {
				header('location:searchview.php');
			}
	
// 		if(isset($_POST["numberOfCopies"])) {
// 			$obj->arr[]="numberOfCopies";
// 			//echo $_POST['numberOfCopies'];
			
// 		}
// 		if(isset($_POST["dateOfPurchase"])) {
// 			$obj->arr[]="dateOfPurchase";
// 			//echo $_POST['numberOfCopies'];
// 			//die;
// 		}
// 		if(isset($_POST["vendorName"])) {
// 			$obj->arr[]="vendorName";
// 		}
// 		echo "<br/>";
// 		echo"<pre>";
// 		print_r($obj->fields); echo"</pre>";
// 		print_r($obj->where); echo"</pre>";
// 		//die;
		//$obj->arr=;
		//$obj->displayReport($obj->fields,$obj->where);
	} 
	
	
}
$request ="";
if(isset($_REQUEST["method"])) {
	$request=$_REQUEST["method"];
	
}

$obj1= new controller();

$obj1->$request(); 

?>