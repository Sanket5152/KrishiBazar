<!DOCTYPE html>
<html>
<head>

	<title>jQuery Zoom Demo</title>
	
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script src='jquery.zoom.js'></script>
	<script>
		$(document).ready(function(){
			$('#ex1').zoom();
			
		});
	</script>
</head>
<body>
	<span class='zoom' id='ex1'>
		<img src='daisy.jpg' width='555' height='320' alt='Daisy on the Ohoopee'/>
		<p>Hover</p>
	</span>	<span class='zoom' id='ex2'>
		<img src='daisy.jpg' width='555' height='320' alt='Daisy on the Ohoopee'/>
		<p>Hover</p>
	</span>	<span class='zoom' id='ex3'>
		<img src='daisy.jpg' width='555' height='320' alt='Daisy on the Ohoopee'/>
		<p>Hover</p>
	</span>	<span class='zoom' id='ex4'>
		<img src='daisy.jpg' width='555' height='320' alt='Daisy on the Ohoopee'/>
		<p>Hover</p>
	</span>
	
</body>
</html>
