<?php 
include 'config.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);
$date=date("Y-m-d H:i:s");
echo($name);
if($name && $email && $password)
{
	
		$connect= mysql_connect('localhost','root','');
		$mydb=mysql_select_db("skibino2");
		if($mydb)
		{
				$result = mysql_query("SELECT * FROM registration where email_id='$email' ");
				$row = mysql_fetch_array($result);
				$number_of_rows=mysql_num_rows($result);
				//echo $number_of_rows;
				if($number_of_rows)
				{
				 	echo "1";
				 
				}
				else
				{ 
					$unique_id = uniqid();
				  	//echo $unique_id;
					mysql_query("INSERT INTO registration ( uniqueid , name , email_id , password , joindate) VALUES ('$unique_id','$name','$email','$password','$date') ");
					mysql_query("INSERT INTO profile ( uniqueid , name , sex , dob , email_id , phone , genre , about , achmnts , location , doing , addr ,picpath ) VALUES ('$unique_id','$name', NULL, '' ,'$email', NULL,'','','','','','','') ");
					//for creating folder
					$dir = $unique_id ;
 					//set the target path ??
					$targetfilename = "mycrafts". "/". $dir;
						if (!is_dir($targetfilename)) {
						    mkdir($targetfilename, 0777); //create the directory
						    $targetfilename = "mycrafts". "/". $dir."/crafts";
						    mkdir($targetfilename, 0777);
						}
						else
						{  
							echo "{$dir} exists and is a valid dir"; 
						}
						header("location:profile.php");

					echo "4";
				  	
				}
		}
		else 
		{
			echo "3";
		}	
		mysql_close($connect);
}
else 
{ 
	echo '2'; 
}
?>