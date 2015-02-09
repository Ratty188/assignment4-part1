<html>
<title>Loopback Results</title>
<body>
<?php

//ini_set('display_errors', 1);

$array = [];
$array ['Type'] = $_SERVER['REQUEST_METHOD'];

foreach ($_GET as $key => $value){
	$array['parameters'][$key] = $value;
}

/*
//I used this method before I found the method below. Both appear to work peoperly.
foreach ($_POST as $key => $value){
	$array['parameters'][$key] = $value;
}
*/

//I found this as an alternative to the foreach method on PHP.net
while(list($key,$value) = each($_POST)){
	$array['parameters'][$key] = $value;
}

//PHP.net recommends that the refrence still held in $value be destroyed by unset().
unset($value);

//Print the string
echo json_encode($array);
?>
</body>
</html>
