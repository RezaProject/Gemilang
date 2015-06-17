<?php 
defined('BASEPATH') or exit("Access Denied");

 ?>
 <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><span>Gemilang</span>2</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li <?php if($let == "home"){echo "class=\"active\"";} ?>><a href="<?php echo base_url()?>index">Home</a></li>
                        <li <?php if($let == "blog"){echo "class=\"active\"";} ?>><a href="<?php echo base_url()?>blog">Blog</a></li>
                        <li <?php if($let == "contact"){echo "class=\"active\"";} ?>><a href="<?php echo base_url()?>contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>