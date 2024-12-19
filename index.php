<!DOCTYPE html>
<html>
<head>
<title>File test.php</title>
</head>
<body>
  
<h1>php</h1>

<?php
echo "hello world";
echo "<br>";
print "Hello world";
echo "<br>";
print_r ("Hello world");
echo "<br>";
printf ("Hello world");
echo "<br>";
var_dump ("Hello world");
echo "<br>";
$snyvar = "hello world";
?>

<?php echo $snyvar; ?> 
<?php
echo "<h1>" .$snyvar. "</h1>";
?>
<?php
function myfunction($Snyparam){
  return $Snyparam;
}
echo "<p>" .MYFUNCTION("Hello world"). "</P>";
?>

</body>
</html>