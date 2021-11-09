<?php 
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
?>

<html>
	<head>
		<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script>
			$(function() {
				$('#save').click(function() {
						var mysave = $('#editor').html();
						console.log(mysave);
						$('#text-area').val(mysave);
				});
			});
		</script>
		
	</head>
	<body>
		<div class="cont1">
			<h1> Texto de ejemplo </h1>
			<form action"" method="post">
				<div name="texto" id="editor">
					<p name="a">segundo texto de ejemplo</p>
				</div>
				<textarea name="text-area" id="text-area">
				</textarea>
				<input id="save" name="b" type='submit'>
			</form>
		</div>
		<script>
			ClassicEditor.create(document.querySelector('#editor'))
			.catch(error =>{
				console.log('Error');
			});
		</script>
	</body>
</html>