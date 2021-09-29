<?php 

	//print_r($_GET);
	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}
	
?>
