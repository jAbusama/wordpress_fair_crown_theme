<?php get_header(); 

/*
  Template Name: Booking Confirmation
*/
?>


<div class="container-fluid padding">
  <div class="row welcome text-center">
    <div class="col-12">
      <h1 class="display-4">
        Confirm Booking
      </h1>
    </div>
  </div>

  <!-- booking form -->
  <div class="row booking-form">
    <div class="col-6">
      <form action="">

        <div class="form-row">
          <div class="form-group col">
            <label for="firstname">Firstname</label>
            <input type="text" class='form-control' id='firstname' name='firstname' >
          </div>

          <div class="form-group col">
            <label for="lastname">Lastname</label>
            <input type="text" class='form-control' id='lastname' name='lastname' >
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col">
            <label for="email">Email Address</label>
            <input type="text" class='form-control' id='email' name='email' >
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col">
            <label for="mobile">Phone Number</label>
            <input type="text" class='form-control' id='mobile' name='mobile' >
          </div>

          <div class="form-group col">
            <label for="city">City</label>
            <input type="text" class='form-control' id='city' name='city' >
          </div>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="inlineCheckbox1">Booking for someone else?</label>
        </div>

        <div class="col-12 text-left">
          <div class="title">
            <h3>Paymennt Details</h3>
          </div>
        </div>
        
        <div class="form-group">
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="payAtHotel" value="option1">
                <label class="form-check-label" for="payAtHotel">Pay at the Hotel</label>
                
              </div>
              <small class='form-text text-muted'>Payment will be on Booking Site.</small>
            </div>
          </div>
        </div>

        <div class='form-group'>
          <div class="card">
            <div class="card-body">

              <div class="form-group">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="creditCard" value="option1">
                  <label class="form-check-label" for="creditCard">Credit Card</label>
                </div>
                <small class='form-text text-muted'>Safe money transfer using bank account Visa, Maetro, Discover, American Express.</small>
              </div>
            
              <div class="form-group"> 
                  <label for="cardNumber">CARD NUMBER</label>
                  <input type="text" class='form-control' id='cardNumber' name='cardNumber'>
              </div>
            
              <div class="form-row text-left ">
                <div class="for-group col-6"> 
                  <label for="cardNumber">NAME ON CARD</label>
                  <input type="text" class='form-control' id='cardName' name='cardName'>
                </div>

                <div class="form-group col-3"> 
                  <label for="cardNumber">EXPIRY DATE</label>
                  <input type="text" class='form-control' id='cardExpirationDate' name='cardExpirationDate'>
                </div>

                <div class="form-group col-3"> 
                  <label for="cardNumber">CCV CODE</label>
                  <input type="text" class='form-control' id='cardCCVCode' name='cardCCVCode'>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="card">
            <div class="card-body">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="payPal" value="option1">
                <label class="form-check-label" for="payPal">PayPal</label>
                
              </div>
              <small class='form-text text-muted'>You will be redirected to PayPal website to complete booking.</small>
            </div>
          </div>
        </div>

      </form>

    </div>


    <!-- room details -->

    <div class="col-lg-6">
      <div class="card">
        <img src="<?php bloginfo('template_directory'); ?>/images/faircrownsuites/room1.jpg" height='300' alt="" class="car-img-top">
        <div class="card-body">
          <h1 class="card-title">
            Deluxe Family Room
          </h1>

          <hr>

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

          <hr>

          <div class="booking-date">
            <div class="row">
              <h4 class='col-10'>12 Mar 2020 - 13 Mar 2020</h2>
              <h6 class='col-2 text-right'> 1 night</h6>
            </div>
            <div class="row">
              <h5 class='col-9'>1x Deluxe Family Room </h3>
              <a class='col-3 text-right' href="">Change</a>
            </div>
          </div>

          <hr>

          <div class="booking-amount">
            <div class="row">
              <h4 class='col-8'>Room Charges</h2>
              <h6 class='col-4 text-right'> PHP 3,999.00</h6>
            </div>
            <div class="row">
              <h4 class='col-8'>Reservation Charges</h2>
              <h6 class='col-4 text-right'> PHP 0.00</h6>
            </div>
          </div>

          <hr>

          <div class="row">
            <h3 class="col-8">Total Charges</h3>
            <h6 class='col-4 text-right'> PHP 3,999.00</h6>
          </div>

        </div>
      </div>

    </div>

  </div>
</div>



<?php get_footer(); ?>