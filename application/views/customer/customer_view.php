<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>

<!-- Table -->
<br>
<div class="row">
	<div class="large-4 columns">
		<ul class="breadcrumbs">
		  <li><a href="#">Book</a></li>
		  <li><a href="#">Magazine</a></li>
		  <li><a href="#">Audio CD</a></li>
		  <li><a href="#">DVD</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="large-3 columns">
	 	<ul class="pricing-table">
  			<li class="title">Book Title</li>
  			<li class="price">$99.99</li>
  			<li class="description">Description</li>
  			<li class="bullet-item">Type</li>
  			<li class="cta-button"><a class="button" href="#"><i class="fa fa-shopping-cart"></i> Buy Now</a></li>
		</ul>
	</div>

	<div class="large-3 columns">
	 	<ul class="pricing-table">
  			<li class="title">Magazine Title</li>
  			<li class="price">$99.99</li>
  			<li class="description">Description</li>
  			<li class="bullet-item">Type</li>
  			<li class="cta-button"><a class="button" href="#"><i class="fa fa-shopping-cart"></i> Buy Now</a></li>
		</ul>
	</div>

	<div class="large-3 columns">
	 	<ul class="pricing-table">
  			<li class="title">Audio CD Title</li>
  			<li class="price">$99.99</li>
  			<li class="description">Description</li>
  			<li class="bullet-item">Type</li>
  			<li class="cta-button"><a class="button" href="#"><i class="fa fa-shopping-cart"></i> Buy Now</a></li>
		</ul>
	</div>

	<div class="large-3 columns">
	 	<ul class="pricing-table">
  			<li class="title">DVD Title</li>
  			<li class="price">$99.99</li>
  			<li class="description">Description</li>
  			<li class="bullet-item">Type</li>
  			<li class="cta-button"><a class="button" href="#"><i class="fa fa-shopping-cart"></i> Buy Now</a></li>
		</ul>
	</div>
</div>

<div class="row">
	<div class="large-3 columns">
	 	<ul class="pricing-table">
  			<li class="title">Book Title</li>
  			<li class="price">$99.99</li>
  			<li class="description">Description</li>
  			<li class="bullet-item">Type</li>
  			<li class="cta-button"><a class="button" href="#"><i class="fa fa-shopping-cart"></i> Buy Now</a></li>
		</ul>
	</div>

	<div class="large-3 columns">
	 	<ul class="pricing-table">
  			<li class="title">Magazine Title</li>
  			<li class="price">$99.99</li>
  			<li class="description">Description</li>
  			<li class="bullet-item">Type</li>
  			<li class="cta-button"><a class="button" href="#"><i class="fa fa-shopping-cart"></i> Buy Now</a></li>
		</ul>
	</div>

	<div class="large-3 columns">
	 	<ul class="pricing-table">
  			<li class="title">Audio CD Title</li>
  			<li class="price">$99.99</li>
  			<li class="description">Description</li>
  			<li class="bullet-item">Type</li>
  			<li class="cta-button"><a class="button" href="#"><i class="fa fa-shopping-cart"></i> Buy Now</a></li>
		</ul>
	</div>

	<div class="large-3 columns">
	 	<ul class="pricing-table">
  			<li class="title">DVD Title</li>
  			<li class="price">$99.99</li>
  			<li class="description">Description</li>
  			<li class="bullet-item">Type</li>
  			<li class="cta-button"><a class="button" href="#"><i class="fa fa-shopping-cart"></i> Buy Now</a></li>
		</ul>
	</div>
</div>


<!-- Edit Profile -->
<div id="editProfile" class="reveal-modal" data-reveal>
  <form>
    <div class="row">
      <div class="large-6 columns">
        <fieldset>
          <legend>User Credentials</legend>
          <div class="row">
            <div class="large-6 columns">
              <label>Username <input type="text" name="username" id="username" placeholder="Username">
              </label>
            </div>
            <div class="large-6 columns">
              <label>Password <input type="password" name="password" id="password" placeholder="Password">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>E-mail Address <input type="text" name="emailAdd" id="emailAdd" placeholder="E-mail Address">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
      <div class="large-6 columns">
        <fieldset>
          <legend>Personal Information</legend>
          <div class="row">
            <div class="large-4 columns">
              <label>First Name <input type="text" name="firstName" id="firstName" placeholder="First Name">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Middle Initial <input type="text" name="middleInitial" id="middleInitial" placeholder="Middle Initial">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Last Name <input type="text" name="lastName" id="lastName" placeholder="Last Name">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Birthday <input type="text" name="birthday" id="birthday" placeholder="Birthday (Temporary)">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <fieldset>
          <legend>Billing & Delivery Address</legend>
          <div class="row">
            <div class="large-4 columns">
              <label>House/Apartment No. <input type="text" name="houseAptNo" id="houseAptNo" placeholder="House/Apartment No.">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Street <input type="password" name="street" id="street" placeholder="Street">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Subdivision <input type="text" name="subdivision" id="subdivision" placeholder="Subdivision">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-4 columns">
              <label>City <input type="password" name="city" id="city" placeholder="City">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Postal Code <input type="text" name="postalCode" id="postalCode" placeholder="Postal Code">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Country <input type="password" name="country" id="country" placeholder="Country">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="large-3 large-offset-9 columns">
        <button type="submit" class="button expand success"><i class="fa fa-pencil-square-o"></i> Edit Profile</button>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- View Profile -->
<div id="viewProfile" class="reveal-modal" data-reveal>
  <form>
    <div class="row">
      <div class="large-6 columns">
        <fieldset>
          <legend>User Credentials</legend>
          <div class="row">
            <div class="large-6 columns">
              <label>Username <input type="text" name="username" id="username" placeholder="Username">
              </label>
            </div>
            <div class="large-6 columns">
              <label>Password <input type="password" name="password" id="password" placeholder="Password">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>E-mail Address <input type="text" name="emailAdd" id="emailAdd" placeholder="E-mail Address">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
      <div class="large-6 columns">
        <fieldset>
          <legend>Personal Information</legend>
          <div class="row">
            <div class="large-4 columns">
              <label>First Name <input type="text" name="firstName" id="firstName" placeholder="First Name">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Middle Initial <input type="text" name="middleInitial" id="middleInitial" placeholder="Middle Initial">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Last Name <input type="text" name="lastName" id="lastName" placeholder="Last Name">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Birthday <input type="text" name="birthday" id="birthday" placeholder="Birthday (Temporary)">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <fieldset>
          <legend>Billing & Delivery Address</legend>
          <div class="row">
            <div class="large-4 columns">
              <label>House/Apartment No. <input type="text" name="houseAptNo" id="houseAptNo" placeholder="House/Apartment No.">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Street <input type="password" name="street" id="street" placeholder="Street">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Subdivision <input type="text" name="subdivision" id="subdivision" placeholder="Subdivision">
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-4 columns">
              <label>City <input type="password" name="city" id="city" placeholder="City">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Postal Code <input type="text" name="postalCode" id="postalCode" placeholder="Postal Code">
              </label>
            </div>
            <div class="large-4 columns">
              <label>Country <input type="password" name="country" id="country" placeholder="Country">
              </label>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>