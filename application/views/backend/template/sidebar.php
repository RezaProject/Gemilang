<?php defined('BASEPATH') or exit("Access Denied");
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
 if($let == "blog"){
 ?>
 <aside class="right-sidebar">
				<div class="widget">
					<form class="form-search">
						<input class="form-control" type="text" placeholder="Search..">
					</form>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="recent">
						<?php 
						if($sidebar == null){
						?>
						<li>
						<h6>Tidak ada konten tersedia</h6>
						</li>
						<?php
						}
						else {
						foreach($sidebar as $d){
						 ?>
						<li>
							<h6><a href="<?php echo base_url()."blog/read/".$d->uri?>"><?php echo $d->judul?></a></h6>
							<p>
								 <?php echo potong($d->isi,10)."..."; ?>
							</p>
						</li>
						<?php 
							}
							} 
						?>
					</ul>
				</div>
				</aside>
<?php 
}
 ?>