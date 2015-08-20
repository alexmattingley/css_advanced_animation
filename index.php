<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS advanced animations</title>
	<style>
		.line {
			margin: 20vw;
			height: 1px;
			width: 50vw;
			position: relative;
			background-color: red;
			animation-name: spin_line;
			animation-duration: 4s;
			animation-iteration-count: infinite;
			
		}

		@keyframes spin_line {
			from {
				transform:rotateZ(0deg);
				-webkit-transform: rotateZ(0deg);
			}
			to {
				transform:rotateZ(360deg);
				-webkit-transform: rotateZ(360deg);
			}
		}

		.circle {
			height: 15px;
			width: 15px;
			border-radius: 100%;
			position: absolute;
			border: 3px solid black;
			animation-name: circle_move;
			animation-duration: 3s;
			animation-iteration-count: infinite;
		}

		@keyframes circle_move{
			0% {
				left: 0;
			}
			50% {
				left: 100%;
			}
			100% {
				left:0;
			}
		}
		

	</style>
</head>
<body>
	<button type="button">Random colors!</button>
	<div class="line">
		<div class="circle"></div>
	</div>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>
		$('button').click(function(){
			var r = Math.round(Math.random()*(255 - 0));
			var b = Math.round(Math.random()*(255 - 0));
			var g = Math.round(Math.random()*(255 - 0));
			//console.log("rgb(",r,",",b,",",g,")");
			var random_color = "rgb(" + r + "," + b + "," + g + ")";
			console.log(random_color);
			$('.circle').css('border', 'solid 1px ' + random_color);
			console.log($('.circle').position());
			var clone_circle = $('<div>',{
				class: 'clone_circle'
			}) 
		});
	</script>
</body>
</html>
