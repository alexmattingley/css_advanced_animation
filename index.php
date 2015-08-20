<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS advanced animations</title>
	<style>
		div {
			margin: 50vw 20vw;
			height: 1px;
			width: 50vw;
			background-color: red;
			animation-name: spin;
			animation-duration: 4s;
			
		}
		@keyframes spin {
			from {
				transform:rotateZ(0deg);
				-webkit-transform: rotateZ(0deg);
			}
			to {
				transform:rotateZ(360deg);
				-webkit-transform: rotateZ(360deg);
			}
		}

	</style>
</head>
<body>
	<div></div>
</body>
</html>
