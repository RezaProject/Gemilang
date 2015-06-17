        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>adm/index">Gemilang2</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $fullname ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url();?>blog/users/<?php echo $username;?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>adm/account_settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url()?>adm/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url();?>adm/index"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#article"><i class="glyphicon glyphicon-list-alt"></i> Article <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="article" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>adm/new_article">New Article</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>adm/list_article">List Article</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#page"><i class="glyphicon glyphicon-file"></i> Page <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="page" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>adm/new_page">New Page </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>adm/list_page">List Page</a>
                            </li>
                            <?php 
                                if($permission >=4){
                             ?>
                            <li>
                                <a href="<?php echo base_url();?>adm/home_page">Home Page</a>
                            </li>
                            <?php
                                }
                                if($permission >=7){
                             ?>
                            <li>
                                <a href="<?php echo base_url();?>adm/about_page">About Page</a>
                            </li>
                            <?php 
                                }
                             ?>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>adm/peserta"><i class=" glyphicon glyphicon-th-list"></i> Register User</a>
                    </li>
                    <?php 
                        if($permission == 10){
                     ?>
                    <li>
                        <a href="<?php echo base_url()?>adm/manager"><i class="glyphicon glyphicon-cloud"></i> File Manager</a>
                    </li>
                    <?php 
                        }
                     ?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#account"><i class="glyphicon glyphicon-user"></i> Account <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="account" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>adm/account_settings"> Account Settings</a>
                            </li>
                            <?php 
                                if($permission >=5){
                             ?>
                            <li>
                                <a href="<?php echo base_url();?>adm/admin_list">Admin List</a>
                            </li>
                            <?php 
                                }
                             ?>
                            <?php 
                                if($permission >= 5){
                             ?>
                            <li>
                                <a href="<?php echo base_url();?>adm/create_admin">Create New Account</a>
                            </li>
                            <?php 
                                }
                             ?>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>