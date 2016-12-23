<?php
  
  mysql_connect("localhost","root","") or die("cant connect");
  $db=mysql_select_db("skibino2") or die("no db");
  session_start();
 if($db){

  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="fonts/theleagueof-league-gothic-64c3ede/LeagueGothic-CondensedRegular.otf" rel="stylesheet" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<link href="css/loopers.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript">
  function logout()
  {
    window.location = 'logout.php';
  }
</script>
<title>LOOPERS</title>

<!--
	1 ) Reference to the files containing the JavaScript and CSS.
	These files must be located on your server.
-->


</head>

<body>

<!--
	3) Put the thumbnails inside a div for styling
-->
<div class="all">
    <div class="left menu" style="clear:both;height:auto;">
      
        <!--main title ie skibino-->       
         <div class="menucontent"><div class="title"><img src="images/SKIBINO CONFIRMED.jpg" width="200" height="60"/></div><!--menu with icons-->
           <div class="components">           
              <img src="images/dashboard.ico"><p><a href="profile.php">Profile</a></p></img>
           </div>
           <div class="components">           
              <img src="images/stack-of-photos.ico"><p><a href="mycrafts.php">My Crafts</a></p></img>
           </div>
           <div class="components">           
              <img src="images/500px-4-32.ico"><p><a href="loopbox.php">LoopBox</a></p></img>
           </div>
           <div class="components">           
              <img src="images/television.ico"><p><a href="arena.php">Arena</a></p></img>
           </div>
            <div class="components">           
              <img src="images/conference-32.ico"><p><a href="loopers.php">Loopers</a></p></img>
           </div>
           <div class="components">           
              <img src="images/settings.ico"><p><a href="settings.php">Settings</a></p></img>
           </div>
         </div>
         </div>
      
      </div>
           
      
      <div class="rightcon">
      <div class="toolbar">
      <div id="mainsearchbar">
         <div id="radmaker">
      <div id="searchimage"></div>
      <input type="text" class="mac" placeholder="Search by name,profession or crafts"></input>
         </div>
      </div>
     <div id="iconset"> 
                <div id="notifications"></div><div id="spannotify"><span>3</span></div>
                       <a class="modalLink" href="#modal7">   <div id="upload"></div></a>
               <div class="overlay"></div>
               <div id="logout" onclick = "logout()"></div>
      </div>
           </div>

      <div class="right" style="background-color:transparent;"><!-- this for right side container main content and it is scrollable -->
           
          <div style='margin-left:20PX; margin-top:0px;font-family: "Monda","myfont"; color:#cc4d4d;
font-size:36px;'>LOOPERS</div>
           <div class="box1">

            <?php 
          
    
                  $query="SELECT * from profile ";
                  $result=mysql_query($query);
                  while($row=mysql_fetch_array($result))
                  {
                    $name=$row['name'];
                    $dp=$row['picpath'];
                    $genre=$row['genre'];
                    $user_id=$row['uniqueid'];
                    $name = strtoupper($name);
                    $genre = strtoupper($genre);
                    if($dp=='')
                    {
                      $dp='images/defaul2.gif';
                    }
                    else
                    {
                      $dp='mycrafts/'.$user_id."/".$dp;
                    }
                  
             ?>

           <div class="box1inbox">

            <div class="profilecard">
            <div class="thera">
             <div class="popularitycard">
              <div class="popshower">
                <div class="popicon"></div>
                <div class="popnumber"><span class="popnumber1">2,32,630</span></div>
              </div><!--popshower-->
             </div><!--popularitycard-->
             <div class="profilecarddetails">
             <img class="profilecarddetailsimg" src="<?php echo $dp;?>" />
             <div class="profilename"><?php echo $name;?> <br/></div>
             <div class="profilegenre"><?php echo $genre;?></div>
             </div><!--profilecarddetails-->
             <div class="profilebuttons">
              <div class="profileloopers">
               <div class="loopers" title="Loopers"></div>
               <div class="looperscount"><span>35460</span></div>
              </div>
              <div class="addtoloopers" title="add to loopers"></div>
              <div class="contact" title="contact"></div>
             </div><!--profilebuttons-->
             </div><!--thera-->
            </div><!--profilecard-->

       
           </div>
           <?php 
} 
}

?>

</div><!--box1-->
</div><!--box1in div-->

<!--from here right side content starts ie chatbox,lb notificaions,show of day -->
<div class="chatterbox">

</div>


</div>
<!--please dont touch this code-->
	<link rel="stylesheet" type="text/css" href="css/themes/tooltipster-punk.css" />
	<link rel="stylesheet" type="text/css" href="css/tooltipster.css"/>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.tooltipster.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$('.loopers,.contact,.addtoloopers').tooltipster();
		});
		$('.loopers,.contact,.addtoloopers').tooltipster({
    theme: 'tooltipster-punk'
});
	</script>
    <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script type='text/javascript' src='js/jquery.modal.js'></script>
    <script type='text/javascript' src='js/site.js'></script>

    <div id="modal7" class="modal">

<div class="box">
 <div class="boxbar">
 <div class="boxspan">UPLOAD</div>
 <p class="closeBtn"></p>
 </div>
