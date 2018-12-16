<?php 

$keyword = array(
	'Keyword type 1',
	'keyword type 2'
);

 ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php r($keyword); ?></title>
  <meta name="description" content="<?php r($keyword); ?>">

</head>

<body>
	<?php r($keyword); ?>
</body>
</html>



<?php 
function r($a){
	echo $a[array_rand($a)];
	return;
}

?>