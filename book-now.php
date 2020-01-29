<?php get_header(); 

  //Template Name: Book Now
?>	

<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">
        Book Now
      </h1>
    </div>

    <div class="col-12 ">
      <div class="card booking-bar shadow">
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
                <!-- <label for="date-start">Check in</label>
                <input type="text" class='form-control' id='date-start' placeholder='mm/dd/yyyy'> -->
              </div>

              <div class="form-group col-2">
                <div class="input-group date" id="datetimepickerEnd" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" placeholder='Check Out'  data-target="#datetimepickerEnd"/>
                  <div class="input-group-append" data-target="#datetimepickerEnd" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
                <!-- <label for="date-start">Check out</label>
                <input type="text" class='form-control' id='date-start' placeholder='mm/dd/yyyy'> -->
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
</div>


<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">
        Rooms available for you
      </h1>
    </div>
   
  </div>
  <div class="form-row filter">
    <div class='col-12'>
      <h6>Filter room option by:</h6>
    </div>

    <div class="input-group">
      <div class="input-group-text">
        <input id='non-smoking' type="checkbox" aria-label="Checkbox for following text input">
        <label for="non-smoking"> <i class="fas fa-smoking-ban"></i> Non-Smoking (2)</label>
      </div>
    </div>

    <div class="input-group">
      <div class="input-group-text">
        <input id='non-smoking' type="checkbox" aria-label="Checkbox for following text input">
        <label for="non-smoking"> <i class="fas fa-coffee"></i> Free Breakfast (2)</label>
      </div>
    </div>

    <div class="input-group">
      <div class="input-group-text">
        <input id='non-smoking' type="checkbox" aria-label="Checkbox for following text input">
        <label for="non-smoking"> <i class="far fa-credit-card"></i> Pay Later Option (2)</label>
      </div>
    </div>

    <div class="input-group">
      <div class="input-group-text">
        <input id='non-smoking' type="checkbox" aria-label="Checkbox for following text input">
        <label for="non-smoking"> <i class="fas fa-smoking-ban"></i> Free Cancellation (2)</label>
      </div>
    </div>

  </div>


  <div class="results">
    <div class="col-12 box shadow">
      <div class="row">
        <div class="col-4">
          <img src="<?php bloginfo('template_directory');?>/images/faircrownsuites/room1.jpg" alt="" class="img-fluid">
        </div>

        <div class="col-5">
          <div class="box-title">
            <h3 class="display-4">Deluxe Family Room</h3>
          </div>

          <div class='text-left star-rating'>
            <div class="rating">
              8.9 Excellent
            </div>
            <h6 class='star'>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              &nbsp; 80 Reviews
            </h6>
          </div>
          <div class="freebies">
            <div>
              <span class='text-muted'> <i class="far fa-credit-card"></i> Pay at the hotel</span>
              <span class='text-muted'> <i class="fas fa-warehouse"></i> Up to 2 Max</span>
            </div>
            <div>
              <span class='text-muted'> <i class="fas fa-wifi"></i> free wifi</span>
              <span class='text-muted'> <i class="fas fa-coffee"></i> Free breakfast</span>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="text-right">
            <h3>PHP 3,999.00/night</h3>
            <h5>70% off Today</h5>

            <div class="form-group text-right">
              (3 left)
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Rooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="5">4</option>
                <option value="5+">5+</option>
              </select>
            </div>
            <div class="book">
              <a href="booking-confirmation">
              <button class="btn btn-primary">
                Book Now
              </button>
              </a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 box shadow">
      <div class="row">
        <div class="col-4">
          <img src="<?php bloginfo('template_directory');?>/images/faircrownsuites/room5.jpg" alt="" class="img-fluid">
        </div>

        <div class="col-5">
          <div class="box-title">
            <h3 class="display-4">Premier Suite Room</h3>
          </div>

          <div class='text-left star-rating'>
            <div class="rating">
              9.7 Excellent
            </div>
            <h6 class='star'>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              &nbsp; 80 Reviews
            </h6>
          </div>
          <div class="freebies">
            <div>
              <span class='text-muted'> <i class="far fa-credit-card"></i> Pay at the hotel</span>
              <span class='text-muted'> <i class="fas fa-warehouse"></i> Up to 2 Max</span>
            </div>
            <div>
              <span class='text-muted'> <i class="fas fa-wifi"></i> free wifi</span>
              <span class='text-muted'> <i class="fas fa-coffee"></i> Free breakfast</span>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="text-right">
            <h3>PHP 2,999.00/night</h3>
            <!-- <h5>70% off Today</h5> -->

            <div class="form-group text-right">
              <!-- (3 left) -->
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Rooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="5">4</option>
                <option value="5+">5+</option>
              </select>
            </div>
            <div class="book">
              <button class="btn btn-secondary">
                Sold Out
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- ads -->
    <div class="col-12 box shadow">
      <div class="row">
        <div class="col-12">
          <div class="book-adds">
            <img src="<?php bloginfo('template_directory');?>/images/faircrownsuites/static_map.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- end ads -->
    
    <div class="col-12 box shadow">
      <div class="row">
        <div class="col-4">
          <img src="<?php bloginfo('template_directory');?>/images/faircrownsuites/room2.jpg" alt="" class="img-fluid">
        </div>

        <div class="col-5">
          <div class="box-title">
            <h3 class="display-4">Deluxe Double Room</h3>
          </div>

          <div class='text-left star-rating'>
            <div class="rating">
              9.7 Excellent
            </div>
            <h6 class='star'>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              &nbsp; 80 Reviews
            </h6>
          </div>
          <div class="freebies">
            <div>
              <span class='text-muted'> <i class="far fa-credit-card"></i> Pay at the hotel</span>
              <span class='text-muted'> <i class="fas fa-warehouse"></i> Up to 2 Max</span>
            </div>
            <div>
              <span class='text-muted'> <i class="fas fa-wifi"></i> free wifi</span>
              <span class='text-muted'> <i class="fas fa-coffee"></i> Free breakfast</span>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="text-right">
            <h3>PHP 2,999.00/night</h3>
            <!-- <h5>70% off Today</h5> -->

            <div class="form-group text-right">
              <!-- (3 left) -->
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Rooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="5">4</option>
                <option value="5+">5+</option>
              </select>
            </div>
            <div class="book">
              <button class="btn btn-secondary">
                Sold Out
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- results -->

    <div class="col-12 box shadow">
      <div class="row">
        <div class="col-4">
          <img src="<?php bloginfo('template_directory');?>/images/faircrownsuites/room5.jpg" alt="" class="img-fluid">
        </div>

        <div class="col-5">
          <div class="box-title">
            <h3 class="display-4">Premier Suite Room</h3>
          </div>

          <div class='text-left star-rating'>
            <div class="rating">
              9.7 Excellent
            </div>
            <h6 class='star'>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              <span class=""><i class="text-warning fa fa-star"></i></span>
              &nbsp; 80 Reviews
            </h6>
          </div>
          <div class="freebies">
            <div>
              <span class='text-muted'> <i class="far fa-credit-card"></i> Pay at the hotel</span>
              <span class='text-muted'> <i class="fas fa-warehouse"></i> Up to 2 Max</span>
            </div>
            <div>
              <span class='text-muted'> <i class="fas fa-wifi"></i> free wifi</span>
              <span class='text-muted'> <i class="fas fa-coffee"></i> Free breakfast</span>
            </div>
          </div>
        </div>

        <div class="col-3">
          <div class="text-right">
            <h3>PHP 2,999.00/night</h3>
            <!-- <h5>70% off Today</h5> -->

            <div class="form-group text-right">
              <!-- (3 left) -->
              <select class="custom-select" id="inputGroupSelect01">
                <option selected>Rooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="5">4</option>
                <option value="5+">5+</option>
              </select>
            </div>
            <div class="book">
              <button class="btn btn-secondary">
                Sold Out
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end result -->

  </div>
