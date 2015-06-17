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
					<th>Judul</th>
					<th width="15%">Isi</th>
					<th>URL</th>
					<th>Author</th>
					<th>URI Author</th>
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
					<td><?php echo $r->judul ?></td>
					<td><?php echo potong($r->isi,10) ?></td>
					<td><?php echo $r->uri ?></td>
					<td><?php echo $r->author ?></td>
					<td><?php echo $r->author_uri ?></td>
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
