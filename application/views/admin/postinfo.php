<!DOCTYPE html>
<html>
<head>
	<title>Post Berita</title>
</head>
<body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2>Edit Informasi</h2><hr/>
			<form action="<?php echo base_url().'kerjapraktek/updateinformasi' ?>" method="post" >
				<?php 
				foreach($user as $u){ 
					?>
					<input type="text" name="judul" class="form-control" placeholder="Judul berita" value="<?php echo $u->judul_berita?>" required/><br/>
					<textarea id="ckeditor" name="berita" class="form-control" required> <?php echo $u->isi_berita ?> </textarea><br/>
					<button class="btn btn-primary btn-lg" type="submit">Update informasi</button>
					<?php } ?>
				</form>
			</div>

		</div>
	</script>
</body>
</html>