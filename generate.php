<?php
$site_url = 'https://detroitpowerwashing.com';

$counties_to_create = array(
	'Oakland County',
	'Macomb County',
	'Wayne County',
	'St. Clair County',
	'Lapeer County',
	'Genesse County',
	'Livingston County',
	'Sanilac County'
);

$in_state = 'Michigan';

// delete all in dist folder
if (file_exists('dist')) {
    recursiveRemove('dist/');
}
mkdir('dist');


// grab all template files
$templates = glob("templates/*.php");

// copy folders to dist
$folders = array_filter(glob('templates/*'), 'is_dir');
foreach ($folders as $folder) {
	$dist_folder = str_replace('templates', 'dist', $folder);
	recurse_copy( $folder, $dist_folder);
}

//grab all locations from csv
$locations = fopen('data/cities_all_columns.csv', 'r');

// Create all pages
while (($line = fgetcsv($locations)) !== FALSE) {
	
	foreach ($counties_to_create as $county) {
		
		if($line[1] == $county && $line[3] == $in_state && strpos($line[0], '(') == false //){
			  && $line[0] == 'Port Huron'){
			
			$city = $line[0];
			$county = $line[1];
			$state_abbr = $line[2];
			$state = $line[3];
			$zip_codes = $line[5];

			foreach ($templates as $template) {

				$service_type_url_part = str_replace('templates/' , '', $template);
				$service_type_url_part = str_replace('.php' , '', $service_type_url_part);
				$location_url_city = str_replace(' ' , '-', $city);
				$file_name = strtolower('dist/' . $state_abbr  . '/' . $service_type_url_part . '-' . $location_url_city . ".php");
				echo '<a href="' . $file_name . '">' . $file_name . '</a><br>';
 
				if ( ! file_exists('dist/' . strtolower($state_abbr)) ) {
				    mkdir( 'dist/' . strtolower($state_abbr) );
				}
				

				//Build PHP File
				$cur_file = fopen($file_name, "w") or die("Unable to open file!");
				$txt = '<?php ';
				$txt .= '$city = "' . $city . '"; ';
				$txt .= '$state = "' . $state . '"; ';
				$txt .= '$state_abbr = "' . $state_abbr . '"; ';
				$txt .= '$zip_codes = "' . $zip_codes . '"; '; 
				$txt .= '$county = "' . $county . '"; '; 
				$txt .= '?> ';
				$txt .= file_get_contents($template);
				fwrite($cur_file, $txt);
				fclose($cur_file);

			}//foreach

		}//if

	}//foreach

}//while
fclose($locations);


// create sitemap
$pages = glob("dist/*.php");
$sitemap = fopen('dist/sitemap.xml', "w") or die("Unable to open file!");

$txt = '
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
   		<loc>' . $site_url . '</loc>
    	<lastmod>' . date('c',time()) . '</lastmod>
  	</url>';
foreach ($pages as $page) {
	$cur_page = str_replace('dist', $site_url, $page);
	$txt .= '
	<url>
		<loc>' . $cur_page . '</loc>
		' . 
		'<lastmod>' . date('c',time()) . '</lastmod>
	' . 
	'</url>';
}
$txt .= '
</urlset>';

fwrite($sitemap, $txt);
fclose($sitemap);






/*
FUNCTIONS
*/
function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
} 

function recursiveRemove($dir) {
    $structure = glob(rtrim($dir, "/").'/*');
    if (is_array($structure)) {
        foreach($structure as $file) {
            if (is_dir($file)) recursiveRemove($file);
            elseif (is_file($file)) unlink($file);
        }
    }
    rmdir($dir);
}