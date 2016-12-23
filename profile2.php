<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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
    }

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SKIBINO PROFILE</title>
<link href="fonts/theleagueof-league-gothic-64c3ede/LeagueGothic-CondensedRegular.otf" rel="stylesheet" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<link href="css/profile.css" type="text/css" rel="stylesheet"/>

 <link href="css/myapp.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="js/myapp.js"></script><!--for tabs-->
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">-->
<!-- <script type="text/javascript" src="js/TimeCircles.js"></script>
  <link rel="stylesheet" href="css/TimeCircles.css" type="text/css" />-->

<script type="text/javascript" src="highslide-4.1.13/highslide/highslide-full.js"></script>
<link rel="stylesheet" type="text/css" href="highslide-4.1.13/highslide/highslide.css" />
<script type="text/javascript">
    // Apply the Highslide settings
    hs.graphicsDir = 'highslide-4.1.13/highslide/graphics/';
    hs.outlineWhileAnimating = true;
	hs.graphicsDir = 'highslide-4.1.13/highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.fadeInOut = true;
	hs.dimmingOpacity = 0.75;

	// define the restraining box
	hs.useBox = true;
	hs.width = 640;
	hs.height = 480;
</script>
<script type="text/javascript">
  function logout()
  {
    window.location = 'logout.php';
  }

</script>

</head>

<body >

<div class="all">
    <div class="left menu" style="clear:both;height:auto;">
      
        <!--main title ie skibino-->       
         <div class="menucontent"><div class="title"><img src="images/SKIBINO CONFIRMED.jpg" width="200" height="60"/></div><!--menu with icons-->
           <div class="components">           
              <img src="images/dashboard.ico"><p><a href="profile.html">Profile</a></p></img>
           </div>
           <div class="components">           
              <img src="images/stack-of-photos.ico"><p><a href="mycrafts.html">My Crafts</a></p></img>
           </div>
           <div class="components">           
              <img src="images/500px-4-32.ico"><p><a href="">LoopBox</a></p></img>
           </div>
           <div class="components">           
              <img src="images/television.ico"><p><a href="">Arena</a></p></img>
           </div>
            <div class="components">           
              <img src="images/conference-32.ico"><p><a href="loopers.html">Loopers</a></p></img>
           </div>
           <div class="components">           
              <img src="images/settings.ico"><p><a href="">Settings</a></p></img>
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
              <a href="i" class="highslide" onclick="return hs.htmlExpand(this,{ width: 560, height: 345, allowSizeReduction: false, preserveContent: false, objectLoadTime: 'after',wrapperClassName: 'nocb no-footer', slideshowGroup: 'ytonly'})">  <div id="upload"></div></a>
              <div class="highslide-maincontent">
			  <div class="topbarmodal"></div>
              </div>
             <div id="logout" onclick="logout()"></div>
      </div>
           </div>
      <div class="right"><!-- this for right side container main content and it is scrollable -->
           
<div class="box1" style="margin-left:-2px;">
  <div class="profile"></div>
   <div class="userinfo">
            <div class="forg">
              
              
              <div id="f1_container" style="position:absolute; margin-top:55px; margin-left:55px; ">
<div id="f1_card" class="shadow">
  <div class="front face">
    <img id="border" src=<?php echo $picpath; ?> width="200" height="190" style=" border-radius:50%; border:#FFF 6px solid;"/>
  </div>
  <div class="back face center">
    <p class="bfinfo">You can change your profile pic here</p>
    <form action="profile2.php" method="post" enctype='multipart/form-data'>
         <input type='file' name='upload_profilepic' required id='upload_profilepic' style="margin-top:-22px;" />
         <input name='submit' type='submit' value='Upload' style="background:url(images/edit-64.ico) no-repeat;background-size:contain;background-position:right;width:100px;border-color:none;" />
    </form>
  </div>
</div>
</div>
</div>
              
     			<div class="details">
     				<div class="profilename"><p><?php echo $name; ?></p></div>
                    <div class="profiledetails"><img src="images/medal-32.ico" /><p>Rockstar</p></div>
                    <div class="profiledetails"><img src="images/marker-32.ico" /><p>Hyderabad,India</p></div>
                    <div class="profiledetails"><img src="images/combo-32.ico" /><p>32,000</p></div>
            
                    <button type="submit" class="embossed-link" >Edit
                    <img src="images/edit-64.ico" width="20" height="20" style="border:none;"/>
                    </button>
                    
              
                    
                    
    			 </div>         
    </div>

 <!-- This is the box that all of the tabs and contents of 
         the tabs will reside -->
    <div id="tabs_container">
      
      <!-- These are the tabs -->
      <ul class="tabs">
        <li class="active">
          <a href="#" rel="#tab_1_contents" class="tab" style="margin-left:-40px;"  onclick="myFunction()" >
          <img src="images/activity-feed-32.ico" style="float:left;"  id="activity"/><p class="underline">
          Recent Activity</p></a>
        </li>
        <li><a href="#" rel="#tab_2_contents" class="tab" onclick="myFunction()" ><img src="images/info-5-32.ico"  style="float:left;margin-right:-50px; position:relative;" id="feed"/>
        <p class="underline">About</p></a></li>
        <li><a href="#" rel="#tab_3_contents" class="tab"><img src="images/star-7-32.ico" style="float:left;"onclick="myFunction()"  id="achievement"/>
        <p class="underline">Achievement</p></a></li>
        <li><a href="#" rel="#tab_4_contents" class="tab"  onclick="myFunction()">
        <img src="images/business-contact-32.ico" style="float:left;"  id="contact"/><p class="underline">Contact</p></a></li>
      </ul>
      
      <!-- This is used so the contents don't appear to the 
           right of the tabs -->
      <div class="clear"></div>
      
      <!-- This is a div that hold all the tabbed contents -->
      <div class="tab_contents_container">
    
        <!-- Tab 1 Contents -->
        <div id="tab_1_contents" class="tab_contents tab_contents_active">
          I'm Good Enough!
        </div>
    
        <!-- Tab 2 Contents -->
        <div id="tab_2_contents" class="tab_contents">
          I'm Smart Enough!
        </div>
    
        <!-- Tab 3 Contents -->
        <div id="tab_3_contents" class="tab_contents">
          And Doggone It, People Like Me!
        </div>
    
      </div>
    </div>

           
           
           
           
           
           
 
 
 
 </div>  
