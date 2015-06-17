<?php 
defined("BASEPATH") or exit("Access Denied");
switch ($permission) {
	case 1:
		$perm = "Demo";
		break;
	case 2:
		$perm = "Guest";
		break;
	case 3:
		$perm = "User";
		break;
	case 4:
		$perm = "Publisher";
		break;
	case 5:
		$perm = "Staff";
		break;
	case 6:
		$perm = "Admin";
		break;
	case 7:
		$perm = "Super Admin Staff";
		break;
	case 8:
		$perm = "Super Admin";
		break;
	case 9:
		$perm = "Web Helper";
		break;
	case 10:
		$perm = "Web Masters";
		break;
}
?>
<div class="row">
	<div class="col-lg-6">
		<?php echo form_open('adm/post_set');
		?>
			<div class="form-group">
				<label><?php echo "Nama Lengkap";?></label>
				<input type="text" class="form-control" name="nama" value="<?php echo $fullname;?>">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" id="disabledInput" name="username" value="<?php echo $username?>" disabled>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" value="<?php echo $email?>">
			</div>
			<div class="form-group">
				<label>URL Users</label>
				<input class="form-control" type="text" name="uri" value="<?php echo $uri; ?>">
				<p class="help-block"><?php echo base_url()?>blog/users/<b><?php echo $uri ?></b></p>
			</div>
			<div class="form-group">
				<label>About Me</label>
				<textarea class="form-control" name="desc" style="width: 100%; height: 200px;"><?php echo $desc;?></textarea>
			</div>
			<div class="form-group">
				<label>Permission</label>
				<input class="form-control" type="text" id="disabledInput" name="permission" value="<?php echo $perm;?>" disabled>
			</div>
			<div class="form-group">
				<label>Approve Account</label>
				<input class="form-control" name="referer" type="text" id="disabledInput" value="<?php echo $referer ?>" disabled>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-default" name="submit" value="Change Data">
			</div>
		<?php 
		echo form_close();
		 ?>
	</div>
	<div class="col-lg-6">
		<?php echo form_open('adm/pass_set');
		?>
			<div class="form-group">
				<label>Change Password</label>
				<input type="hidden">
			</div>
			<div class="form-group">
				<label>New Password</label>
				<input type="password" class="form-control" name="pass">
			</div>
			<div class="form-group">
				<label>New Passwword Again</label>
				<input type="text" class="form-control" name="pass2">
			</div>
			<div class="form-group">
				<label>If You Not Robot Input "yes" For Change Password</label>
				<input type="text" class="form-control" name="verification">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-default" name="submit" value="Change Password">
			</div>
		<?php echo form_close(); ?>
	</div>
</div>
