<?php 
include 'config.php';

?>    
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>skibino</title>
        <meta name="description" content="Blueprint: Split Layout" />
        <meta name="keywords" content="website template, layout, css3, transition, effect, split, dual, two sides, portfolio" >
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component$.css" />
        <link href="fonts/yAXhog6uK3bd3OwBILv_SD8E0i7KZn-EPnyo3HZu7kw (1).woff" rel="stylesheet" type="text/css"/>
<link href="http://fonts.googleapis.com/css?family=Maiden+Orange" rel='stylesheet' type='text/css'>
        <script src="js/modernizr.custom2.js"></script>

        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-2.0.2.js"></script>
        <script src="js/logreg.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div id="splitlayout" class="splitlayout">
                <div class="intro">
                    <div class="side side-left">
                        <header class="codropsheader clearfix">
                        
                          <span> <span class="" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span><span style="color:#000;font-size:32px;">SKIBINO</span> 
                         <!-- <img src="images/dribb_rock211 copy.png"  style="margin-top:-100px; margin-left:-150px; position: fixed; width:400px; height:300px;">-->
                          <img src="images/whitenoise_ill_1x 1 - Copy.png" style="margin-left:200px;margin-top:-55px;"/><!--
                            <h1 style="color:#333"><strong>SKIBINO</strong></h1>-->
                            
                            
                        
                          <!--<div class="demos">
                                <a class="current" href="index.html">Effect 1</a>
                                <a href="index2.html">Effect 2</a>
                            </div>-->
                        </header>
                        <div class="intro-content">
                            <!--<div class="profile"><img src="img/skibino icon.png" alt="profile1" width="144" height="144"></div>-->
                            <h1><span>Sign In</span></h1>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    
                    <div class="side side-right"><img src="images/whitenoise_ill_1x 1.png" style=" margin-left:-240px;
                    margin-top:30px;"/>
                        <div class="intro-content">
                            <!--<div class="profile"><img src="img/profile2.jpg" alt="profile2"></div>-->
                            <h1><span style="">Sign Up</span></h1>
                            <!--<div style="width:400px; height:200px;margin-left:-50px;">
                            <span>This is a place where TALENTED meets the SUPERTALENTED<br/><br/></span>
                            <span>Meet, Search the people of any genre<br/><br/></span>
                            <span>Get Noticed<br/><br/></span>
                            <span>In simple <span style="font-size:24px">SKIBINO</span> is your Profile Builder</span>
                        </div>-->
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div><!-- /intro -->
                <div class="page page-right">
                    <div class="page-inner">
                        
                            <h2>SIGN UP</h2>
                <form id="registration" method="post" action="reg.php">
                   <!-- <div class="socle" style="width:200px;">
                    <h3 style="text-align: center;">NAME</h3>
                    </div>
-->                    <div class="bordered-link">
                    <input type="text" style="width:500px; background:none; border-color: transparent; color:#cc4d4d;
                    font-size:16px;" id="name" name="name" required placeholder="NAME"/>
                    </div><span id="cname"></span>
                    <!--
                    <div class="socle" style="width:200px;">
                    <h3 style="text-align: center;">EMAIL ID</h3>
                    </div>-->
                     <div class="bordered-link">
                    <input type="email" style="width:500px; background:none; border-color: transparent;color:#cc4d4d;
                    font-size:16px;" id="email" name="email" required placeholder="E-MAIL" /><span id="cemail"></span>
                    </div>
                    
               <!--     <div class="socle" style="width:200px;">
                    <h3 style="text-align: center;">PASSWORD</h3>
                    </div>
-->                     
                    <div class="bordered-link">
                    <input type="password" style="width:500px;background:none;border-color:transparent;color:#cc4d4d;
                    font-size:16px;" id="password" name="password" required placeholder="PASSWORD" />
                    </div><span id="cpwd"></span>
                                       <div class="bordered-link">
                    <input type="password" style="width:500px;background:none;border-color:transparent;color:#cc4d4d;
                    font-size:16px;" id="cpassword" name="cpassword" required placeholder="CONFIRM PASSWORD" />
                    </div><span id="ccpwd"></span>
                    <div>
                     <input type="submit" id="submit" name="submitreg" class="metro" value="SUBMIT" 
                     style="background-color:#cc4d4d; border-color:transparent; color:#FFF;
                     font-size:28px; font-family:"></input>
                    
                     <input type="reset" class="metro" value="RESET" 
                     style="background-color:#cc4d4d; border-color:transparent; color:#FFF;
                     font-size:28px; margin-left:100px;" ></input>
                     </div> 
                </form>
                       <div id="output" style=" color:#000;"></div>
                    <img src="images/mic_1x.png" style="margin-top:-400px;
                     position:fixed; margin-left:550px;"></img>                 





                    
                        
                        
                    </div><!-- /page-inner -->
                </div><!-- /page-right -->
                <div class="page page-left">
                    <div class="page-inner">
                        <section>
                            <h2>LOGIN</h2>
                            
                   <form id="signin" method="post" action="signin.php">
                    
                    <div class="socle" style="width:200px;margin-left:410px;">
                    <h3 style="text-align: center; ">EMAIL ID</h3>
                    </div>
                     <div class="bordered-link1">
                    <input type="email" id="emailid" name="emailid" required style="width:500px; background:none; border-color: transparent;" />
                    </div>
                    
                    <div class="socle" style="width:200px;margin-left:410px;">
                    <h3 style="text-align: center;">PASSWORD</h3>
                    </div>
                     <div class="bordered-link1">
                    <input type="password" id="userpassword" name="userpassword" required style="width:500px; background:none; border-color: transparent;" />
                    </div>
                    <div>
                     <input  type="submit" id="submitlogin" name="submit" onclick="checklog()" class="metro1" value="LOGIN" 
                     style="background-color:#fd6a62; border-color:transparent; color:#FFF;
                     font-size:28px; position:relative; margin-right:20px;" ></input>
                    
                     <input type="reset" class="metro1" value="RESET" 
                     style="background-color:#fd6a62; border-color:transparent; color:#FFF;
                     font-size:28px; margin-left:100px;" ></input>
                    </div>   
                    </form>
                    <div id="output2"></div>
                    <img src="images/toresolve2014-finalshot copy.png" style="margin-right:500px; margin-top:-500px;"/>
                            
                    
                        </section>
                        
                    </div><!-- /page-inner -->
                </div><!-- /page-left -->
                <a href="#" class="back back-right" title="back to intro">&rarr;</a>
                <a href="#" class="back back-left" title="back to intro">&larr;</a>
            </div><!-- /splitlayout -->
        </div><!-- /container -->
        <script src="js/classie.js"></script>
        <script src="js/cbpSplitLayout.js"></script>
    </body>
</html>
<?php 
if(isset($_POST['submitreg'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);
$date=date("Y-m-d H:i:s");
echo($name);
if($name && $email && $password)
{
    
        $connect= mysql_connect('localhost','root','password');
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
                    echo "4";
                    
                }
        }
        else 
        {
            echo "3";
        }   
        mysql_close($con);
}
else 
{ 
    echo '2'; 
}
}?>