</div>



</div>

</div>
<!--from here right side content starts ie chatbox,lb notificaions,show of day -->
<div class="chatterbox"></div>
	<script>
	$(".demo").TimeCircles();
     $("#DateCountdown").TimeCircles();
            $("#CountDownTimer").TimeCircles({ time: { Days: { show: true }, Hours: { show: true } }});
            $("#PageOpenTimer").TimeCircles();
            
            var updateTime = function(){
                var date = $("#date").val();
                var time = $("#time").val();
                var datetime = date + ' ' + time + ':00';
                $("#DateCountdown").data('date', datetime).TimeCircles().start();
            }
            $("#date").change(updateTime).keyup(updateTime);
            $("#time").change(updateTime).keyup(updateTime);
            
            // Start and stop are methods applied on the public TimeCircles instance
            $(".startTimer").click(function() {
                $("#CountDownTimer").TimeCircles().start();
            });
            $(".stopTimer").click(function() {
                $("#CountDownTimer").TimeCircles().stop();
            });

            // Fade in and fade out are examples of how chaining can be done with TimeCircles
            $(".fadeIn").click(function() {
                $("#PageOpenTimer").fadeIn();
            });
            $(".fadeOut").click(function() {
                $("#PageOpenTimer").fadeOut();
            });
</script>

</body>
</html>
<?php

$submit=$_POST['submit'];
if($submit)
{     
       $user=$_SESSION['uid'];
      if((!empty($_FILES["upload_profilepic"])) && ($_FILES['upload_profilepic']['error'] == 0)) {
        //Check if the file is JPEG image and it's size is less than 1.4MB
       $filename = basename($_FILES['upload_profilepic']['name']);
        $ext = substr($filename, strrpos($filename, '.') + 1);
       
        if (((($ext == "jpg") && ($_FILES["upload_profilepic"]["type"] == "image/jpeg"))||
          (($ext == "bmp") && ($_FILES["upload_profilepic"]["type"] == "image/bmp"))||
          (($ext == "gif") && ($_FILES["upload_profilepic"]["type"] == "image/gif"))||
          (($ext == "png") && ($_FILES["upload_profilepic"]["type"] == "image/png"))||
          (($ext == "jpeg") && ($_FILES["upload_profilepic"]["type"] == "image/jpeg"))) &&
          ($_FILES["upload_profilepic"]["size"] < 1800000000))
          {

            $filename = (uniqid()).".".$ext;
          //Determine the path to which we want to save this file
            $newname = dirname(__FILE__).'/mycrafts/'.$user.'/'.$filename;

            //Check if the file with the same name is already exists on the server
          
            if (!file_exists($newname)) {
              //Attempt to move the uploaded file to it's new place
              if ((move_uploaded_file($_FILES['upload_profilepic']['tmp_name'],$newname))) {

                  if($mydb)
                  {
                   /* $query="SELECT * FROM profile WHERE uniqueid='$id' ";
                    $confirm=mysql_query($query,$connect);
                    $info = mysql_fetch_array( $confirm );
                    $path=dirname(__FILE__).'/mycrafts/'.$user.'/'.$info['picpath'];
                       unlink($path);
                       echo '<script language="javascript">';
                  echo 'parent.window.location.reload(true);';
                  echo '</script>';*/
                    $query="UPDATE profile SET picpath='$filename' WHERE uniqueid='$user' ";
                    $confirm=mysql_query($query,$connect);
                  }
                  


                 /* $filename = $_GET['file']; //get the filename
                  unlink('DIRNAME'.DIRECTORY_SEPARATOR.$filename);
                  mysql_close($connect);*/
                  echo '<script language="javascript">';
                  echo 'parent.window.location.reload(true);';
                  echo '</script>';
                 //echo "Upload Complete! ";
              } else {
                // echo "Error: A problem occurred during file upload!";
                  echo '<script language="javascript">';
                  echo 'alert("Error: A problem occurred during file upload!")';
                  echo '</script>';
              }
            } else {
               //echo "Error: File ".$_FILES["upload_profilepic"]["name"]." already exists";
                  echo '<script language="javascript">';
                  echo 'alert("Error: File ".$_FILES["upload_profilepic"]["name"]." already exists")';
                  echo '</script>';
            }
        } else {
           //echo "Error: File too big to upload or it is not in jpeg format";
           echo '<script language="javascript">';
                  echo 'alert("Error: File too big to upload or it is not in jpeg format")';
                  echo '</script>';
        }
      } else {
       //echo "Error: No file uploaded";
                   echo '<script language="javascript">';
                  echo 'alert("Error: No file uploaded")';
                  echo '</script>';
      }
}

?>
