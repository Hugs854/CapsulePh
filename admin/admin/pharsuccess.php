<?php
$link=$_REQUEST['pharsuccess'];
?>
<html>
<head>
<script>
function myfunction()
{
	document.getElementById("pharsuccess").click();
}
</script>
</head>
<body onLoad="myfunction()">
<form action="index.php" method="post" id="myform">
	<input hidden="" type="text" name="pharsuccess" value="<?php echo"$link";?>">
    <button hidden="" type="submit" id="pharsuccess" data-modal="pharsuccess" name="pharsuccess" value="pharsuccess"></button>
</form>

<h1 style="padding-left:400px; padding-top:200px;"><img src="../images/loading-x.gif" /></h1>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>