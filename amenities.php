<?php get_header(); 
	//Template Name: Amenities
?>

<div class="container-fluid" id='banner'>
	<img src="<?php bloginfo('template_directory');?>/images/faircrownsuites/room4.jpg" alt="" class="img-fluid">
	<div class="carousel-caption">
		
	<div class="card booking-bar shadow">
        <div class="card-body ">
          <form action="">
            <div class="form-row">
              <div class="form-group">
                <div class="input-group date" id="datetimepickerStart" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" placeholder='Check In' data-target="#datetimepickerStart"/>
                  <div class="input-group-append" data-target="#datetimepickerStart" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
                <!-- <label for="date-start">Check in</label>
                <input type="text" class='form-control' id='date-start' placeholder='mm/dd/yyyy'> -->
              </div>

              <div class="form-group ">
                <div class="input-group date" id="datetimepickerEnd" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" placeholder='Check Out'  data-target="#datetimepickerEnd"/>
                  <div class="input-group-append" data-target="#datetimepickerEnd" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
                <!-- <label for="date-start">Check out</label>
                <input type="text" class='form-control' id='date-start' placeholder='mm/dd/yyyy'> -->
              </div>

              <div class="form-group">
                <select class="custom-select" id="inputGroupSelect01">
                  <option selected>Guest...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="5">4</option>
                  <option value="5+">5+</option>
                </select>
              </div>

              <div class="form-group">
                <!-- <label for="date-start">Guest</label> -->
                <input type="text" class='form-control' id='date-start' placeholder='Have a promo code? Enter here!'>
              </div>
              <div class="form-group">
                <!-- <label for="date-start">Guest</label> -->
                <input type="button" class='form-control btn btn-primary' value='Check Availability'>
              </div>

            </div>
          </form>
        </div>
      </div>

	</div>
</div>

<div class="container-fluid padding rooms">
	<div class='row justify-content-center text-center'>
		<div class="col-12">
			<div class="welcome">
				<h4 > Our Rooms</h4>
			</div>
		</div>
		
		<div class="row padding align-items-center">
			<div class="col-md-6 col-lg-6 ">
				<img class='img-fluid' src="<?php bloginfo('template_directory');?>/images/faircrownsuites/room1.jpg" alt="">
			</div>
			<div class="col-md-6 col-lg-6 align-items-center">
				<div class='review text-left'>
				<h6>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						&nbsp; 80 Reviews
					</h6>
				</div>
				
				<h1 class='display-4'>
					Deluxe Family Room
				</h1>
				<p class='text-muted'> Start from </p>
				<h5 class='lead'>PHP 3,999.00/night</h5>
				<p class='lead'>
					Our luxurious rooms and suites are designed to fit every business and leisure traveler and 
					even local staycation. Fair Crown Suites is strategically located near shopping mall and tranport terminal
				</p>
				<div class='btn-details text-left'>
					<button class='btn btn-primary btn-outline-primary'> View Details <i class="fas fa-arrow-circle-right"></i></button>
				</div>
			</div>
		</div>

		<div class="row padding align-items-center">
			<div class="col-md-6 col-lg-6">
				<div class='review text-left'>
				<h6>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						&nbsp; 80 Reviews
					</h6>
				</div>

				<h1 class='display-4'>
					Premier Suite Room
				</h1>
				<div>
					<p class='text-muted'> Start from </p>
					<h5 class='lead'>PHP 2,999.00/night</h5>
				</div>
				<p class='lead'>
					Our luxurious rooms and suites are designed to fit every business and leisure traveler and 
					even local staycation. Fair Crown Suites is strategically located near shopping mall and tranport terminal
				</p>
				<div class='btn-details text-right'>
					<button class='btn btn-primary btn-outline-primary'> View Details <i class="fas fa-arrow-circle-right"></i></button>
				</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<img class='img-fluid' src="<?php bloginfo('template_directory');?>/images/faircrownsuites/room5.jpg" alt="">
			</div>
		</div>

		<div class="row padding align-items-center">
			<div class="col-md-6 col-lg-6">
				<img class='img-fluid' src="<?php bloginfo('template_directory');?>/images/faircrownsuites/room2.jpg" alt="">
			</div>
			<div class="col-md-6 col-lg-6">
				<div class='text-left'>
					<h6>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						<span class="float-left"><i class="text-warning fa fa-star"></i></span>
						&nbsp; 80 Reviews
					</h6>
				</div>
				<h1 class='display-4'>
					Double Deluxe Room
				</h1>
				<p class='text-muted'> Start from </p>
				<h5 class='lead'>PHP 3,999.00/night</h5>
				<p class='lead'>
					Our luxurious rooms and suites are designed to fit every business and leisure traveler and 
					even local staycation. Fair Crown Suites is strategically located near shopping mall and tranport terminal
				</p>
				<div class='btn-details text-left'>
					<button class='btn btn-primary btn-outline-primary'> View Details <i class="fas fa-arrow-circle-right"></i></button>
				</div>
			</div>
		</div>

		<div class="col-12">
			<button class='btn btn-primary btn-more-room'>More Rooms...</button>
		</div>
	</div>
