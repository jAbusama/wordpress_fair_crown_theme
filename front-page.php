<?php get_header(); 
	//Template Name:Front Page
?>

<div class='container-fluid' id='banner'>
	<img src="<?php bloginfo('template_directory');?>/images/faircrownsuites/room1.jpg" alt="" class="img-fluid">
	<div class="carousel-caption landing-caption">
		<h1 class='home-caption text-center'>
			Royal Home for business and leisure
		</h1>
	</div>
	<div class="carousel-caption booking-bar">
		<div class="card shadow">
        <div class="card-body ">
          <form action="">
            <div class="form-row">
              <div class="form-group col-2">
                <div class="input-group date" id="datetimepickerStart" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" placeholder='Check In' data-target="#datetimepickerStart"/>
                  <div class="input-group-append" data-target="#datetimepickerStart" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>  
              </div>

              <div class="form-group col-2">
                <div class="input-group date" id="datetimepickerEnd" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" placeholder='Check Out'  data-target="#datetimepickerEnd"/>
                  <div class="input-group-append" data-target="#datetimepickerEnd" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
              </div>

              <div class="form-group col-2">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Guest...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="5">4</option>
                  <option value="5+">5+</option>
                </select>
              </div>

              <div class="form-group col-3">
                <!-- <label for="date-start">Guest</label> -->
                <input type="text" class='form-control' id='date-start' placeholder='Have a promo code? Enter here!'>
              </div>
              <div class="form-group col-3">
                <!-- <label for="date-start">Guest</label> -->
                <input type="button" class='form-control btn btn-primary' value='Check Availability'>
              </div>

            </div>
          </form>
        </div>
      </div>
	</div>
</div>


<div class="container-fluid padding ">
	<div class='row litle-about justify-content-center text-center'>
		<div class="col-12">
			<div class="welcome">
				<h1> Litle About Us</h1>
			</div>
		</div>
		<div class="col-md-6 col-lg-6">
			<img class='img-fluid' src="<?php bloginfo('template_directory');?>/images/faircrownsuites/room2.jpg" width='500' alt="">
		</div>
		<div class="col-md-6 col-lg-6 d-flex align-items-center">
			<div class="litle-about-details">
				<h1 class='display-4'>
					A Place to enjoy your life
				</h1>
				<p class='text-justify'>
					Our luxurious rooms and suites are designed to fit every business and leisure traveler and 
					even local staycation. Fair Crown Suites is strategically located near shopping mall and tranport terminal
				</p>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid padding">
	<div class='row justify-content-center text-center'>	
		<div class="col-md-6 col-lg-6">
			<div class="welcome text-left">
				<h1>Discover Our Room</h1>
			</div>
			<h1 class='display-4'>
				A Place to enjoy your life
			</h1>
			
		</div>
		<div class="col-md-6 col-lg-6">
			<img class='img-fluid' src="<?php bloginfo('template_directory'); ?>/images/faircrownsuites/room3.jpg" width='500' alt="">
		</div>
	</div>
</div>

<div class="container-fluid jumbotron padding client-review">
	<div class="row">
		<div class="col-12">
			<p class='lead'>client Review</p>
			<div class="welcome">
				<h3 class="display-4">What Our Clients Say</h3>
			</div>
		</div>

		<div class="col-12">
			<div class='comment'>
				<p class="lead">
					Our luxurious rooms and suites are designed to fit every business and leisure traveler and 
					even local staycation. Fair Crown Suites is strategically located near shopping mall and tranport terminal
				</p>
			</div>
			<div class='pagination float-right'>
				<div class='page-item'>
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</div>
				<div class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid padding">
	<div class="row welcome justify-content-center">
		<div class="col-12 text-center">
			<div class="welcome">
				<h1 class="display-4">Promo Rates</h1>
			</div>
		</div>

		<div class="col-xs-12 col-md-6 col-lg-4">
			<div class="card shadow">
				<img src="<?php bloginfo('template_directory'); ?>/images/faircrownsuites/room4.jpg" alt="" class="card-img-top">
				
				<div class="card-body">
				<div class='promo-item-btn'><button class='btn btn-primary '>Promo</button></div>
				
				<h5 class="card-title">Intro Deluxe</h5>
    			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="card-footer"> 
					valid unlit January 30, 2020
				</div>
			</div>
		</div>
		
		<div class="col-xs-12 col-md-6 col-lg-4">
			<div class="card">
				<img src="<?php bloginfo('template_directory'); ?>/images/faircrownsuites/room4.jpg" alt="" class="card-img-top">
				<div class="card-body">
					<div class='promo-item-btn'><button class='btn btn-primary '>Promo</button></div>
					<h5 class="card-title">Stay Inlove</h5>
    			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="card-footer"> 
					valid unlit January 30, 2020
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-6 col-lg-4">
			<div class="card">
				<img src="<?php bloginfo('template_directory'); ?>/images/faircrownsuites/room4.jpg" alt="" class="card-img-top">
				<div class="card-body">
				<div class='promo-item-btn'><button class='btn btn-primary '>Promo</button></div>
				<h5 class="card-title">Debu Package</h5>
    			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="card-footer text-muted"> 
					valid unlit January 30, 2020
				</div>
			</div>
		</div>
		<div class="col-12 text-center btn-promo">
			<button class="btn btn-primary">More Promos</button>
		</div>
	</div>
</div>


<div class="container-fluid jumbotron">
	<div class="row">
		<div class="col-md-6">
			<h5>Information</h5>
			<h1 class="display-4">
				Contact Us
			</h1>
			<div>
				<h3>
					Matina, Davao City
				</h3>
			</div>

			<div>
				<h6>
					Champaca corner Aguho street, Juno Subdivision, Matina Davao City
				</h6>
			</div>

			<div>
				<h5>
					Call Directly:
				</h5>
				<h3>
					(082)-299-3673
				</h3>
			</div>
		</div>
		<div class="col-md-6 col-lg-6 text-center">
			<img class='img-thumbnail' src="<?php bloginfo('template_directory'); ?>/images/faircrownsuites/static_map.png" height='300' alt="">
		</div>
	</div>
</div>


<?php get_footer(); ?>