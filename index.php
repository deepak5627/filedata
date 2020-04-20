

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<title>Upload file </title>

		<script type="text/javascript">
			$(document).ready(function(){
				$('#upload').on('click', function() {
				    var file_data = $('#sortpicture').prop('files')[0];   
				    var form_data = new FormData();                  
				    form_data.append('file', file_data);
				                               
				    $.ajax({
				        url: 'load.php', // point to server-side PHP script 
				        dataType: 'text',  // what to expect back from the PHP script, if anything
				        cache: false,
				        contentType: false,
				        processData: false,
				        data: form_data,                         
				        type: 'post',
				        success: function(php_script_response){
				        	console.log("success");
				        	location.reload();
				        }
				     });
				});
			});	
			


		</script>
	</head>
	<body>
	
	
		<div class="container">
			<input id="sortpicture" type="file" name="sortpic" />
			<button id="upload">Upload</button>		
		</div>
	 
		
	</body>
</html
