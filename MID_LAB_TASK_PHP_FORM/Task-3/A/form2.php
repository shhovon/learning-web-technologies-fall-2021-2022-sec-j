<?php 

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['mydob'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}else{
		echo "invalid request...";
	}
	
?>