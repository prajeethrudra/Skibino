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
<title>PROFILE</title>
<link href="fonts/theleagueof-league-gothic-64c3ede/LeagueGothic-CondensedRegular.otf" rel="stylesheet" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<link href="css/profile.css" type="text/css" rel="stylesheet"/>

 <link href="css/myapp.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="js/myapp.js"></script><!--for tabs-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
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

$(document).ready(function(){

 $.ajax({
        type: "POST",
        url: "profiledata.php",
        data:"",
        dataType: "text",
        cache: false, 
        success: function(data){
          var main = data.split('|');
          var picture=main[0];
          var name=main[1];
          var gender=main[2];
          var email_id=main[3];
          var phone=main[4];
          var genre=main[5];
          var about=main[6];
          var achmt=main[7];
          var location=main[8];
          var address=main[9];
          var doing =main[10];
          var dob=main[11];
          $('#border').attr('src',picture);
          $('#sname').val(name);
          //$('#sgender').val(sex);
          $('#semail').val(email_id);
          $('#sphone').val(phone);
          $('#sgenre').val(genre);
          $('#saddr').val(address);
          $('#sdoing').val(doing);
          $('#sdob').val(dob);
          $('#slocation').val(location);
          $('#sachmt').val(achmt);
          $('#sabout').val(about);
          if(gender=='1')
          {
            $('#male').attr('checked', true);
          }
          else if(gender=='0')
          {
            $('#female').attr('checked', true);
          }


         // $("#my_image").attr("src","second.jpg");
         // alert(email_id);
          $('#name').html(name.toUpperCase());
          
          if(!location){
           $('#location').html("Give your Location");
          }else 
          {$('#location').html(location.toUpperCase());}

          if(!genre){
           $('#genre').html("Enter your Genre");
          }else 
          {$('#genre').html(genre.toUpperCase());}

          if(!achmt){
           $('#tab_3_contents').html("What are your achievements!!!");
          }else 
          {$('#tab_3_contents').html(achmt);}

          if(!about){
           $('#tab_2_contents').html("Express your self!!");
          }else 
          {$('#tab_2_contents').html(about);}
   
          if(!phone){
           $('#tab_4_contents').html("Email-id : "+email_id+"<br/> Phone-No : "+"<br/> Address : "+address );
          }else 
          {
            $('#tab_4_contents').html("Email-id : "+email_id +"<br/> Phone-No : " +phone +"<br/> Address : "+address);
          }



          $('#sname').html(name);




        },
        error : function(){
            alert("error in connecting database")
        }
});
});
</script>
<script type="text/javascript">
function savechanges()
{
 var sname = $('#sname').val();                                       //1
 var sgender = jQuery("input[name=sgender]:checked").val();           //2
 var slocation = $('#slocation').val();                               //3
 var sgenre = $('#sgenre').val();                                     //4
 var sdob = $('#sdob').val();                                         //5
 var sphone = $('#sphone').val();                                     //6
 var sabout = $('#sabout').val();                                     //7
 var sachmt = $('#sachmt').val();                                     //8
 var sdoing = $('#sdoing').val();                                     //9
 var saddr = $('#saddr').val();                                       //10

  $.ajax({
        type: "POST",
        url: "savechanges.php",
        data: { sname: sname, sgender: sgender, slocation: slocation, sgenre: sgenre, sdob: sdob, sphone: sphone, sabout: sabout, sachmt: sachmt , sdoing: sdoing, saddr: saddr },
        dataType: "text",
        cache: false, 
        success: function(data){
          if(data==0)
          {
            location.reload();
          }



          },
        error : function(){
            alert("error in connecting database")
        }
        });
}

</script>

<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>

<div class="all">
    <div class="left menu" style="clear:both;height:auto;">
      
        <!--main title ie skibino-->       
         <div class="menucontent"><div class="title"><img src="images/SKIBINO CONFIRMED.jpg" width="200" height="60"/></div><!--menu with icons-->
           <div class="components">           
              <img src="images/dashboard.ico"><p><a href="profile.html">Profile</a></p></img>
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
              <a class="modalLink" href="#modal7">   <div id="upload"></div></a>
               <div class="overlay"></div>
              
               <div id="logout" onclick="logout()"></div>                     <!--logout -->
      </div>
           </div>
      <div class="right"><!-- this for right side container main content and it is scrollable -->
           
