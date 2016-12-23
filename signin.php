<?php 
$userpassword=$_POST['userpassword'];
$email=$_POST['emailid'];
$password=md5($userpassword);
if($email && $password)
{
		$connect= mysql_connect('localhost','root','');
		$mydb=mysql_select_db("skibino2");
		if($mydb)
		{
			$query="SELECT * FROM registration WHERE email_id='$email' AND password='$password' ";
			$confirm=mysql_query($query,$connect);
			$number_of_rows=mysql_num_rows($confirm);
			$info = mysql_fetch_array( $confirm );
			//echo $number_of_rows;
			if($number_of_rows==1)
			{	
				session_start();
				 
				$_SESSION['uid']=$info['uniqueid'];
				echo "1";
			}
			else
			{
				echo "error during registration";
			}

		}
}

?>