<style>
	div.pagination  
{  
    padding: 3px;  
    margin: 3px;  
}  
  
div.pagination a  
{  
    padding: 2px 5px 2px 5px;  
    margin: 2px;  
    border: 1px solid #AAAADD;  
    text-decoration: none; /* no underline */  
    color: #000099;  
}  
  
div.pagination a:hover, div.pagination a:active  
{  
    border: 1px solid #000099;  
    color: #000;  
}  
  
div.pagination span.current  
{  
    padding: 2px 5px 2px 5px;  
    margin: 2px;  
    border: 1px solid #000099;  
    font-weight: bold;  
    background-color: #993300;  
    color: #FFF;  
}  
div.pagination span.disabled  
{  
    padding: 2px 5px 2px 5px;  
    margin: 2px;  
    border: 1px solid #EEE;  
    color: #DDD;  
}
</style>
<?php 
if($isi == null || $isi == "aa"){
?>
<article>
	<div class="post-image">
		<div class="post-heading">
			<h3><a href="#"></a></h3>
		</div>
	</div>
	<?php 
		if($let == "contact"){
			
		}
		else{

	?>
			<p>Tidak ada Konten tersedia</p>
	<?php 
			}
	?>
</article>
<?php
}
if($let == "contact"){

}
else{
foreach($isi as $r){
?>
<article>
	<div class="post-image">
		<div class="post-heading">
			<h3><a href="#">
				<?php 
					if($title == 2){
						echo $r->fullname;
					}
					else{
						echo $r->judul ;
					}
				?>
			</a></h3>
		</div>
	</div>
	<p>
		<?php
			switch ($title) {
			 	case 2:
			 		$aaaa = $r->desc;
			 		break;
			 	
			 	default:
			 		$aaaa = $r->isi;
			 		break;
			 } 
			echo $aaaa;
		?>
	</p>
	<div class="bottom-article">
		<ul class="meta-post">
			<li><i class="icon-calendar"></i><a href="#"><?php echo $r->date ?></a></li>
			<li><i class="icon-user"></i><a href="<?php if($title != 2){echo base_url()."blog/users/".$r->author_uri;}else{echo "#";} ?>">
				<?php
					switch ($title) {
					 	case 2:
					 		$isssa = $r->fullname;
					 		break;
					 	
					 	default:
					 		$isssa=$r->author;
					 		break;
					 } 
					echo $isssa;
				?>
			</a></li>
		</ul>
		<?php 
			if($read == 0){
		 ?>
		<a href="<?php echo base_url();?>/blog/read/<?php $is = urlencode($r->uri); echo str_replace("+", "-", $is); ?>" class="pull-right">Baca Selengkapnya...</a>
		<?php 
			}
		 ?>
	</div>
</article>
<?php 
}
}
if($read == 99){
?>
 <div id="pagination">
	<span class="all">Page 1 of 3</span>
	<span class="current">1</span>
	<a href="#" class="inactive">2</a>
	<a href="#" class="inactive">3</a>
</div>
<?php 
}
else if($read == 0){
	echo  "<div class=\"pagination\">".$halaman."</div>";
}
?>