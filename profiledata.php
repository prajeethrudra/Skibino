<?php  
session_start();
    $id=$_SESSION['uid'];
    $connect= mysql_connect('localhost','root','');
    $mydb=mysql_select_db("skibino2");
   if($mydb)
    {
        $query="SELECT * FROM profile WHERE uniqueid='$id' ";
        $confirm=mysql_query($query,$connect);
        $info = mysql_fetch_array( $confirm );
        $name=strtoupper($info['name']);
        if($info['picpath'] == '')
        {
          $picpath="images/defaultpic.png";
        }
        else
        {  
           $pic=$info['picpath'];
           $picpath="mycrafts/".$id."/".$pic;
        }
        $info['name'];
        $info['sex'];
        $info['email_id'];
        $info['phone'];
        $info['genre'];
        $info['about'];
        $info['achmnts'];
        $info['location'];
        $info['addr'];
        $info['doing'];
        $info['dob'];
        echo $picpath.'|'.$info['name'].'|'.$info['sex'].'|'.$info['email_id'].'|'.$info['phone'].'|'.$info['genre'].'|'.$info['about'].'|'.$info['achmnts'].'|'.$info['location'].'|'.$info['addr'].'|'.$info['doing'].'|'.$info['dob'] ;
        
    }

?>