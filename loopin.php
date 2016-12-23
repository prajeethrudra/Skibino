<?php
$craftid = $_POST['craftid'];
$userid = $_POST['userid'];
include "config.php" ;
		if($mydb)
		{	
			$date=date("Y-m-d H:i:s");
			$result = mysql_query("SELECT * FROM loopboxgate where user_id='$userid' AND craft_id ='$craftid' ");
				$number_of_rows=mysql_num_rows($result);
			if ($number_of_rows) {
				 $result6 = mysql_query("SELECT * FROM loopboxgate where user_id='$userid' AND craft_id ='$craftid' ");
				$row=mysql_fetch_array($result6);

					
						$stampG=$row['stampG'];
				        $stampS=$row['stampS'];
				        $stampB=$row['stampB'];

				$query4="UPDATE mycrafts
				SET stampG = stampG + $stampG , stampS= stampS +  $stampS , stampB =  stampB + $stampB 
				WHERE  uniqueid='$userid' AND craftname ='$craftid'";
			    mysql_query($query4,$connect);



				$result = mysql_query("DELETE FROM loopboxgate where user_id='$userid' AND craft_id ='$craftid' ");
				mysql_query("DELETE FROM loopboxrate where user_id='$userid' AND craft_id ='$craftid' ");

				echo "Your Craft is Looped out";
			}
			else
			{
				mysql_query("INSERT INTO loopboxgate (user_id,craft_id,time,stampG,stampS,stampB,total) VALUES ('$userid','$craftid','$date',0,0,0,0) ");
				echo "Your craft is inserted in Loopbox";
			}
		}
?>