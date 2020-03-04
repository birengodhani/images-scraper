<?php

//enter your url :-___
//1:-first part run (download images__.txt file )than secondary part (show images__.txt fiel)

$url ='https://www.amazon.in/b?node=1389409031&pf_rd_p=9349a7b9-1bf7-4019-a6a5-42c9b06fee6e&pf_rd_r=8SQJ2S418RB8BBWVVN9X';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$source = curl_exec($ch);

$pattern ='/<img[^>]+>/';

 $matches = '';
 
preg_match_all($pattern,  $source, $matches );

echo '<pre>';
print_r($matches);

if(!is_dir('downloads')){
	mkdir('downloads',0777);	
}
//enter file name like scrapped__.txt

$file= fopen('downloads/scrapped.txt','w');

foreach ($matches [0]as $img ) {
	fwrite($file,$img."\n");
	}

fclose($file);