</div>

<!-- end Results -->

<!-- related ROom -->

<div class="containter-fluid padding related-rooms">
  <div class="row">
    <div class="col-12 welcome text-center">
      <h1 class='display-4'>
        Related Rooms
      </h1>
    </div>
  </div>
  <div class="row text-center">
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			<img src="<?php bloginfo('template_directory'); ?>/images/faircrownsuites/convention5.jpg" 
				alt="function-room1" class="img-fluid">
				<div class="carousel-caption">
					<h6>
            <span class=""><i class="text-warning fa fa-star"></i></span>
            <span class=""><i class="text-warning fa fa-star"></i></span>
            <span class=""><i class="text-warning fa fa-star"></i></span>
            <span class=""><i class="text-warning fa fa-star"></i></span>
            <span class=""><i class="text-warning fa fa-star"></i></span>
            &nbsp;
            150 reviews
          </h6>
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
					<h6>
            <span class=""><i class="text-warning fa fa-star"></i></span>
            <span class=""><i class="text-warning fa fa-star"></i></span>
            <span class=""><i class="text-warning fa fa-star"></i></span>
            <span class=""><i class="text-warning fa fa-star"></i></span>
            <span class=""><i class="text-warning fa fa-star"></i></span>
            &nbsp;150 reviews
          </h6>
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
        <h6>
          <span class=""><i class="text-warning fa fa-star"></i></span>
          <span class=""><i class="text-warning fa fa-star"></i></span>
          <span class=""><i class="text-warning fa fa-star"></i></span>
          <span class=""><i class="text-warning fa fa-star"></i></span>
          <span class=""><i class="text-warning fa fa-star"></i></span>
          &nbsp;150 reviews
        </h6>
        <h1>Corporare Hall</h1>
        <p>
          Our luxurious rooms and suites are designed to fit every business and leisure traveler and 
          even local staycation. Fair Crown Suites is strategically located near shopping mall and tranport terminal
        </p>
      </div>
		</div>
  </div>
</div>



<?php get_footer(); ?>