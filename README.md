# What it does and how it works

Creates landing pages based on content in templates files / sub folders. Create a template file and whatever dependencies needed will be transferred over to the newly created dist folder when you run index.php. Modifying the code will allow you to generate a landing page for every city in the united states, or you can specify you state and counties. Transfer contents of the dist folder to production for us.

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

# Future Features

GUI that includes selection of all locations, remove all landing pages.