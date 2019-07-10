<!DOCTYPE html>
<html lang="en">

<?php $assetslink =   'assets/blog'  ?>
  <!-- Head starts -->
  <?php include ("partials/blog/head.php") ?>
  <!-- Head ends -->
  
  <body>

     <!-- Navigation starts -->
     <?php include ("partials/blog/nav.php") ?>
     <!-- Navigation end -->
    
    <div id="colorlib-page">

       <!-- Logo starts -->
       <?php include ("partials/blog/logo.php") ?>
       <!-- Logo Ends -->

      <section class="ftco-fixed clearfix">
      	<div class="image js-fullheight float-left">
      		<div class="home-slider owl-carousel js-fullheight">
		        <div class="slider-item js-fullheight" style="background-image: url('<?php echo $assetslink ?>images/bg_1.jpg');">
		          <div class="overlay"></div>
		          <div class="container">
		            <div class="row slider-text align-items-end" data-scrollax-parent="true">
		              <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		              	<p class="breadcrumbs"><span><a href="index.html">Home</a></span> <span>ABOUT</span></p>
		                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">About Us</h1>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
      	</div><!-- end:image -->
      	<div class="page-container float-right">
      		<div class="row about-section">
      			<div class="col-md-6 ftco-animate">
      				<img src="<?php echo $assetslink ?>images/about.jpg" class="img-fluid" alt="">
      			</div>
      			<div class="col-md-6 ftco-animate">
      				<h2 class="mb-4">Libro is a Magazine website</h2>
      				<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
      			</div>
      			<div class="col-md-12 mt-5 ftco-animate">
      				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
      				<h3 class="mb-4 mt-5">Follow us here</h3>
      				<ul class="ftco-footer-social list-unstyled">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
      			</div>
      		</div>
      	</div><!-- end: page-container-->
      </section>
    	
		  <!-- loader -->
		  <div id="ftco-loader" class="show fullscreen">
		  	<svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
		  </div>

  	</div>


    <!-- Footer starts -->
    <?php include ("partials/blog/footer.php") ?>
      <!-- Footer Ends -->

  </body>
</html>