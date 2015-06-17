<?php 
defined("BASEPATH") or exit("Access Denied");
if($permission >= 5){
	$ss = $permission -1;
	$das = array("Demo","Guest","User","Publisher","Staff","Admin","Super Admin Staff", "Super Admin", "Web Helper", "Web Masters");
?>
<div class="row">
	<div class="col-lg-6">
		<?php echo form_open("adm/ac_post") ?>
		<div class="form-group">
				<label><?php echo "Nama Lengkap";?></label>
				<input type="text" class="form-control" name="nama">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" id="disabledInput" name="username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" id="disabledInput" name="pass1">
			</div>
			<div class="form-group">
				<label>Password Again</label>
				<input type="password" class="form-control" id="disabledInput" name="pass2">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email">
			</div>
			<div class="form-group">
				<label>URL Users</label>
				<input class="form-control" type="text" name="uri">
				<p class="help-block"><?php echo base_url()?>blog/users/$URI</b></p>
			</div>
			<div class="form-group">
				<label>About Me</label>
				<textarea class="form-control" name="desc" style="width: 100%; height: 200px;"></textarea>
			</div>
			<div class="form-group">
				<label>Permission</label>
				<select class="form-control" name="permission">
					<?php 
					$no = 1;
						for($i = 0; $i<$ss; $i++){
					 ?>
                	<option value="<?php echo $no; ?>"><?php echo $das[$i] ?></option>
                	<?php 
                	$no ++;
                		}
                	 ?>
                 </select>
			</div>
			<div class="form-group">
				<label>Approve By </label>
				<input class="form-control" name="referer" type="text" id="disabledInput" value="<?php echo $username ?>" disabled>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-default" name="submit" value="Change Data">
			</div>
		<?php form_close();?>
	</div>
</div>
<?php 
}
 ?>