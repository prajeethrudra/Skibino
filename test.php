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
for($x=0;$x<$y;$x++)
{
echo $list2[$x];
echo "<br/>";
}
?>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="js/myapp.js"></script><!--for tabs-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
	function search()
	{
		var choose = $('#choose').val();
		//alert("done");
		alert(choose);
	}


	</script>
</head>
<body>
<select id="choose">
<?php
for($x=0;$x<$y;$x++)
{ 
?>
  <option value="<?php echo $list2[$x]; ?>"> <?php echo $list2[$x]; ?> </option>

<?php
}
?>
<input type="button" value="search" name="search" onclick="search()" />
</select> 
</body>
</html>
