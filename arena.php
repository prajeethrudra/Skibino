
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">
<html><head>
<link href="highslide-4.1.13/captionss.css" type="text/css" rel="stylesheet"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="fonts/theleagueof-league-gothic-64c3ede/LeagueGothic-CondensedRegular.otf" rel="stylesheet" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'/>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
<link href="css/mycrafts.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/main.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
 function logout()
  {
    window.location = 'logout.php';
  }
  </script>
  
<title>ARENA</title>

<!--
  1 ) Reference to the files containing the JavaScript and CSS.
  These files must be located on your server.
-->

<script type="text/javascript" src="highslide-4.1.13/highslide/highslide-full.js"></script>
<link rel="stylesheet" type="text/css" href="highslide-4.1.13/highslide/highslide.css" />

<!--
  2) Optionally override the settings defined at the top
  of the highslide.js file. The parameter hs.graphicsDir is important!
-->
<script type="text/javascript">
  hs.headingOverlay.position = "top";
  hs.headingOverlay.width = "auto";
  hs.headingOverlay.opacity = 1;
  
  
</script>
<script type="text/javascript">
  hs.captionOverlay.position = "rightpanel";
  hs.captionOverlay.width = "300px";
  hs.headingOverlay.position="leftpanel";
</script>
<script type="text/javascript">
   hs.headingId = 'the-heading';
   hs.captionId = 'the-caption';
</script>
<script type="text/javascript">
  hs.graphicsDir = 'highslide-4.1.13/highslide/graphics/';
  hs.align = 'center';
  hs.transitions = ['expand', 'crossfade'];
  hs.fadeInOut = true;
  hs.dimmingOpacity = 0.75;
  // define the restraining box
  hs.useBox = true;
  hs.width = 640;
  hs.height = 480;

  // Add the controlbar
  hs.addSlideshow({
    //slideshowGroup: 'group1',
    interval: 5000,
    repeat: false,
    useControls: true,
    fixedControls: 'fit',
    overlayOptions: {
      opacity: 1,
      position: 'bottom center',
      hideOnMouseOut: true
    }
    
  });
  
</script>

<style type="text/css">
/* Define some presentational styles for the overlay */
.highslide-overlay {
   text-align: center;
   background: black; 
   font-weight: bold; 
   font-size: 150%;
   color: white;
   padding: 10px;
}
</style>

<script type="text/javascript">

hs.Expander.prototype.onBeforeExpand = function (sender, e) {

   // create a new DOM element
   var div = document.createElement('div');

   // add a class name to allow CSS styling
   div.className = "highslide-overlay";

   // use the thumbnail's alt attribute as inner HTML
   div.innerHTML = sender.thumb.alt;

   // attatch it to this hs.Expander instance and add some options
   sender.createOverlay( { overlayId: div, position: "top left", 
      hideOnMouseOut: true, opacity: 0.8, width: '100%' } );
}
</script>
<script type="text/javascript">
    // Apply the Highslide settings
    hs.graphicsDir = 'highslide-4.1.13/highslide/graphics/';
    hs.outlineWhileAnimating = true;
</script>

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
              <img src="images/settings.ico"><p><a href="">Settings</a></p></img>
           </div>
         </div>

         </div>
      
      </div>
           
      
      <div class="rightcon">
      <div class="toolbar">
      <div id="mainsearchbar">
         <div id="radmaker">
      <div id="searchimage"></div>
      <input type="text" class="mac" placeholder="Search by name,profession or crafts"/>
         </div>
      </div>
     <div id="iconset"> 
                <div id="notifications"></div><div id="spannotify"><span>3</span></div>
                       <a class="modalLink" href="#modal7">   <div id="upload"></div></a>
               <div class="overlay"></div>
               <div id="logout" onclick="logout()"></div>
      </div>
           </div>
      <div class="right"><!-- this for right side container main content and it is scrollable -->
           <div class="box1" style="background:url(images/body-bg.png) repeat; margin-left:-10px; margin-top:-35px;
           position:absolute; width:930px; z-index:0;padding-bottom:80px;">

           <div class="box1inbox"  >

<div class="">
<!--
  4) This is how you mark up the thumbnail image with an anchor tag around it.
  The anchor's href attribute defines the URL of the full-size image.
-->
 <?php 


