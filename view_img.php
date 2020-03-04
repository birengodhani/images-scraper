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
	<div class="wrapper">
		<?php

		$dir = 'images';

		if(is_dir($dir)){
			$handle= opendir($dir);

			while ($file = readdir($handle)) {
				if($file != '.' AND $file != '..' ){

					?>

					<div class="img-container">
					<!-- images foldername put in path(./images__) -->
						<img src="./images/<?= $file;?>">
					</div>

					<?php

				}
				
			}
			closedir($handle);
		}
		?>


 </div>
</body>
</html>