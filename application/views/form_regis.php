<!doctype html>
<html>
	<?php $this->load->view('header/header')?>
	<body>

		
		
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1>REGISTRASI </h1>
				<div><?=validation_errors() ?></div>
				<?= form_open_multipart('regis/create',['class'=>'form-horizontal']) ?>
					   
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="username" placeholder="" value="<?=set_value('username')?>">
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="name" placeholder="" value="<?=set_value('name')?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Password </label>
						<div class="col-sm-10">
						  <input type="password" class="form-control" name="password" placeholder="" value="<?=set_value('password')?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Re-type Password</label>
						<div class="col-sm-10">
						  <input type="password" class="form-control" name="password1" placeholder="" value="<?=set_value('password1')?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="email" placeholder="" value="<?=set_value('email')?>">
						</div>
					  </div>

					  
					  
					  
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" class="btn btn-primary">Save</button>
						</div>
					  </div>
					
				<?= form_close() ?>
			</div>
			
			<div class="col-sm-1"></div>

		
		
		<script>
			$(document).ready(function(){
				$('#myTable').DataTable();
			});
		</script>
		
	</body>
</html>