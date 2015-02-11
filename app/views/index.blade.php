@include('includes.header')

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	
	<section class="hero" id="intro">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner">
					<div class="animatedParent">
						<h1 class="animated fadeInDown">Club Hub</h1>
						<p class="animated fadeInUp">A hub of all Community Center in Chittagong</p>
					</div>
			   </div>
              </div>
              <div class="row gap">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#about" class="btn btn-circle btn-scroll">
                  	<i class='fa fa-angle-double-down animated' id='down-arrow'></i>
                  </a>
                </div>
              </div>
              <div class="row gap">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="{{ URL::to('/search') }}" class="btn btn-find">
                  	FIND YOUR CLUB
                  </a>
                </div>
              </div>
            </div>
    </section>
	
	
    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">
                                                            <a href="index.html" class="brand">Bocor</a>
                                                    </div>
                                          </div>
                                          

                                          <div class="col-md-10">
                         
                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li class="active"><a href="#intro">Home</a></li>
                                                                  <li><a href="#about">About Us</a></li>
																   <li><a href="#service">Services</a></li>
                                                                  <li><a href="#works">Works</a></li>				                                                                  
                                                                  
                                                                  <li><a href="#contact">Contact</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                             
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div> 
    <!-- /Navigation -->  

	<!-- Section: about -->
    <section id="about" class="home-section color-dark">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center animated bounceInDown">
					<h2 class="h-bold">About our bocor team</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

		
        <div class="row">
		
		
            <div class="col-lg-8 col-lg-offset-2 animatedParent">		
				<div class="text-center">
					<p>
					Lorem ipsum dolor sit amet, vis tale malis tacimates et, graece doctus omnesque ne est, deserunt pertinacia ne nam. Pro eu simul affert referrentur, natum mutat erroribus te his
					</p>
					<p>
					Ne mundi fabulas corrumpit vim, nulla vivendum conceptam eu nam. Ius ex principes complectitur, ex quo duis suscipit. Ius fastidii reprimique no. Sadipscing appellantur pri ad. Oratio moderatius definitiones cum ex, mea ne brute vivendum percipitur. 
					</p>
					<a href="#service" class="btn btn-skin btn-scroll">What we do</a>
				</div>
            </div>
		

        </div>		
		</div>

	</section>
	<!-- /Section: about -->
	
	
	<!-- Section: services -->
    <section id="service" class="home-section color-dark bg-gray">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="section-heading text-center">
					<h2 class="h-bold">What we can do for you</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row animatedParent">
            <div class="col-xs-6 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-laptop fa-2x"></span> 
					</div>
					<div class="service-desc">						
						<h5>Web Design</h5>
						<div class="divider-header"></div>
						<p>
						Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
						</p>
						<a href="#" class="btn btn-skin">Learn more</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft slow">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-camera fa-2x"></span> 
					</div>
					<div class="service-desc">
						<h5>Photography</h5>
						<div class="divider-header"></div>
						<p>
						Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
						</p>
						<a href="#" class="btn btn-skin">Learn more</a>
					</div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-4 col-md-4">
				<div class="animated rotateInDownLeft slower">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-code fa-2x"></span> 
					</div>
					<div class="service-desc">
						<h5>Graphic design</h5>
						<div class="divider-header"></div>
						<p>
						Ad denique euripidis signiferumque vim, iusto admodum quo cu. No tritani neglegentur mediocritatem duo.
						</p>
						<a href="#" class="btn btn-skin">Learn more</a>
					</div>
                </div>
				</div>
            </div>

        </div>		
		</div>
		</div>
	</section>
	<!-- /Section: services -->
	

	<!-- Section: works -->
    <section id="works" class="home-section color-dark text-center bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div>
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">What we have done</h2>
					<div class="divider-header"></div>
					</div>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container">

            <div class="row animatedParent">
                <div class="col-sm-12 col-md-12 col-lg-12" >

                    <div class="row gallery-item">
                        <div class="col-md-3 animated fadeInUp">
							<a href="img/works/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/1.jpg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp slow">
							<a href="img/works/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/2.jpg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp slower">
							<a href="img/works/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/3.jpg" class="img-responsive" alt="img">
							</a>
						</div>
						<div class="col-md-3 animated fadeInUp">
							<a href="img/works/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg">
								<img src="img/works/4.jpg" class="img-responsive" alt="img">
							</a>
						</div>
					</div>
	
                </div>
            </div>	
		</div>

	</section>
	<!-- /Section: works -->

	<!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-gray text-center">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center">
					<h2 class="h-bold animated bounceInDown">Get in touch with us</h2>
					<div class="divider-header"></div>
					</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="container">

			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
						<form id="contact-form">
						<div class="row marginbot-20">
							<div class="col-md-6 xs-marginbot-20">
								<input type="text" class="form-control input-lg" id="name" placeholder="Enter name" required="required" />
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control input-lg" id="email" placeholder="Enter email" required="required" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
										<input type="text" class="form-control input-lg" id="subject" placeholder="Subject" required="required" />
								</div>
								<div class="form-group">
									<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Message"></textarea>
								</div>						
								<button type="submit" class="btn btn-skin btn-lg btn-block" id="btnContactUs">
									Send Message</button>
							</div>
						</div>
						</form>
				</div>
			</div>	


		</div>
	</section>
	<!-- /Section: contact -->

@include('includes.footer')