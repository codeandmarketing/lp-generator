
<?php 
/*Required Location Specific Variables*/
$city = isset($city) ? $city : 'Detroit' ;
$state = isset($state) ? $state : 'Michigan' ;
$state_abbr = isset($state_abbr) ? $state_abbr : 'MI' ;
$zip_codes = isset($zip_codes) ? $zip_codes : '48127' ;
$county = isset($county) ? $county : 'Wayne County' ;

$keyword = "Plumbing";
$keywords = array(
	'Plumbing',
	'Plumbing'
);
$phone_num = '313-333-3333';
$phone_link = '<a href="tel:+1-' . $phone_num . '"> ' . $phone_num . ' </a>';

 ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php echo $keyword; ?> In <?php echo $city . ', ' . $state_abbr; ?> ($50 Off) Limited Time</title>
  <meta name="description" content="<?php r($keyword); ?>">

</head>

<body>
	<h1><?php echo $keyword; ?> Company In <?php echo $city . ' ' . $state_abbr; ?></h1>
	<h2>Business Name provides the highest quality <?php echo $keyword; ?> at an affordable price. Call us now to recieve $50 off your service. <?php echo $phone_link; ?></h2>
	<?php 
	echo '<br>' . $city . '<br>' .$state . '<br>' .$state_abbr . '<br>' .$zip_codes . '<br>' .$county . '<br>' ;
	?>


	<?php 
	$build_location = $city . '%20' . $state . '%20';
	?>
	<iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $build_location; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</body>
</html>



<?php 
// print random content based on array.
function r($a){
	echo $a[array_rand($a)];
	return;
}

?>