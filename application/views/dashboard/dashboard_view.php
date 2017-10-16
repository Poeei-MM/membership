<!DOCTYPE html>
<html>
  <head>
    <title>Membership Lists</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url() ?>public/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link rel="stylesheet" href="<?=base_url() ?>public/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1>Members Lists Of Our Team</h1>
	              </div>
	           </div>
	           <div class="col-md-6">
								<form action="<?=site_url()?>/Search" method="post" enctype="multipart/form-data">
										<div class="row">
											<div class="col-lg-12">
												<div class="form-group">
													<div class="input-group form">
															<input type="text" class="form-control" name="search" id="search" placeholder="Search...">
															<span class="input-group-btn">
																<button type="submit" name="submit" id="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></button>
															</span>
													</div>
												</div>
											</div>
										</div>
								</form>
	           </div>
	           <div class="col-md-1">
	              <div class="input-group form">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button"><i class="glyphicon glyphicon-off"></i> LogOut</button>
	                       </span>
	               </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?=site_url() ?>/Dashboard"><i class="glyphicon glyphicon-list"></i> List All</a></li>
                    <li><a href="<?=site_url() ?>/AddMember"><i class="glyphicon glyphicon-plus"></i> Add</a></li>
					<li><a href="tables.html"><i class="glyphicon glyphicon-info-sign"></i> About</a></li>
                </ul>
             </div>
		  </div>

		  
		  <div class="col-md-10">
			<div class="content">
				<div class="container-fluid">
					<div class="row">

						<?php foreach($data as $rows){
							$this->load->model('Member_model');
							?>

							<div class="page-content">
									<div class="col-md-6">
										<div class="row">
											<div class="col-md-12">
												<div class="content-box-header">
													<div class="panel-title"><?php echo $rows->member_name ?></div>
													
													<div class="panel-options">
														<div class="col-md-6">
														<a href="<?=site_url()?>/Editmember/?member_serial_no=<?php echo $rows->member_serial_no; ?>"><i class="glyphicon glyphicon-edit"></i></a>
														</div>
														<div class="col-md-6">
														<a href="<?=site_url()?>/Addmember/removeMember/?member_serial_no=<?php echo $rows->member_serial_no; ?>"><i class="glyphicon glyphicon-trash"></i></a>
														</div>
													</div>
												</div>
												<div class="content-box-large box-with-header">
													<p><?php echo $rows->member_address ?></p>
													<p><?php echo $rows->member_phonenumber ?></p>
													<p><?php echo $rows->member_email ?></p>
													<p><?php echo $rows->member_description ?></p>
												</div>
											</div>
										</div>
										
									</div>
		  					</div>
						<?php }?>  

					
					</div>
				</div>
			</div>
		  </div>
	    </div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>