<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href= "<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<script src ="<?php echo base_url('assets/js/jquery-2.2.1.js'); ?>"></script>
	<script src ="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#office_dropdown').on('change', function(){
				var office_id = $('#office_dropdown').val();

				$('#user_dropdown > option').remove();

				$.ajax({
					type : 'POST',
					url : '<?php echo base_url('Login_controller/getUsersForOffice') ?>',
					data : { office_id : office_id },
					dataType : 'json',
					success : function(data){
	                    $(data).each(function(){
	                        $('#user_dropdown').append($('<option>', {
	                            value : this.id,
	                            text : this.name
	                        }));
	                    })
	                },
	                error : function(errorw) {
	                    alert('Error');
	                }
				});
			});

			$('#login_button').click(function(e){
				var office_id = $('#office_dropdown').val(),
					user_id = $('#user_dropdown').val(),
					password = $('#text_password').val();

				if(office_id == null){
					alert('Please select an office');
					return false;
				}
				else if($.trim(password) == ""){
					alert('Please input a valid password');
					$('#text_password').val("");
					return false;
				}
				else{
					return true;
				}
			});
		});
	</script>
</head>
<body>
	<div class="container">
		<h3>Login</h3>
		<form enctype="multipart/form-data" method="POST" action="<?php echo base_url('Login_controller/validateUser'); ?>" enctype="multipart/form-data">
			<div class="form-group">
				<label>
					Office
				</label>
				<select id="office_dropdown" name="office" class="form-control" type="dropdown">
					<option selected disabled>Please select an office</option>
					<?php
			            if(is_array($all_office) || is_object($all_office)){
			                foreach ($all_office as $office_names) {
			                    echo '<option value="' . $office_names->id . '">' . $office_names->office . '</option>';
			                }
			            }
			        ?>
				</select>
			</div>
			<div class="form-group">
				<label>
					User
				</label>
				<select id="user_dropdown" name="user" class="form-control" type="dropdown">
				</select>
			</div>
			<div class="form-group">
				<label>
					Password
				</label>
				<input id="text_password" name="password" class="form-control" type="password"/>
			</div>
			<div>
				<button id="login_button" type="submit" class="btn btn-primary" name="action">Login</button>
			</div>
		</form>
	</div>
</body>
</html>