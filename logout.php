
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/profile.css" type="text/css" rel="stylesheet" />
<link href="fonts/yAXhog6uK3bd3OwBILv_SD8E0i7KZn-EPnyo3HZu7kw (1).woff" rel="stylesheet" type="text/css"/>
<link href="http://fonts.googleapis.com/css?family=Maiden+Orange" rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href="cssmenu/menu_source/styles.css" />
</head>
<body>

<?php
session_start();
session_unset();
session_destroy();
header("Location: login.html");
?>

</body>
</html>
