<?php 
defined('BASEPATH') or exit("Access Denied");
 ?>
 <div class="row">
 	<div class="col-lg-12">
 		<?php echo form_open_multipart("adm/new_article"); ?>
 			<div class="form-group">
 				<label>Judul</label>
 				<input type="text" class="form-control" name="judul" placeholder="Judul Artikel"/>
 				<p class="help-block">Masukkan Judul Artikel</p>
 			</div>
 			<div class="form-group">
 				<label>Isi Artikel</label>
 				<textarea  id="wysihtml5" class="form-control" name="isi" placeholder="Isi Artikel" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
 			</div>
 			<div class="form-group">
 				<label>URL Artikel</label>
 				<?php echo base_url();?>blog/read/$Url<input class="form-control" name="uri" placeholder="Masukkan $Url disini">
 				<p class="help-block">Untuk pemisah kata tidak boleh menggunakan spasi gunakan tanda strip(-) untuk memisah setiap kata.Gunakan huruf kecil</p>
 				<p class="help-block">Contoh : lorem-ipsum</p>
 			</div>
 			<div class="form-group">
 				<label>Thumbnail</label>
 				<input type="file" name="file">
 				<p class="help-block">Upload Photo untuk thumbnail pada website</p>
 			</div>
 			<div class="form-group">
 				<input type="hidden" name="author" value="<?php echo $fullname ?>">
 				<input type="hidden" name="uri_us" value="<?php echo $username ?>">
 				<input type="submit" class="btn btn-default" name="submit" value="Submit">
 			</div>
 		<?php echo form_close();?>
 	</div>
 </div>