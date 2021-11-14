<?php
$link=$_REQUEST['catsuccess'];
?>
<html>
<head>
<script>
function myfunction()
{
	document.getElementById("catsuccess").click();
}
</script>
</head>
<body onLoad="myfunction()">
<form action="index.php" method="post" id="myform">
	<input hidden="" type="text" name="catsuccess" value="<?php echo"$link";?>">
    <button hidden="" type="submit" id="catsuccess" data-modal="catsuccess" name="catsuccess" value="catsuccess"></button>
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