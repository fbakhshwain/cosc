
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo url('home'); ?>">COSC</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					<li><a href="<?php echo url('/home'); ?>">Home</a></li>
					<li><a href="<?php echo url('/home/about'); ?>">About Me</a></li>
					<li><a href="#"  data-toggle="modal" data-target="#profileModal">Profile</a></li>
					<li><a href="<?php echo url('api'); ?>">API Docs</a></li>
					<li><a href="<?php echo url('/user/logout'); ?>">Logout</a></li>
					
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<div class="clearfix"></div>
	