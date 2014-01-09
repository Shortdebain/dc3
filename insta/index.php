<?php
 
require_once 'classes/instagram.class.php';

$insta = new Instagram();

$res = $insta->getPictures();
//foreach($res->data as $picture){
	//var_dump($picture->images->low_resolution->url);
//};
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<h1>Intagramme</h1>
		<ul>
			<?php 
				foreach($res->data as $picture){?>
					<img src="<?php echo $picture->images->low_resolution->url;?>">
				<?php };
			?>	
		</ul>
		
		
		
		
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="/js/script.js"></script>
	</body>
</html>