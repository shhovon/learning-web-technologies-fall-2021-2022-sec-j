<?php
	session_start();

	if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		foreach ($_SESSION['m_user'] as $user)
		{
			if($username != "")
			{
				if($password != "")
				{
					if($user['username'] == $username && $user['password'] == $password)
					{
						$_SESSION['flag'] = "true";
						header('location: home.php');
					}
					else
					{
						echo "invalid username/password<br>";
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
	}
?>