<div class="boxcontent">
    <div class="boxdrop"><!--dor dotted-->
    
    <form method="post" action="loopers.php" enctype='multipart/form-data'>

     <div class="boxborder">
        <div class="fileUpload btn btn-primary">
          <input type="file" name="uploadcrafts" class="upload" />
        </div>
      </div><!--boxborder-->
    </div><!--boxdrop-->
    
    <div class="boxdetails">
      <div class="boxdetailstitle">Title</div>
      <input type="text" name="title" required class="boxdetailstitletext"/>
      <div class="boxdetailsdesc">Description</div>
      <textarea rows="2" cols="60" name="description" required class="boxdetailsdesctext">

      </textarea>
    </div><!--boxdetails-->
</div><!--boxcontent-->
<div class="boxbutton">
<input type="submit" value="Done" name="upload" />
<!-- <button type="button" name="upload" class="boxbuttonconfirm">
<img src="file:///E|/downloads/approval-32.png"/></button> -->

</div>
</div>

</form>
</div>
</body>
</html>
<?php
 session_start();


if($_POST['upload'])
{
  
$description=$_POST['description'];
$title=$_POST['title'];

 $user=$_SESSION['uid'];
if((!empty($_FILES["uploadcrafts"])) && ($_FILES['uploadcrafts']['error'] == 0)) {
  //Check if the file is JPEG image and it's size is less than 1.4MB
  
 $filename = basename($_FILES['uploadcrafts']['name']);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  //echo $ext;
  echo "<br/>";
  if($ext =='mp4'||$ext =='mid'||$ext =='midi'||$ext =='rm'||$ext =='rm'||$ext =='ram'||$ext =='wma'||$ext =='aac'||$ext =='wav'||$ext =='ogg'||$ext =='mp3')
  {
   
    $filename = uniqid().".".$ext;
    $newname = dirname(__FILE__).'/mycrafts/'.$user.'/crafts/'.$filename;
        if (!file_exists($newname))
           {
            //Attempt to move the uploadcraftsed file to it's new place
              if ((move_uploaded_file($_FILES['uploadcrafts']['tmp_name'],$newname))) 
              {
                 
                        $connect= mysql_connect('localhost','root','');
                        $mydb=mysql_select_db("skibino2");
                        if($mydb)
                        {

                               $date=date("Y-m-d H:i:s");
                               $unqid=$_SESSION['uid'];
                                //echo $unique_id;
                              mysql_query("INSERT INTO mycrafts ( uniqueid , craftname , title , description , stampG , stampS , stampB , time ,loopboxin ,type) VALUES ('$unqid','$filename','$title','$description',0,0,0,'$date',NULL,'$ext') ");
                              echo '<script language="javascript">';
                              echo 'alert("Done")';
                              echo '</script>';
                        }
                        mysql_close();
              } else 
              {
                 echo "Error: A problem occurred during file uploadcrafts!";
              }
          } else 
          {
             echo "Error: File ".$_FILES["uploadcrafts"]["name"]." already exists";
          }
  }

  else {
     if (((($ext == "jpg") && ($_FILES["uploadcrafts"]["type"] == "image/jpeg"))||(($ext == "bmp") && ($_FILES["uploadcrafts"]["type"] == "image/bmp"))||(($ext == "gif") && ($_FILES["uploadcrafts"]["type"] == "image/gif"))||(($ext == "png") && ($_FILES["uploadcrafts"]["type"] == "image/png"))||(($ext == "jpeg") && ($_FILES["uploadcrafts"]["type"] == "image/jpeg"))) &&
              ($_FILES["uploadcrafts"]["size"] < 1800000000))
              {
                echo '<script language="javascript">';
  echo 'alert("Done3")';
 echo '</script>';

                $filename = uniqid().".".$ext;
              //Determine the path to which we want to save this file
                $newname = dirname(__FILE__).'/mycrafts/'.$user.'/crafts/'.$filename;
                //Check if the file with the same name is already exists on the server
              
                if (!file_exists($newname))
                 {
                  //Attempt to move the uploadcraftsed file to it's new place
                    if ((move_uploaded_file($_FILES['uploadcrafts']['tmp_name'],$newname))) 
                    {
                       

                        $connect= mysql_connect('localhost','root','');
                        $mydb=mysql_select_db("skibino2");
                        if($mydb)
                        {

                               $date=date("Y-m-d H:i:s");
                               $unqid=$_SESSION['uid'];
                                //echo $unique_id;
                              mysql_query("INSERT INTO mycrafts ( uniqueid , craftname , title , description , stampG , stampS , stampB , time ,loopboxin ,type) VALUES ('$unqid','$filename','$title','$description',0,0,0,'$date',NULL,'$ext') ");
                              echo '<script language="javascript">';
                              echo 'alert("Done")';
                              echo '</script>';
                        }
                        mysql_close();
                    } else 
                    {
                       echo "Error: A problem occurred during file uploadcrafts!";
                    }
                } else 
                {
                   echo "Error: File ".$_FILES["uploadcrafts"]["name"]." already exists";
                }
            } else 
            {
               echo "Error: File too big ";
            }

  

}
} else {
 echo "Error: No file uploadcraftsed";
}


}
?>




