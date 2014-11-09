<title>PHP Server Image Cache 2.1</title>
<?php 
// cdn link output from Spotify curl request
$spotify_cdn_url = "https://d3rt1990lpmkn.cloudfront.net/640/032141dbc0c946bfc0347fc42cfed43c27df5300";

// server cache folder
$folder = 'images/cache/2014/';

// server cache filename
$file = basename($spotify_cdn_url);

// complete server filepath
$filepath = ''.$folder.''.$file.'';


if (file_exists($filepath)) {
	// if image is in folder
    echo "The file $filepath exists<br>";
    
    // open from folder...
	echo('<img src="'.$filepath.'">');    

} else {
	// if image isn't in folder
	echo "The file $filepath does not exist<br>";

	// save image to folder
    $destdir = ''.$folder.'';
    $img=file_get_contents($spotify_cdn_url);
    file_put_contents($destdir.substr($spotify_cdn_url, strrpos($spotify_cdn_url,'/')), $img);

    echo "The file $filepath has been saved to folder<br>";
    
	// open from folder...
	echo('<img src="'.$filepath.'">');    
}

// get filename from url
echo basename($spotify_cdn_url);
?>