mysql_connect("localhost","root","password") or die("cant connect");
$db=mysql_select_db("skibino2") or die("no db");
if($db){
$query="SELECT * FROM profile"; 
$result1=mysql_query($query);
$num_crafts=mysql_num_rows($result1);
$x=0;
while($row=mysql_fetch_array($result1)){
      $list[$x]= $row['genre'];

    $x++;

}
}
$y=0;
$check=0;
for($x=0;$x<$num_crafts;$x++)
{
  for($z=1;$z<$num_crafts;$z++)
  {
    if(strcmp($list[$x],$list[$z]))
    {
      
    }
    else
    {
      $check=1;
      if($list[$x]=='')
      {
        $check=0;
      }
      
    }
  }
  if($check==1)
  {
    $list2[$y]=$list[$x];
      $y++;
    $check=0;

  }
}



$total=$y;
/*for($x=0;$x<$y;$x++)
{
echo $list2[$x];
echo "<br/>";
}*/
?> 


<form method="post" action="arena.php">  
<div style='margin-left:25PX; margin-top:30px;font-family: "Monda","myfont"; color:#cc4d4d;
font-size:36px;'>ARENA</div>
<select style='margin-left:25PX; font-family: "Monda","myfont"; color:#cc4d4d;
font-size:15px;' name="choose">
<option value="all">ALL</option>
<?php
for($x=0;$x<$y;$x++)
{ 
?>
  <option value="<?php echo $list2[$x]; ?>"> <?php echo $list2[$x]; ?> </option>

<?php
}
?>
<input type="submit" style='margin-left:25PX; font-family: "Monda","myfont"; color:#cc4d4d;
font-size:15px;' value="search" name="search" />
</select> 
</form>

<?php 
if(isset($_GET['page']))
{
   $page=$_GET['page'];
   $genreselect=$_GET['genre'];
   $search=$_GET['select'];
}else
{
    $page=1; 
    $search = $_POST['search'];
    $genreselect=$_POST['choose'];
}


if($genreselect=='all')
{
   $search='';

}
  /*echo '<script language="javascript">';
    echo "alert('".$genreselect."');";
                             echo '</script>';
}
*/
      

