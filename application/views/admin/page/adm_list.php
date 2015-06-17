<?php 
defined("BASEPATH") or exit("Access Denied");
function potong($str,$limit=10)  
{  
	if(stripos($str," ")){        
		$ex_str = explode(" ",$str);  
		if(count($ex_str)>$limit){  
			$str_s ="";
			for($i=0;$i<$limit;$i++){  
				$str_s.=$ex_str[$i]." ";  
			}  
			return $str_s;  
		}else{  	
			return $str;  
		}  
	}else{  
		return $str;     
	}  
}  
?>
<div class="row">
	<div class="col-lg-12">
	<?php if($isi !=null){?>
		<table id="datatables">
			<thead>
				<tr>
					<th width="1%">No</th>
					<th>Full Name</th>
					<th>Username</th>
					<th>Date Created</th>
					<th>Permission</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
					foreach ($isi as $r) {
						$perm = "";
						switch ($r->permission) {
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
						if($perm != null){
				 ?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $r->fullname ?></td>
					<td><?php echo $r->username ?></td>
					<td><?php echo $r->date ?></td>
					<td><?php echo $perm ?></td>
					<td><?php echo $r->email ?></td>
				</tr>
				<?php 
					$no++;
						}
					}
				 ?>
			</tbody>
		</table>
	<?php }else{ echo "Tidak ada Artikel yang tersedia</br></br></br></br>";}?>
	</div>
</div>
