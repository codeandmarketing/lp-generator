# What it does and how it works

Creates landing pages based on content in templates files / sub folders. Create a template file and whatever dependencies needed will be transferred over to the newly created dist folder when you run index.php. Modifying the code will allow you to generate a landing page for every city in the united states, or you can specify you state and counties. Transfer contents of the dist folder to production for use.

Template is coded to be as minimal as possible. Keep the file size small and limit links to resources if you want to rank higher and more often.

# Usage 

1. Add your counties in generate.php
2. Add your state in generate.php
3. Add your site URL in gernate.php
4. Create template files in template folder.
Make sure to include this code in your template file. It will allow you to use location specific variables in your template. Sample template is included.
```
<?php 
$city = isset($city) ? $city : 'CITY' ;
$state = isset($state) ? $state : 'STATE' ;
$state_abbr = isset($state_abbr) ? $state_abbr : 'ST' ;
$zip_codes = isset($zip_codes) ? $zip_codes : 'ZIPCODES' ;
$county = isset($county) ? $county : 'COUNTY' ;
?>
```	
5. Run index.php

# Template Recomendations

1. Do not place any scripts or style sheets in the header.
2. Minify and paste your CSS in the head. 
3. Minify and paste JavaScript in the footer. Unless you have a reason to use jQuery, do not use it. In most cases it's uneeded bloat that will slow down the load time.
4. Use small, highly optimized files in the .jpeg or .svg format if possible.

# Future Features
```
Backend
	
	Tasks
		Create folder structure for landing pages 
			Example: /mi/service_type-location_city
		Generate sitemap based off new structure
		Allow of saving of HTML files as well as PHP
		Orginize code
	
	Possible Tasks
		Generate .htaccess

GUI For Creation
	
	Scope
		Choose locations by counties or states only
			Massive select box
		Enter Domain and HTTP/HTTPS
			Select and text input
		Remove Dist Folder
			Button
		Regenerate Sitemap
			Button

Template

	Schema Coding
	Social Sharing Ability
	Include all assests 
	Prevent Render Blocking
	2 column header, logo left and phone/social right
```