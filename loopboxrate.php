<?php
session_start();
$rater=$_SESSION['uid'];
$craftid = $_POST['craftid'];
$userid = $_POST['userid'];
$type =$_POST['type'];
if($type=='1' )
		{
			$stampG=1;
			$stampS=0;
			$stampB=0;

		}else if($type == '2')
		{

			$stampS=1;
			$stampG=0;
			$stampB=0;
		}else if($type == '3')
		{

			$stampB=1;
			$stampG=0;
			$stampS=0;
		}



include "config.php" ;
if($mydb)
{
		$result = mysql_query("SELECT * FROM loopboxrate where user_id='$userid' AND craft_id ='$craftid' AND cust_id='$rater' ");
		$number_of_rows=mysql_num_rows($result);
		//echo $number_of_rows;
		if($number_of_rows)
		{
			$result1 = mysql_query("SELECT * FROM loopboxrate where user_id='$userid' AND craft_id ='$craftid' AND cust_id='$rater' ");
				$row=mysql_fetch_array($result1);

					
						$cstampG=$row['stampG'];
				        $cstampS=$row['stampS'];
				        $cstampB=$row['stampB'];
					

					/*echo $cstampG;
					echo $cstampS;
					echo $cstampB;*/
			$query2="UPDATE loopboxgate
				SET stampG = stampG - $cstampG , stampS = stampS -  $cstampS , stampB =  stampB - $cstampB,total = total - (($stampG*3) + ($stampS*2) + ($stampB*1))
				WHERE  user_id='$userid' AND craft_id ='$craftid'";
			    mysql_query($query2,$connect);

			   /* echo "<br/>";
			    echo $stampG;
				echo $stampS;
				echo $stampB;*/

			    $date=date("Y-m-d H:i:s");

			$query3="UPDATE loopboxrate
				    SET time = '$date' , stampG = $stampG , stampS= $stampS , stampB = $stampB 
				WHERE  user_id='$userid' AND craft_id ='$craftid' AND cust_id='$rater' ";
			    mysql_query($query3,$connect);

			$query4="UPDATE loopboxgate
				SET stampG = stampG + $stampG , stampS= stampS +  $stampS , stampB =  stampB + $stampB , total = total + (($stampG*3) + ($stampS*2) + ($stampB*1))
				WHERE  user_id='$userid' AND craft_id ='$craftid'";
			    mysql_query($query4,$connect);

			



			    $result6 = mysql_query("SELECT * FROM loopboxgate where user_id='$userid' AND craft_id ='$craftid' ");
				$row=mysql_fetch_array($result6);

					
						$outstampG=$row['stampG'];
				        $outstampS=$row['stampS'];
				        $outstampB=$row['stampB'];
				        echo $outstampG.'|'.$outstampS.'|'.$outstampB;
			   // echo "done changing" ;



		}else 
		{
				$date=date("Y-m-d H:i:s");
				mysql_query("INSERT INTO loopboxrate (craft_id,user_id,time,stampG,stampS,stampB,cust_id) VALUES ('$craftid','$userid','$date',$stampG,$stampS,$stampB,'$rater') ");
				
				$query5="UPDATE loopboxgate
						SET stampG = stampG + $stampG , stampS= stampS +  $stampS , stampB =  stampB + $stampB , total = total + (($stampG*3) + ($stampS*2) + ($stampB*1))
						WHERE  user_id='$userid' AND craft_id ='$craftid'";
			    mysql_query($query5,$connect);

			    $result7 = mysql_query("SELECT * FROM loopboxgate where user_id='$userid' AND craft_id ='$craftid' ");
				$row=mysql_fetch_array($result7);

					
						$outstampG=$row['stampG'];
				        $outstampS=$row['stampS'];
				        $outstampB=$row['stampB'];
				        echo $outstampG.'|'.$outstampS.'|'.$outstampB;
			    
		


	}


	}


?>