<div class="box1" style="margin-left:-2px;">
  <div class="profile"></div>
   <div class="userinfo">
            <div class="forg">
              
              
              <div id="f1_container" style="position:absolute; margin-top:55px; margin-left:55px; ">
<div id="f1_card" class="shadow">
  <div class="front face"><!-- profile pic -->
    <img id="border" src="" width="200" height="190"  style=" border-radius:50%; border:#FFF 6px solid;"/>
  </div>
  <div class="back face center">
    <p class="bfinfo">You can change your profile pic here</p>
    <p>SK USER</p>
   <form action="profile.php" method="POST" enctype='multipart/form-data'>
       <input type='file' name='upload_profilepic' required id='upload_profilepic' style="margin-top:-22px;" />
       <input name='submit' type='submit' value='Upload'  />
          <!-- <button type="file" name="upload_profilepic" class="">Edit
                <img src="images/edit-64.ico" width="20" height="20"/></a>
            </button>
            <input type="submit" name="submitpic" />-->
   </form>
  </div>
</div>
</div>
</div>
              
     			<div class="details">
     				<div class="profilename"><p id='name'></p></div>
                    <div class="profiledetails"><img src="images/medal-32.ico" /><p id="genre"></p></div>
                    <div class="profiledetails"><img src="images/marker-32.ico" /><p id="location"></p></div>
                    <div class="profiledetails"><img src="images/combo-32.ico" /><p>00,000</p></div>
            
                    <a class="modalLink" href="#modal10">  <button type="submit" class="embossed-link" >Edit
                    <img src="images/edit-64.ico" width="20" height="20" style="border:none;"/>
                    </button></a>
                    
                                        <div id="modal10" class="modal5">  <!--from here form code starts-->

<div id="tabs2">
    <ul>
        <li>
            <a href="#a">
            <div class="tababout">
            <img src="images/guest-48 (1).png"/>
            <div class="tabtext" style="margin-left:36px">Personal Info</div>
            </div>
            </a>
        </li>
        <li>
            <a href="#b"><div class="tababout">
            <img src="images/info-48.png"/>
            <div class="tabtext" style="margin-left:50px">About</div>
            </div></a>
        </li>
        <li>
            <a href="#c"><div class="tababout">
            <img src="images/star-7-48.png"/>
            <div class="tabtext" style="margin-left:36px">Achievement</div>
            </div>  </a>
        </li>
         <li>
            <a href="#d"><div class="tababout">
            <img src="images/business-contact-48 white.png"/>
            <div class="tabtext" style="margin-left:45px">Contact</div>
            </div>  </a>
        </li>
        <li>
        <button type="button" style="background:url(images/approval-32.png) no-repeat;background-position:center;
        height:50px; width:100px; margin-left:35px;border:none; cursor:pointer;" onclick="savechanges()"></button><!--save changes -->
<br/>
<span style="color:#FFF;" class="sc">Save Changes</span>
        </li>
     
    </ul>
    <div id="a">
      <div class="content">  <p class="closeBtn" style="margin-top:-45px; margin-right:-20px;"></p>  
        Name <input id="sname" type="text" class="contentinput" style="margin-left:50px;"/><br/><br/>
        Gender <input id="male" type="radio" name="sgender" value="1" style="margin-left:50px;"/>Male
        <input type="radio" id="female" name="sgender" value="0" class="contentinput" style="margin-left:0px;"/>
        <span style="margin-topt:-100px;position:absolute; margin-left:-90px;">Female</span><br/><br/>
        Genre <input id="sgenre" type="text" class="contentinput" style="margin-left:50px;"/><br/><br/>
        Location<input type="text" id="slocation" class="contentinput" style="margin-left:38px;"/><br/><br/>
        Date of Birth<input type="" id="sdob" class="contentinput" style="margin-left:38px;"/>
        </div>
    </div>
   
  <div id="b">
    <div class="content"> <p class="closeBtn" style="margin-top:-45px; margin-right:-20px;"></p>  
        express about yourself, interests
        <textarea rows="10" cols="60" id="sabout" class="boxdetailsdesctext2"></textarea>  <!-- about -->
        </div>
     </div>
    <div id="c">
     <div class="content"> <p class="closeBtn" style="margin-top:-45px; margin-right:-20px;"></p>  
        Achievements in ur profession

