<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>TSC_2015</title>

		
	<?php wp_head(); ?>
	</head>

	<body>

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-custom" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand text-dark-dk text-lg" href="#">TSC</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav nav-left">
						<li>
							<a class="text-uppercase text-sm" href="#"><span>Staff Picks</span></a>
						</li>
						<li>
							<a class="text-uppercase text-sm" href="#"><span>Top Stories</span></a>
						</li>
						<li>
							<a class="text-uppercase text-sm" href="#"><span>Bookmarks</span></a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">

						<li class="search ">
							<form action="" class="search-form">
							    <div class="form-group has-feedback">
									<label for="search" class="sr-only">Search</label>
									<input type="text" class="form-control" name="search" id="search" placeholder="search">
							  		<i class="fa fa-search"></i>
								</div>
							</form>
						</li>

						<li class="m-r-sm">
							<a class="btn btn-mod" href="#">Write Story</a>
						</li>
						<li>
							<a class="btn btn-mod" href="#"  data-toggle="modal" data-target="#myModal">Sign in / Sign up</a>
						</li>

					</ul>
				</div>
				
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>

		<!-- Page Content -->
		<div class="container">

			<div class="row">

				<!-- Blog Entries Column -->
				<div class="col-md-6">
					<!-- First Blog Post -->
					<div id="post" class="post">
						<div class="media p-b-sm">
							<div class="media-left media-middle">
								<a href="#"> <img class="media-object img-circle" src="http://placehold.it/50x50" alt=""> </a>
							</div>
							<div class="media-body">
								<h5 class="media-heading m-t-sm text-xs text-green">MD. Rahaduzzaman</h5>
								<p class="text-muted">
									<i class="fa fa-clock-o"></i> Posted on June 10, 2015 at 10:00 PM
								</p>
							</div>
						</div>

						<img class="img-responsive" src="http://placehold.it/900x300" alt="">

						<h3 class=""><a class="text-dark-dk b-title" href="post.html">Time is going Tuff</a></h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.
						</p>
						<a class="btn bg-none text-green m-h-n" href="post.html">Continue reading <i class="fa fa-chevron-right"></i></a>
					</div>
					<hr>

					<!-- Second Blog Post -->
					<div id="post-1" class="post">
						<div class="media p-b-sm">
							<div class="media-left media-middle">
								<a href="#"> <img class=" media-object img-circle" src="http://placehold.it/50x50" alt=""> </a>
							</div>
							<div class="media-body">
								<h5 class="media-heading m-t-sm text-xs text-green">MD. Mazharul Islam</h5>
								<p class="text-muted">
									<i class="fa fa-clock-o"></i> Posted on June 10, 2015 at 10:00 PM
								</p>
							</div>
						</div>

						<img class="img-responsive" src="http://placehold.it/900x300" alt="">
						<hr>
						<h3 class=""><a class="text-dark-dk b-title" href="#">Fifa 14 Rocks</a></h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.
						</p>
						<a class="btn bg-none text-green m-h-n" href="">Continue reading <i class="fa fa-chevron-right"></i></a>
					</div>
					
					<!-- Second Blog Post -->
					<hr>
					<div id="post-1" class="post">
						<div class="media p-b-sm">
							<div class="media-left media-middle">
								<a href="#"> <img class=" media-object img-circle" src="http://placehold.it/50x50" alt=""> </a>
							</div>
							<div class="media-body">
								<h5 class="media-heading m-t-sm text-xs text-green">Taposhi</h5>
								<p class="text-muted">
									<i class="fa fa-clock-o"></i> Posted on June 10, 2015 at 10:00 PM
								</p>
							</div>
						</div>

						
						<h3 class=""><a class="text-dark-dk b-title" href="#">Taposhi's Project is Ongoing</a></h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.
						</p>
						<a class="btn bg-none text-green m-h-n" href="#">Continue reading <i class="fa fa-chevron-right"></i></a>
					</div>

					<!-- Pager -->
					<ul class="pager">
						<li class="previous">
							<a href="#">&larr; Older</a>
						</li>
						<li class="next">
							<a href="#">Newer &rarr;</a>
						</li>
					</ul>

				</div>

				<!-- Blog Sidebar Widgets Column -->
				<div class="col-md-4 col-md-offset-1">

					<!-- Blog Categories Well -->
					<div class="well tags">
						<div class="row">
							
							<div class="col-sm-12">
								<hr />
								<h6 class="text-uppercase text-xs" style="font-weight: 800">Featured Tag</h6>
								
								<div class="tag-item">
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">Love</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">Women In Tech</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">Music</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">Enterprenuership</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">On Demand</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">Love</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">Women In Tech</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">Music</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">Enterprenuership</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">On Demand</a></span>
                                    <span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">On Demand</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">Love</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">Women In Tech</a></span>
									<span class="m-2x"><a class="btn bg-white text-xs p-h-sm m-t-sm">Music</a></span>
								</div>
							</div>
							<!-- /.col-sm-6 -->
						</div>
						<!-- /.row -->
					</div>

					<!-- Side Widget Well -->
		
				</div>

			</div>
			<!-- /.row -->

			<hr>

			<!-- Footer -->
			<footer>
				<div class="row">
					<div class="col-lg-12 text-center">
						<p class="text-dark-dkr">
							Copyright &copy; blog | rahad - 2016
						</p>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
			</footer>
			<!-- Modal Content -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-md-8 col-md-offset-2">
			        		<div class="panel panel-login">
			        			<div class="panel-heading">
			        				<div class="row">
			        					<div class="col-xs-6">
			        						<a href="#" class="active" id="login-form-link">Login</a>
			        					</div>
			        					<div class="col-xs-6">
			        						<a href="#" id="register-form-link">Register</a>
			        					</div>
			        				</div>
			        				<hr>
			        			</div>
			        			<div class="panel-body">
			        				<div class="row">
			        					<div class="col-lg-12">
			        						<form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
			        							<div class="form-group">
			        								<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
			        							</div>
			        							<div class="form-group">
			        								<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
			        							</div>
			        							<div class="form-group text-center">
			        								<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
			        								<label for="remember"> Remember Me</label>
			        							</div>
			        							<div class="form-group">
			        								<div class="row">
			        									<div class="col-sm-6 col-sm-offset-3">
			        										<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
			        									</div>
			        								</div>
			        							</div>
			        							<div class="form-group">
			        								<div class="row">
			        									<div class="col-lg-12">
			        										<div class="text-center">
			        											<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
			        										</div>
			        									</div>
			        								</div>
			        							</div>
			        						</form>
			        						<form id="register-form" action="http://phpoll.com/register/process" method="post" role="form" style="display: none;">
			        							<div class="form-group">
			        								<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
			        							</div>
			        							<div class="form-group">
			        								<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
			        							</div>
			        							<div class="form-group">
			        								<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
			        							</div>
			        							<div class="form-group">
			        								<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
			        							</div>
			        							<div class="form-group">
			        								<div class="row">
			        									<div class="col-sm-6 col-sm-offset-3">
			        										<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
			        									</div>
			        								</div>
			        							</div>
			        						</form>
			        					</div>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
			        </div>
			      </div>
			    </div>
			  </div>

		</div>
		<!-- /.container -->


		<?php wp_footer(); ?>
	</body>

</html>
