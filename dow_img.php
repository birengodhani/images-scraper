<?php
//enter your path like (download/scrapped__.txt)
$scrapped= file_get_contents('downloads/scrapped.txt');

$pattern = '/src="([^"]+)/';
$matches ='';

preg_match_all($pattern, $scrapped, $matches);


foreach ($matches[1] as $img_url ) {

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $img_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$img = curl_exec($ch);
curl_close($ch);	

$img_name = explode("/",$img_url);
$img_name = $img_name[count($img_name)-1];


//enter yor path to downloads images like('images__/')


file_put_contents('images/'.$img_name,$img);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.img-container{
			display:inline-block;
			vertical-align:top;
			width: 50%;  
		}
		.img-container>img{
			width: 50%
		}

	</style>
</head>
<body>


 </div>
</body>
</html>