<textarea rows="10" cols="60" id="sachmt" class="boxdetailsdesctext2"></textarea> <!-- achievements -->
              </div>
        
    </div>
    
    <div id="d">
       
             <div class="content">  <p class="closeBtn" style="margin-top:-45px; margin-right:-20px;"></p>   
       phone number<input type="number" placeholder="" style="margin-left:50px;" id="sphone" class="contentinput" /><br/><br/>
       
         email-id<input type="email" disabled="disabled" id="semail" placeholder="" class="contentinput" style="margin-left:100px;"/><br/><br/>
         presently doing<input type="text" class="contentinput" id="sdoing" style="margin-left:38px;"/><br/><br/>
         Address<textarea rows="4" cols="60" class="boxdetailsdesctext2" id="saddr" style="max-height:200px;"></textarea>   
    </div>
    </div>

</div>
</div>

   <script>$('#tabs2')
    .tabs()
    .addClass('ui-tabs-vertical ui-helper-clearfix');
</script>                      
       <!--form ends here-->             

                    
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

        <div id="tab_4_contents" class="tab_contents">
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
    <form method="post" action="profile.php" enctype='multipart/form-data'>

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


<style>
.sc{ font-family: "Monda","myfont"; margin-left:40px;}
.boxdetailsdesctext2{  background-color:transparent; border:#cc4d4d solid 2px; border-radius:4px;
max-width:400px;    font-family: "Monda","myfont";max-height:400px; font-size:16px;
}
.content{background-color:#fff; height:400px; width:400px; margin-left:20px;margin-top:50px;font-size:18px;font-family: "Monda","myfont"; color:#cc4d4d;}
.contentinput{ border:none; border-bottom:dotted 1px #11171c; background-color:transparent;width:200px; color:#cc4d4d;
}
#a,#b,#c,#d{background-color:#fff; height:500px; border-top-right-radius:4px; border-bottom-right-radius:4px;}
.tababout{ height:150px;}
.tababout>img{ margin-top:10px; margin-left:50px;}

ui-tabs.ui-tabs-vertical {
    padding: 0;
    width: 42em;
}
.ui-tabs.ui-tabs-vertical .ui-widget-header {
    border: none;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav {
    float: left;
    width: 10em;height:500px;
    background: #11171c;
    border-radius: 4px 0 0 4px;
    border-right: 0px solid gray;
	margin-top:0px;

}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li {
    clear: left; margin-left:-42px;
    width: 200px;
    
    border-radius: 4px 0 0 4px;
    overflow: hidden;
    position: relative;
    right: -2px;
    z-index: 2; 
	height:100px;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li a {
    display: block;
    width: 100%;
    padding: 0.6em 1em;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li a:hover {
    cursor: pointer;
	background-color:#cc4d4d;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active {
    margin-bottom: 0.2em;
    padding-bottom: 0;
	background-color:#cc4d4d;
/*    border-right: 10px solid #0F9;
*/}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li:last-child {
    margin-bottom: 10px;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-panel {
    float: left;
    width: 28em;
    
    border-radius: 0;
    position: relative;
    left: -1px;
}
</style>


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
                   $query="SELECT * FROM profile WHERE uniqueid='$id' ";
                    $confirm=mysql_query($query,$connect);
                    $info = mysql_fetch_array( $confirm );
                    $path=dirname(__FILE__).'/mycrafts/'.$user.'/'.$info['picpath'];
                    //echo "path";
                      /* unlink($path);
                    */
                    $query="UPDATE profile SET picpath='$filename' WHERE uniqueid='$user' ";
                    $confirm=mysql_query($query,$connect);
                 
                  }
                  
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
if(isset($_POST['upload']))
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
   