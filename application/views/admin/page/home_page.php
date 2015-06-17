<?php 
defined('BASEPATH') or exit("Access Denied");
foreach ($isi as $r) {
 ?>
 <div class="row">
 	<div class="col-lg-12">
 		<?php echo form_open("adm/post_article"); ?>
 			<div class="form-group">
 				<label>Judul</label>
 				<input type="text" class="form-control" name="judul" placeholder="Judul Artikel" value="<?php echo $r->judul ?>"/>
 				<p class="help-block">Masukkan Judul Pada Home Page</p>
 			</div>
 			<div class="form-group">
 				<label>Isi Home Page</label>
 				<textarea  id="wysihtml5" class="form-control" name="isi" placeholder="Isi Artikel" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $r->isi ?></textarea>
 			</div>
 			<div class="form-group">
 				<input type="hidden" name="author" value="<?php echo $fullname ?>">
 				<input type="submit" class="btn btn-default" name="submit" value="Submit">
 			</div>
 		<?php echo form_close();?>
 	</div>
 </div>
 <?php 
}
  ?>