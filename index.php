<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS advanced animations</title>
	<style>
		.line {
			top: 50vh;
			left: 50vw;
			height: 1px;
			width: 40vw;
			position: relative;
			background-color: red;
			animation-name: spin_line;
			animation-duration: 1.891s;
			-webkit-animation-timing-function: linear;
			animation-iteration-count: infinite;
			-webkit-transform-origin: 0% 50%;
			transform-origin: 0% 50%;
			
		}

		@keyframes spin_line {
			from {
				transform:rotate(0deg);
				-webkit-transform: rotateZ(0deg);


			}
			to {
				transform:rotate(360deg);
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
			animation-duration: 2s;
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

		.clone_circle {
			height: 15px;
			width: 15px;
			border-radius: 100%;
			position: absolute;
		}
		.running{
			background-color: red;
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
		var id_index = 0;
		var clone_interval = null;
		$('button').click(function(){
			$(this).toggleClass('running');
			if(clone_interval==null){
				clone_interval = setInterval(do_stuff,15);

			}
			else
			{
				clearInterval(clone_interval);
				clone_interval = null;
			}

		});
		function do_stuff(){
			id_index++;
			console.log(id_index);
			var r = Math.round(Math.random()*(255 - 0));
			var b = Math.round(Math.random()*(255 - 0));
			var g = Math.round(Math.random()*(255 - 0));
			//console.log("rgb(",r,",",b,",",g,")");
			var random_color = "rgb(" + r + "," + b + "," + g + ")";
	
			var click_position = $('.circle').offset();
			var clone_circle = $('<div>',{
				class: 'clone_circle',
				'id_index': id_index
			}).mouseover(function(){
				$(this).animate({'opacity':'0'},100,function(){
					$(this).remove();
				});
			});
			console.log(click_position.left);
			$('.circle').css('border', 'solid 3px ' + random_color);
			$('body').append(clone_circle);
			$("div[id_index='"+ id_index + "']").css('left', click_position.left + 'px');
			$("div[id_index='"+ id_index + "']").css('top' ,click_position.top + 'px');
			$("div[id_index='"+ id_index + "']").css('border', 'solid 3px ' + random_color);			
		}
	</script>
</body>
</html>
