<!doctype html>
<html>
	<head>
		<title>Admin Page </title>
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
		
		<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
		
	</head>
	<body>
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-10">
				<h1>Tambah Pemain</h1>
				<div><?=validation_errors() ?></div>
				<?= form_open_multipart('admin/ply/create',['class'=>'form-horizontal']) ?>
					   
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="name" placeholder="" value="<?=set_value('judul')?>">
						</div>
					  </div>
					  
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
						<div class="col-sm-10">
						  <textarea class="form-control" name="description"  placeholder="" value="<?=set_value('deskripsi')?>"></textarea>
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">PPG</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="ppg" placeholder="" value="<?=set_value('ppg')?>">
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">APG</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="apg" placeholder="" value="<?=set_value('apg')?>">
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">RPG</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="rpg" placeholder="" value="<?=set_value('rpg')?>">
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">BPG</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="bpg" placeholder="" value="<?=set_value('bpg')?>">
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">SPG</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="spg" placeholder="" value="<?=set_value('spg')?>">
						</div>
					  </div>

					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Gambar</label>
						<div class="col-sm-10">
						  <input type="file" class="form-control" name="userfile">
						</div>
					  </div>
					  
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" class="btn btn-default">Save</button>
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