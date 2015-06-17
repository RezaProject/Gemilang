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
function ganti($data){
	return str_replace(",","</br>",$data);
}
?>
<div class="row">
	<div class="col-lg-12">
	<?php if($isi !=null){?>
		<table id="datatables">
			<thead>
				<tr>
					<th width="1%">No</th>
					<th>Pangkalan</th>
					<th>Regu</th>
					<th>Peserta</th>
					<th>Date</th>
					<th>Bindamping</th>
					<th>Telp</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
					foreach ($isi as $r) {
				 ?>
				<tr>
					<td><?php echo $no ?></td>
					<td><?php echo $r->pangkalan ?></td>
					<td><?php echo ganti($r->regu) ?></td>
					<td><?php echo ganti($r->peserta) ?></td>
					<td><?php echo ganti($r->date) ?></td>
					<td><?php echo ganti($r->bindamping) ?></td>
					<td><?php echo $r->telp; ?></td>
					<td><a href="">Edit </a><a href="">Delete</a></td>
				</tr>
				<?php 
					}
				 ?>
			</tbody>
		</table>
	<?php }else{ echo "Tidak ada Page yang tersedia</br></br></br></br>";}?>
	</div>
</div>