</div>


<div class="container-fluid jumbotron padding">
	<div class="row function-rooms justify-content-center">
		<div class="col-12">
			<div class="welcome text-center">
				<h3 class="display-4">Function Rooms</h3>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<img src="<?php bloginfo('template_directory'); ?>/images/faircrownsuites/convention5.jpg" 
				alt="function-room1" class="img-fluid">
				<div class="carousel-caption">
					<h6>150 reviews</h6>
					<h1>Gold Hall</h1>
					<p>
						Our luxurious rooms and suites are designed to fit every business and leisure traveler and 
						even local staycation. Fair Crown Suites is strategically located near shopping mall and tranport terminal
					</p>
        </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<img src="<?php bloginfo('template_directory'); ?>/images/faircrownsuites/convention6.jpg" 
				alt="function-room2" 
				class="img-fluid">
				<div class="carousel-caption">
					<h6>150 reviews</h6>
					<h1>Silver Hall</h1>
					<p>
						Our luxurious rooms and suites are designed to fit every business and leisure traveler and 
						even local staycation. Fair Crown Suites is strategically located near shopping mall and tranport terminal
					</p>
        </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<img src="<?php bloginfo('template_directory'); ?>/images/faircrownsuites/convention4.jpg" 
			alt="function-room3" 
			class="img-fluid ">
			<div class="carousel-caption">
					<h6>150 reviews</h6>
					<h1>Corporare Hall</h1>
					<p>
						Our luxurious rooms and suites are designed to fit every business and leisure traveler and 
						even local staycation. Fair Crown Suites is strategically located near shopping mall and tranport terminal
					</p>
        </div>
		</div>
	</div>
</div>

<div class="container-fluid padding gallery ">
	<div class="row welcome justify-content-center ">
		<div class="col-12 text-center">
			<div class="welcome">
				<h1 class="display-4">Gallery</h1>
			</div>
		</div>
	</div>

	<div class="row justify-content-center">
		<div class="col-xs-12 col-ms-8 col-md-8 col-lg-8">
			<img src="<?php bloginfo('template_directory');?>/images/faircrownsuites/faircrownbuilding4.jpg" 
				alt="fair-crown-suites-building" 
				class="img-thumbnail">
				<div class="carousel-caption">
					<h1>Building</h1>
					<h6>12 photos</h6>
        </div>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			<img src="<?php bloginfo('template_directory');?>/images/faircrownsuites/food2.jpg" 
				alt="fair-crown-suites-building" 
				class="img-thumbnail">
				<div class="carousel-caption">
					<h1>Dishes</h1>
					<h6>20 photos</h6>
        </div>
		</div>
	</div>

	<div class="row justify-content-center">
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<img src="<?php bloginfo('template_directory');?>/images/faircrownsuites/view1.jpg" 
			alt="fair-crown-suites-building" 
			class="img-thumbnail">
			<div class="carousel-caption">
					<h1>Views</h1>
					<h6>10 photos</h6>
        </div>
	</div>
	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<img src="<?php bloginfo('template_directory');?>/images/faircrownsuites/opening.jpg" 
				alt="fair-crown-suites-building" 
				class="img-thumbnail">
				<div class="carousel-caption">
					<h1>Grand Opening</h1>
					<h6>40 photos</h6>
        </div>
		</div>
	</div>
	
</div>

<?php get_footer(); ?>