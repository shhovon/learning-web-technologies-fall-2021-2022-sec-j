<?php
	session_start();

	if(isset($_POST['submit']))
	{
		if($_POST['username'] != "")
		{
			if($_POST['password'] != "")
			{
				if($_POST['email'] != "")
				{
					$m_user = array (
						'username'=> $_POST['username'],
						'password'=> $_POST['password']
					);
					$_SESSION["m_user"][]=$m_user;
					header('location: login.html');
				}
				else
				{
					echo "Invalid email...";
				}	
			}
			else
			{
				echo "Invalid password...";
			}
		}
		else
		{
			echo "Invalid username...";
		}
	}
?>