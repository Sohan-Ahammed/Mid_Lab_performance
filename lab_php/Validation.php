<?php

if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST['name'];

	if(empty($name))
	{
		echo "enter a valid name";
	}

	elseif (strlen($name)<=1)
	{
		echo "name is too short";

	}

	else
	{
		echo "okay";
	}

	if(isset($_REQUEST['submit']))
	{
		$email=$_REQUEST['submit'];

		if(empty($email))
		{
			echo " Enter a valid email";
		}
		else
		{
			echo "okay";
		}
	}
}

 
 