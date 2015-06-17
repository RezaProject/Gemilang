<?php 
defined("BASEPATH") or exit("Access Denied");
if($permission == 10){
?>
<div class="row">
	<div class="col-lg-12">
		<div class="form-group">
			<label>File Manager</label>
			<p class="help-block">Perhatian File yang ada di sini hanya boleh di akses oleh orang yang mengerti. Karena dapat menyebabkan kerusakan pada website</p>
		</div>
		<div class="form-group">
			<iframe width="100%" height="500pt" style="border:none" src="<?php echo base_url()?>/asset/elfinder/asskjdhaiuheqhdihakshdahisdhuiah8w29rhodnalkwhdkiqhoibakhdkjhkaiuwodndlajliwoduowehn.php"></iframe>
		</div>
	</div>
</div>
<?php 
}
else {
redirect(base_url()."/adm");
}
?>
