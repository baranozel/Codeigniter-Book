<?php $this->load->view("kitap_v/head"); ?>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Loader to display before content Load-->
  <div class="loading">

    <!-- <img src="img/loader.gif" alt=""> -->

    <div class="windows8 loading-position">
      <div class="wBall" id="wBall_1">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_2">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_3">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_4">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_5">
        <div class="wInnerBall"></div>
      </div>
    </div>
  </div> 


<section class="page-header services-header" data-parallax="scroll" data-image-src="images/header/blog-folding-img.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">Our Blogs. <br> We Ensure Quality Design.</h1>
      </div>
    </div>
  </div>
</section>

 <!-- Navigation -section
  =========================-->
<nav class="navbar navbar-fixed-top navigation" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="index.html">
        <img src="images/logo-yellow.png" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="services.html">Service</a></li>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

  
  <!-- Blog Sections 
  =========================-->
  <section class="blog">
    <div class="container">
      <div class="row">
        <div class="title text-center">
          <h2>Our Blog</h2>
        </div>
        <div class="col-md-9">
          <!-- Blog Left Sections 
          =========================-->


          <!-- See All Post -->
          <div class="col-md-12">
            <div class="see-all-post text-center">
              <a class="btn btn-default th-btn solid-btn" href="#" role="button">See All Posts <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <!-- Blog Right Sections 
          =========================-->
          	<div class="blog-sidbar">
		<div class="search widgets">
			<form class="form-inline">
			  <div class="form-group search-input">
			    <input type="text" class="form-control" placeholder="Search ...">
			  </div>
			  <button type="submit" class="btn btn-default tf-search-btn"><i class="tf-search"></i></button>
			</form>
		</div>
		<div class="categories widgets">
			<div class="list-group text-center">
				<div class="list-group-item active"> Blog Categories </div>
				<a href="#" class="list-group-item">Web Design</a>
				<a href="#" class="list-group-item">User Interface</a>
				<a href="#" class="list-group-item">User Experience</a>
				<a href="#" class="list-group-item">Typography</a>
				<a href="#" class="list-group-item">Color Sense</a>
				<a href="#" class="list-group-item">Future Trend</a>
				<a href="#" class="list-group-item">Modern Design</a>
			</div>
		</div>

	</div>
        </div>

      </div>
    </div>
  </section>

<?php $this->load->view("kitap_v/footer"); ?>