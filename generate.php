<?php
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
while (($line = fgetcsv($locations)) !== FALSE) {
	
	foreach ($counties_to_create as $county) {
		
		if($line[1] == $county && $line[3] == $in_state && strpos($line[0], '(') == false ){
			// && $line[0] == 'Port Huron'){
			
			$city = $line[0];
			$county = $line[1];
			$state_abbr = $line[2];
			$state = $line[3];
			$zip_codes = $line[5];

			foreach ($templates as $template) {

				$service_type_url_part = str_replace('templates/' , '', $template);
				$service_type_url_part = str_replace('.php' , '', $service_type_url_part);
				$location_url_part = str_replace(' ' , '-', $city . '-' . $state_abbr);
				$file_name = strtolower('dist/' . $service_type_url_part . '-' . $location_url_part . ".php");
				echo '<a href="' . $file_name . '">' . $file_name . '</a><br>';

				$cur_file = fopen($file_name, "w") or die("Unable to open file!");
				$txt = file_get_contents($template);
				fwrite($cur_file, $txt);
				fclose($cur_file);

			}//foreach

		}//if

	}//foreach

}//while
fclose($locations);








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

