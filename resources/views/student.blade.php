<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<div class="container"> 
		<div class="row"> 
			<div class=col-md-12>
				<form action="" method="">
					<input type="text" name="namenv" id="nv_name">
					
					<input type="button" name="ok" id="btn_ok" value="OKIE">
				</form>
			</div>
 		</div>
 		
 		
	</div>
	
	
	<script type="text/javascript" src ="js/jquery.min.js"></script>
	<script type="text/javascript" src ="js/jquery.validate.min.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	
  	<script type="text/javascript">

  	$(document).on('click','#btn_ok',function() {
		var name = $('#nv_name').val();
		$.ajax({
			url: '/insertnv',
			dataType: 'text',
			type: 'get',
			data: {name:name},
			success: function(mess) {
				alert(mess);
			}
		});
  	});
  	$(document).ready(function(){
  		
	});
  	</script>
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>