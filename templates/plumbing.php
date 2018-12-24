
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
$build_location = $city . '%20' . $state . '%20';
 ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php echo $keyword; ?> In <?php echo $city . ', ' . $state_abbr; ?> ($50 Off) Limited Time</title>
  <meta name="description" content="<?php r($keyword); ?>">


  <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Remove all links to footer and eliminate render blocking -->
	<!-- Inline CSS, No reason to fetch the script -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
<div id="wrapper">
	<header class="text-center">
		<h1><?php echo $keyword; ?> Company In <?php echo $city . ' ' . $state_abbr; ?></h1>
	</header>

	<div id="content" class=" flex-grid">
		<main>
			
			<!-- Define The Business -->
			<h2>Business Name provides the highest quality <?php echo $keyword; ?> at an affordable price. Call us now to recieve $50 off your service. <?php echo $phone_link; ?></h2>
			<p>
				<span>This section covers your introductory text — including a basic description of what the company does — plus geographic-specific advice, satisfaction guarantee information, and a mention of well-known clients served.</span>
			</p>
			<p>
				<span>This section covers your introductory text — including a basic description of what the company does — plus geographic-specific advice, satisfaction guarantee information, and a mention of well-known clients served.</span>
			</p>
			<p>
				<span>This section covers your introductory text — including a basic description of what the company does — plus geographic-specific advice, satisfaction guarantee information, and a mention of well-known clients served.</span>
			</p>
			<p>
				<span>This section covers your introductory text — including a basic description of what the company does — plus geographic-specific advice, satisfaction guarantee information, and a mention of well-known clients served.</span>
			</p>
			<?php 
				echo 
					'<br> city: ' . $city . 
					'<br> state: ' .$state . 
					'<br> state_abbr: ' .$state_abbr . 
					'<br> zip_codes: ' .$zip_codes . 
					'<br> county: ' .$county . 
					'<br>' ;
			?>
			
			<!-- Social Proof -->
			<hr>
			<h2>See what our customers in are saying. Call <?php echo $phone_link; ?> for your own quote!</h2>
			<div class="flex-grid reviews">
				<div class="col">
					<p>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						<img class="float-left" src="https://i.ytimg.com/vi/yaPJpS4NvTI/hqdefault.jpg" alt=""> 
						<br><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ducimus, porro qui quisquam architecto dignissimos veniam voluptatem."</i>
					</p>
					<p>
						- Adam West
					</p>
				</div>
				<div class="col">
					<p>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						<img class="float-left" src="https://i.ytimg.com/vi/yaPJpS4NvTI/hqdefault.jpg" alt=""> 
						<br><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ducimus, porro qui quisquam architecto dignissimos veniam voluptatem."</i>
					</p>
					<p>
						- Adam West
					</p>
				</div>
			</div>
			<div class="flex-grid reviews">
				<div class="col">
					<p>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						<img class="float-left" src="https://i.ytimg.com/vi/yaPJpS4NvTI/hqdefault.jpg" alt=""> 
						<br><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ducimus, porro qui quisquam architecto dignissimos veniam voluptatem."</i>
					</p>
					<p>
						- Adam West
					</p>
				</div>
				<div class="col">
					<p>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						<img class="float-left" src="https://i.ytimg.com/vi/yaPJpS4NvTI/hqdefault.jpg" alt=""> 
						<br><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ducimus, porro qui quisquam architecto dignissimos veniam voluptatem."</i>
					</p>
					<p>
						- Adam West
					</p>
				</div>
			</div>
			<div class="flex-grid reviews">
				<div class="col">
					<p>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						<img class="float-left" src="https://i.ytimg.com/vi/yaPJpS4NvTI/hqdefault.jpg" alt=""> 
						<br><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ducimus, porro qui quisquam architecto dignissimos veniam voluptatem."</i>
					</p>
					<p>
						- Adam West
					</p>
				</div>
				<div class="col">
					<p>
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
						<img class="float-left" src="https://i.ytimg.com/vi/yaPJpS4NvTI/hqdefault.jpg" alt=""> 
						<br><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ducimus, porro qui quisquam architecto dignissimos veniam voluptatem."</i>
					</p>
					<p>
						- Adam West
					</p>
				</div>
			</div>
			<p class="text-center">
				Did We Do A Good Job For You? <a href="#">Please Review Us Here</a>
				<br>
				We're proud of our <a href="#">Google Reviews</a>, <a href="#">Yelp Reviews</a>, and <a href="#">BBB A+</a> Rating
				<br>
				<br>
				Rated 4.9/5 Out of 129 reviews
			</p>
			

			<!-- objection handling -->
			<hr>
			<h2>Answers To Your Questions About In</h2>
			<p>
				<b>Q:</b> How Does It Work?
				<br>
				<b>A:</b> Here’s where we put our question research to work, with the owner answering questions he says customers frequently ask, plus questions generated by a tool and other research.
			</p>
			<p>
				<b>Q:</b> How Does It Work?
				<br>
				<b>A:</b> Here’s where we put our question research to work, with the owner answering questions he says customers frequently ask, plus questions generated by a tool and other research.
			</p>
			<p>
				<b>Q:</b> How Does It Work?
				<br>
				<b>A:</b> Here’s where we put our question research to work, with the owner answering questions he says customers frequently ask, plus questions generated by a tool and other research.
			</p>
			<p>
				<b>Q:</b> How Does It Work?
				<br>
				<b>A:</b> Here’s where we put our question research to work, with the owner answering questions he says customers frequently ask, plus questions generated by a tool and other research.
			</p>
			<p>
				<b>Q:</b> How Does It Work?
				<br>
				<b>A:</b> Here’s where we put our question research to work, with the owner answering questions he says customers frequently ask, plus questions generated by a tool and other research.
			</p>
			<p>
				<b>Q:</b> How Does It Work?
				<br>
				<b>A:</b> Here’s where we put our question research to work, with the owner answering questions he says customers frequently ask, plus questions generated by a tool and other research.
			</p>
			<p>
				<b>Q:</b> How Does It Work?
				<br>
				<b>A:</b> Here’s where we put our question research to work, with the owner answering questions he says customers frequently ask, plus questions generated by a tool and other research.
			</p>



			<!-- meet owner -->
			<hr>
			<h2>Meet The Owner, Peter</h2>
			<div class="flex-grid">
				<div class="col">
					<p>
						<img src="img/author.png" alt="">
					</p>
				</div>
				<div class="col">
					<p>
						Here’s an area for extra creativity. We’re featuring a "Meet the Owner" video, some relevant local news, and mentioning company support for local entities, including a special deal.
					</p>
					<p>
						<i>"Here’s an area for extra creativity. We’re featuring a "Meet the Owner" video, some relevant local news, and mentioning company support for local entities, including a special deal."</i>
					</p>
					<p>
						<i>- Peter Griffin</i>
					</p>
				</div>
			</div>

		</main>	
		<aside>
			<p>
				<img src="https://i.ytimg.com/vi/PwSgCG5kCBI/maxresdefault.jpg" alt="">
				Here is a vertical section featuring 3 project showcase videos + text project summaries. Here is a vertical section featuring 3 project showcase videos + text project summaries. Here is a vertical section featuring 3 project showcase videos + text project summaries.
			</p>
			<p>
				<img src="https://i.ytimg.com/vi/PwSgCG5kCBI/maxresdefault.jpg" alt="">
				Here is a vertical section featuring 3 project showcase videos + text project summaries. Here is a vertical section featuring 3 project showcase videos + text project summaries. Here is a vertical section featuring 3 project showcase videos + text project summaries.
			</p>
			<p>
				<img src="https://i.ytimg.com/vi/PwSgCG5kCBI/maxresdefault.jpg" alt="">
				Here is a vertical section featuring 3 project showcase videos + text project summaries. Here is a vertical section featuring 3 project showcase videos + text project summaries. Here is a vertical section featuring 3 project showcase videos + text project summaries.
			</p>
			<p>
				Some Key Indicators For SEO: <?php 
				echo 
					' ' . $city . 
					' ' .$state . 
					' ' .$state_abbr . 
					' ' .$zip_codes . 
					' ' .$county
					;?>
				<iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $build_location; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</p>

		</aside>
	</div>

	

	<footer class="text-center">
		<h1>
			Need A Fast Quote For A Quick _________________? 
			<br>
			Call <?php echo $phone_link; ?> Today!
		</h1>
		<p>
			&copy; <?php echo date('Y'); ?> Business Name | All Rights Reserved | <a href="sitemap.xml">Sitemap</a> | <?php echo $keyword; ?> Company In <?php echo $city . ', ' . $state_abbr; ?> 
		</p>
	</footer>
		
</div> <!-- #wrapper-->
	

<a href="tel:<?php echo $phone_num; ?>" class="mobile_footer_phone hide-large">
<div class="container click-to-call text-center">
	<span>Call <i class="fa fa-phone"></i> <?php echo $phone_num; ?></span>
</div>
</a>


</body>
</html>





























<?php 
// print random content based on array.
function r($a){
	echo $a[array_rand($a)];
	return;
}

?>