?>
<?php

  mysql_connect("localhost","root","password") or die("cant connect");
  $db=mysql_select_db("skibino2") or die("no db");
  session_start();


   if($db)
   {
    if($search)
    { ?>
<div style='margin-left:25PX; margin-top:30px;font-family: "Monda","myfont"; color:#cc4d4d;
font-size:20px;'><?php echo strtoupper($genreselect) ; ?></div>
      <?php
      $query="SELECT * FROM mycrafts 
      WHERE uniqueid IN (select uniqueid from profile where genre = '$genreselect' )
      ORDER by time DESC";
    }
    else
    {
    $query="SELECT * FROM mycrafts ORDER by time DESC ";
    }
    $result1=mysql_query($query);
    $num_crafts=mysql_num_rows($result1);

?>
<script type="text/javascript">
  $(document).ready(function(){

    var page=<?php echo $page; ?> ;
    if(page==1)
    {
      $('#back').css('visibility','hidden');
      $('#back').css('width','0');
      $('#back').css('height','0');
      $('#back').attr('disabled',true);
    }
    var num_crafts=<?php echo $num_crafts; ?> ;
    //alert(page);
    //alert(num_crafts);
    if((page + 8) > num_crafts)
    {
      $('#next').css('visibility','hidden');
      $('#next').css('width','0');
      $('#next').css('height','0');
      $('#next').attr('disabled',true);
    }


  });
</script>
<?php
 
//for($i=0;$i<$num_crafts;$i++)
$counter=0;
    while($row=mysql_fetch_array($result1)){
     $counter++;
     if($counter>=$page && $counter<=($page+7)){
      $craft_id=$row['craftname'];
      $craft_title=$row['title'];
      $desc=$row['description'];
      $type=$row['type'];
      $user_id=$row['uniqueid'];
      $stampG=$row['stampG'];
      $stampS=$row['stampS'];
      $stampB=$row['stampB'];

            $query="SELECT * from profile WHERE uniqueid='$user_id'";
            $result=mysql_query($query);
            while($row=mysql_fetch_array($result)){
              $name=$row['name'];
              $dp=$row['picpath'];
              $genre=$row['genre'];
            }
      
      if($type=="gif" || $type=='jpg' || $type=='jpeg' || $type=='png'){  
?>

<!--image-->
<div class="img-wrap1">
  <div class="forg">
<a href="mycrafts/<?php echo $user_id."/crafts/".$craft_id;?>" class="highslide" onclick="return hs.expand(this)">

  <img id="bordercraftimage" src="mycrafts/<?php echo $user_id."/crafts/".$craft_id;?>" alt="<?php echo $craft_title;?>" width="200" height="190" style="float:left;" title="Click to enlarge"/>
</a>

<!--please dont touch this code-->
<div class="highslide-heading" id="">
<div class="wholeheading">  
  <div class="tooltip" title="popularity for this craft">
  <div class="popularitycontainer">
  <div class="popimage"></div><!-- popimage div-->
  <div class="popnumber"><span class="popnumber1">437,117</span></div>
  </div></div><!--popcontainer div-->
  <div class="stampscollection">
   <div class="circlestamp">
   
   <div class="tooltip" title="gold stamp"><div class="gold"></div></div>
   
   <span class="stampnumber"><?php echo $stampG;?></span></div>
   <div class="circlestamp">
   <div class="tooltip" title="silver stamp"><div class="silver"></div></div>
   <span class="stampnumber"><?php echo $stampS;?></span></div>
   <div class="circlestamp">
   <div class="tooltip" title="bronze stamp"><div class="bronze"></div></div>
   <span class="stampnumber"><?php echo $stampB;?></span>
   </div>
   <div class="circlestamp">
   <div class="tooltip" title="add to LoopBox"><div class="exp"></div></div>
 <!--  <img src="file:///C|/Users/Sony PC/Downloads/highslide-4.1.13/software-box-48.png" class="goldstamp1"/>
 -->  </div>   
  </div><!--stampscollection-->

</div><!--wholeheading div-->
</div><!--highslid--><div class="highslide-caption" id="" style="background-color::#FFF;">
 <div class="userdetailscaption">
   <div class="userpiccaption" style="background:url(<?php echo 'mycrafts/'.$user_id."/".$dp;?> ) no-repeat; background-size:cover;
   background-position:center;"></div><!--userpic div-->
   <div class="usernamecaption">
     <div class="username2caption">
   <p style="font-size:20px;">
   <a href="" style="text-decoration:underline; color:#FFF;"><?php echo strtoupper($name);?></a></p>
   <p style="margin-top:-14px;margin-left:4px; color:#FFF;text-decoration:underline;"><?php echo strtoupper($genre);?></p></div><!--username2 div-->
   
   </div><!--username div-->
   </div><!--userdetails div-->
<div class="commentsection">
  <div class="commentbuttons">
    <div class="commentbuttonscollection">
    <div id="add" ></div><!--add div -->
     <span id="addto">Add To </span>  
     <span id="addto">Collection</span>  
     
     </div><!--comntbuttoncoll div-->
     <div class="commentbuttonscollection">
    <div id="add2" >
    
     <span id="addto2">Delete</span>   
    </div><!--add div -->
     </div><!--comntbuttoncoll div-->
    
  </div>
<div class="craftdescription">
<span class="titledescription">Description</span>
<span class="description"><p><?php echo $desc;?></p></span>
</div><!--craftdescription div-->

</div><!--commentsection-->

</div><!--caption div-->


</div><!--forg image-->

  

  </div><!--img-wrap1-->
  





<?php
  
  }else
  if($type=="mp4"){
?>
  <!--videos-->
  <div class="img-wrap1">
    <div class="forg">

  <a href="i"
  onclick="return hs.htmlExpand(this)">

   <img id="bordercraftimage" src="images/playButton.png" alt="<?php echo $craft_title;?>" width="200" height="190" style="float:left;" />
  </a>
    <div class="highslide-maincontent">
                      <video width="600" height="450" controls>
    <source src="mycrafts/<?php echo $user_id."/crafts/".$craft_id;?>" type="video/mp4">
    </video>

    </div>
<div class="highslide-heading" id="">
<div class="wholeheading">  
  <div class="tooltip" title="popularity for this craft">
  <div class="popularitycontainer">
  <div class="popimage"></div><!-- popimage div-->
  <div class="popnumber"><span class="popnumber1">437,117</span></div>
  </div></div><!--popcontainer div-->
  <div class="stampscollection">
   <div class="circlestamp">
   
   <div class="tooltip" title="gold stamp"><div class="gold"></div></div>
   
   <span class="stampnumber"><?php echo $stampG;?></span></div>
   <div class="circlestamp">
   <div class="tooltip" title="silver stamp"><div class="silver"></div></div>
   <span class="stampnumber"><?php echo $stampS;?></span></div>
   <div class="circlestamp">
   <div class="tooltip" title="bronze stamp"><div class="bronze"></div></div>
   <span class="stampnumber"><?php echo $stampB;?></span>
   </div>
   <div class="circlestamp">
   <div class="tooltip" title="add to LoopBox"><div class="exp"></div></div>
 <!--  <img src="file:///C|/Users/Sony PC/Downloads/highslide-4.1.13/software-box-48.png" class="goldstamp1"/>
 -->  </div>   
  </div><!--stampscollection-->

</div><!--wholeheading div-->
</div><!--highslid--><div class="highslide-caption" id="" style="background-color::#FFF;">
 <div class="userdetailscaption">
   <div class="userpiccaption" style="background:url(<?php echo 'mycrafts/'.$user_id."/".$dp;?> ) no-repeat; background-size:cover;
   background-position:center;"></div><!--userpic div-->
   <div class="usernamecaption">
     <div class="username2caption">
   <p style="font-size:20px;">
   <a href="" style="text-decoration:underline; color:#FFF;"><?php echo strtoupper($name);?></a></p>
   <p style="margin-top:-14px;margin-left:4px; color:#FFF;text-decoration:underline;"><?php echo strtoupper($genre);?></p></div><!--username2 div-->
   
   </div><!--username div-->
   </div><!--userdetails div-->
<div class="commentsection">
  <div class="commentbuttons">
    <div class="commentbuttonscollection">
    <div id="add" ></div><!--add div -->
     <span id="addto">Add To </span>  
     <span id="addto">Collection</span>  
     
     </div><!--comntbuttoncoll div-->
     <div class="commentbuttonscollection">
    <div id="add2" >
    
     <span id="addto2">Delete</span>   
    </div><!--add div -->
     </div><!--comntbuttoncoll div-->
    
  </div>
<div class="craftdescription">
<span class="titledescription">Description</span>
<span class="description"><p><?php echo $desc;?></p></span>
</div><!--craftdescription div-->

</div><!--commentsection-->

</div><!--caption div-->


</div><!--forg image-->

  

  </div><!--img-wrap1-->

<?php
  }else
  if($type == "mp3"){
   
?>
<!--audio-->
  <div class="img-wrap1">
    <div class="forg">

  <a href="i" class="highslide" onclick="return hs.htmlExpand(this)">

    <img id="bordercraftimage" src="images/playButton.png" alt="<?php echo $craft_title;?>" width="200" height="190" style="float:left;" /></a>
     
  <div class="highslide-maincontent" style="margin-top:200px; margin-left:180px;">

     <audio controls height="480" width="600">
    <source src="mycrafts/<?php echo $user_id."/crafts/".$craft_id;?>" type="audio/mpeg">
    </audio>
  </div>
<div class="highslide-heading" id="">
<div class="wholeheading">  
  <div class="tooltip" title="popularity for this craft">
  <div class="popularitycontainer">
  <div class="popimage"></div><!-- popimage div-->
  <div class="popnumber"><span class="popnumber1">437,117</span></div>
  </div></div><!--popcontainer div-->
  <div class="stampscollection">
   <div class="circlestamp">
   
   <div class="tooltip" title="gold stamp"><div class="gold"></div></div>
   
   <span class="stampnumber"><?php echo $stampG;?></span></div>
   <div class="circlestamp">
   <div class="tooltip" title="silver stamp"><div class="silver"></div></div>
   <span class="stampnumber"><?php echo $stampS;?></span></div>
   <div class="circlestamp">
   <div class="tooltip" title="bronze stamp"><div class="bronze"></div></div>
   <span class="stampnumber"><?php echo $stampB;?></span>
   </div>
   <div class="circlestamp">
   <div class="tooltip" title="add to LoopBox"><div class="exp"></div></div>
 <!--  <img src="file:///C|/Users/Sony PC/Downloads/highslide-4.1.13/software-box-48.png" class="goldstamp1"/>
 -->  </div>   
  </div><!--stampscollection-->

</div><!--wholeheading div-->
</div><!--highslid--><div class="highslide-caption" id="" style="background-color::#FFF;">
 <div class="userdetailscaption">
   <div class="userpiccaption" style="background:url(<?php echo 'mycrafts/'.$user_id."/".$dp;?> ) no-repeat; background-size:cover;
   background-position:center;"></div><!--userpic div-->
   <div class="usernamecaption">
     <div class="username2caption">
   <p style="font-size:20px;">
   <a href="" style="text-decoration:underline; color:#FFF;"><?php echo strtoupper($name);?></a></p>
   <p style="margin-top:-14px;margin-left:4px; color:#FFF;text-decoration:underline;"><?php echo strtoupper($genre);?></p></div><!--username2 div-->
   
   </div><!--username div-->
   </div><!--userdetails div-->
<div class="commentsection">
  <div class="commentbuttons">
    <div class="commentbuttonscollection">
    <div id="add" ></div><!--add div -->
     <span id="addto">Add To </span>  
     <span id="addto">Collection</span>  
     
     </div><!--comntbuttoncoll div-->
     <div class="commentbuttonscollection">
    <div id="add2" >
    
     <span id="addto2">Delete</span>   
    </div><!--add div -->
     </div><!--comntbuttoncoll div-->
    
  </div>
<div class="craftdescription">
<span class="titledescription">Description</span>
<span class="description"><p><?php echo $desc;?></p></span>
</div><!--craftdescription div-->

</div><!--commentsection-->

</div><!--caption div-->


</div><!--forg image-->

  

  </div><!--img-wrap1-->



<?php
  }
  }
  }
}
?>


