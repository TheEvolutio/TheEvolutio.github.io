<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="Styleshit.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	</head>
	<body>
		<script>
			function Random(min, max) {
				
				return Math.floor(Math.random() * (max - min + 1)) + min;
			};
			
				requestAnimationFrame(function movePointer() {  
					var pointerElem = document.getElementById('pointer1');				
						pointerElem.style.left = Random(1000,1200) + 'px';
						pointerElem.style.top = Random(0,200) + 'px';					
				});
		</script>
		<div id="Game">
		
		<div class="boxevo" id="Vit"><img src="1433.png" id="Viti"></div>
		<div class="boxevo" id="Vit1"><img src="1433.png" id="Viti"></div>
		<div class="boxevo" id="Ter"><img src="1401.png" id="Teri"></div>
		<div class="boxevo" id="Map"><img src="1404.png" id="Mapi"></div>
		<div class="boxevo" id="Chat"><img src="1406.png" id="Chati"></div>
		
			<div class="boxevo"><img src="1429.png"></div>
			
		</div>
		
				<!-- <div class="space"></div>
				<div id="box1" class="box">1. Классика
					<img id="pointer1" class="box-pointer" src="data:image/gif;base64,R0lGODlhEAAQAMQAAORHHOVSKudfOulrSOp3WOyDZu6QdvCchPGolfO0o/XBs/fNwfjZ0frl3/zy7////wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAkAABAALAAAAAAQABAAAAVVICSOZGlCQAosJ6mu7fiyZeKqNKToQGDsM8hBADgUXoGAiqhSvp5QAnQKGIgUhwFUYLCVDFCrKUE1lBavAViFIDlTImbKC5Gm2hB0SlBCBMQiB0UjIQA7">
					<div class="ch"></div>
				</div>  -->
				
				
				
		<script src="ScriptsGame.js"></script>
	</body>
</html>