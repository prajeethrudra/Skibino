<?php
session_start();
    $unique_id=$_SESSION['uid'];

$name=$_POST['sname'];
$gender=$_POST['sgender'];
$location=$_POST['slocation'];
$genre=$_POST['sgenre'];
$dob=$_POST['sdob'];
$phone=$_POST['sphone'];
$about=$_POST['sabout'];
$achmt=$_POST['sachmt'];
$doing=$_POST['sdoing'];
$addr=$_POST['saddr'];
if($phone=='')
{
	$phone= 'NULL';
}
if($gender=='')
{
	$gender= 'NULL';
}

		$connect= mysql_connect('localhost','root','');
		$mydb=mysql_select_db("skibino2");
		if($mydb)
		{
				if(! $connect )
				{
				  die('Could not connect: ' . mysql_error());
				}else
				{
					$query="UPDATE profile
				    SET name = '$name' ,location ='$location' , sex = $gender , genre= '$genre' ,  dob = '$dob' ,  about = '$about' , achmnts = '$achmt' , phone = $phone , doing = '$doing' , addr ='$addr'
				WHERE uniqueid = '$unique_id' ";
			    mysql_query($query,$connect);
			    echo '0' ;

				}
			/*$query="SELECT * FROM profile WHERE uniqueid='$unique_id' ";  
	        $confirm=mysql_query($query,$connect);
	        $info = mysql_fetch_array( $confirm );
	        $picpath=$info['picpath'] ;
	        echo $picpath;*/        
			//mysql_query("INSERT INTO profile ( uniqueid , name , sex , dob , email_id , phone , genre , about , achmnts , location , doing , addr ,picpath ) VALUES 
			//	('$unique_id','$name', $gender, '$dob' ,'$email', $phone,'$genre','$about','$achmt','$location','$doing','$addr','$picpath') ");

				

		}
		mysql_close();
?>