</div>




           
           </div>
           <div>       
   <a id="back" href="arena.php?page=<?php echo $page-8; ?>&genre=<?php echo $genreselect; ?>&select=<?php echo $search; ?>"><input type="submit" value="Back" style='margin-left:25PX; margin-top:30px;font-family: "Monda","myfont"; color:#cc4d4d;
font-size:20px;'/></a>
  <a id="next" href="arena.php?page=<?php echo $page+8; ?>&genre=<?php echo $genreselect; ?>&select=<?php echo $search; ?>"><input type="submit" value="Next" style='margin-left:740PX; margin-bottom:70px; margin-top:30px;font-family: "Monda","myfont"; color:#cc4d4d;
font-size:20px;' /></a>
</div>


</div><!--box1-->
</div><!--box1in div-->

<!--from here right side content starts ie chatbox,lb notificaions,show of day -->
<div class="chatterbox">

</div>


</div>

  <link rel="stylesheet" type="text/css" href="css/themes/tooltipster-punk.css" />
  <link rel="stylesheet" type="text/css" href="css/tooltipster.css"/>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>
  <script type="text/javascript" src="js/jquery.tooltipster.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('.tooltip').tooltipster();
    });
    $('.tooltip').tooltipster({
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
    <form method="post" action="arena.php" enctype='multipart/form-data'>
     <div class="boxborder">
        <div class="fileUpload btn btn-primary">
          <input type="file" name="uploadcrafts" class="upload" />
        </div>
      </div><!--boxborder-->
    </div><!--boxdrop-->
    
    <div class="boxdetails">
      <div class="boxdetailstitle">Title</div>
      <input type="text" name="title" class="boxdetailstitletext"/>
      <div class="boxdetailsdesc">Description</div>
      <textarea rows="2" cols="60" name="description" class="boxdetailsdesctext"></textarea>
    </div><!--boxdetails-->
</div><!--boxcontent-->
<div class="boxbutton">
<input type="submit" value="Done" name="upload" />

<!-- <button type="button" class="boxbuttonconfirm">
<img src="images/approval-32.png"/></button> -->
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
                 
                        $connect= mysql_connect('localhost','root','password');
                        $mydb=mysql_select_db("skibino2");
                        if($mydb)
                        {

                               $date=date("Y-m-d H:i:s");
                               $unqid=$_SESSION['uid'];
                                //echo $unique_id;
                              mysql_query("INSERT INTO mycrafts ( uniqueid , craftname , title , description , stampG , stampS , stampB , time ,loopboxin ,type) VALUES ('$unqid','$filename','$title','$description',0,0,0,'$date',NULL,'$ext') ");
                              echo '<script language="javascript">';
                              echo 'alert("done"); ';
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
     if (((($ext == "jpg") && ($_FILES["uploadcrafts"]["type"] == "image/jpeg"))||(($ext == "gif") && ($_FILES["uploadcrafts"]["type"] == "image/gif"))||(($ext == "png") && ($_FILES["uploadcrafts"]["type"] == "image/png"))||(($ext == "jpeg") && ($_FILES["uploadcrafts"]["type"] == "image/jpeg"))) &&
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
                       

                        $connect= mysql_connect('localhost','root','password');
                        $mydb=mysql_select_db("skibino2");
                        if($mydb)
                        {

                               $date=date("Y-m-d H:i:s");
                               $unqid=$_SESSION['uid'];
                                //echo $unique_id;
                              mysql_query("INSERT INTO mycrafts ( uniqueid , craftname , title , description , stampG , stampS , stampB , time ,loopboxin ,type) VALUES ('$unqid','$filename','$title','$description',0,0,0,'$date',NULL,'$ext') ");

                              echo '<script language="javascript">';
                              echo 'alert("done"); ';
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