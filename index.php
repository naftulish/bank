<!DOCTYPE html>

<html dir="rtl">

	<head>
	
		<title>bank.com</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style1.css">
		<link href="https://fonts.googleapis.com/css?family=Arimo:400,700|Heebo:400,500" rel="stylesheet">	</head>
		<meta content="width=device-width, initial-scale=1" name="viewport" />

	
	<body>

	<?php
		$get_from_api = file_get_contents("http://pintele.org/api/api.php");
		$array_of_banks = json_decode($get_from_api, true);
	?>
	
		<header>
			<h1>bank.com</h1>
			<h2>פורטל הבנקים מס' 1 בעולם</h2>
		</header>

		<section>

		<?php 
			foreach($array_of_banks as $bank){
		?>
			<div class="box">
				<img src="<?=$bank[img]?>"/>
				<h3><?=$bank[name]?></h3>
				<h5><?=$bank[address]?></h5>
				<a href="tel:<?=$bank[phone]?>"><?=$bank[phone]?></a>
			</div>
		<?php
			}
		?>


		</section>
		

		<footer>
			<span>בניה ופיתוח: נפתלי שטיין</span>
		</footer>
		
	
	</body>
	
</html>