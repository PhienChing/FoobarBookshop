<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>



<!-- Log In Form -->
<div class="row">
  <div class="large-6 large-centered columns">
    <form method="post" action="index.php/login">
      <fieldset>
        <legend>Log In</legend>
        <div class="row">
          <div class="large-3 large-centered columns">
            <i class="fa fa-book fa-5x"></i>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label>Username <input type="text" name="username" id="username" placeholder="Username">
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label>Password <input type="password" name="password" id="password" placeholder="Password">
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-4 large-offset-4 columns">
            <a href="#" data-reveal-id="signUp" class="button expand success" data-reveal><i class="fa fa-pencil"></i> Sign Up</a>
          </div>
          <div class="large-4 columns ">
            <button type="submit" class="button expand"><i class="fa fa-sign-out"></i> Log In</button>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <li><a href="<?=$base_url;?>index.php?/customer">Customer</a></li>
            <li><a href="<?=$base_url;?>index.php?/productManager">Product Manager</a></li>
            <li><a href="<?=$base_url;?>index.php?/accountingManager">Accounting Manager</a></li>
            <li><a href="<?=$base_url;?>index.php?/administrator">Administrator</a></li>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>

<!-- Sign Up Form -->
<div id="signUp" class="reveal-modal" data-reveal>
  <form data-abide method="post">
    <div class="row">
      <div class="large-6 columns">
        <fieldset>
          <legend>User Credentials</legend>
          <div class="row">
            <div class="large-12 columns">
              <label>Username <input type="text" name="username" id="username" placeholder="Username" required>
              </label>
              <small class="error">Username is required and must be a string.</small>
            </div>
          </div>
          <div class="row">
            <div class="large-6 columns">
              <label>Password <input type="password" pattern="password" name="password" id="password" placeholder="Password" required>
              </label>
              <small class="error">Passwords must be at least 8 characters with 1 capital letter, 1 number, and one special character.</small>
            </div>
            <div class="large-6 columns">
              <label>Confirm Password <input type="password" pattern="password" data-equalto="password" name="confirm" id="confirm" placeholder="Confirm Password" required>
              </label>
              <small class="error">Passwords must match.</small>
            </div>
          </div>
        </fieldset>
      </div>
      <div class="large-6 columns">
        <fieldset>
          <legend>Personal Information</legend>
          <div class="row">
            <div class="large-4 columns">
              <label>First Name <input type="text" pattern="alpha" name="firstName" id="firstName" placeholder="First Name" required>
              </label>
              <small class="error">Name is required and must be a string.</small>
            </div>
            <div class="large-4 columns">
              <label>Middle Initial <input type="text" pattern="alpha" name="middleInitial" id="middleInitial" placeholder="Middle Initial" required>
              </label>
              <small class="error">Name is required and must be a string.</small>
            </div>
            <div class="large-4 columns">
              <label>Last Name <input type="text" pattern="alpha" name="lastName" id="lastName" placeholder="Last Name" required>
              </label>
              <small class="error">Name is required and must be a string.</small>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>E-mail Address <input type="text" pattern="email" name="emailAdd" id="emailAdd" placeholder="E-mail Address" required>
              </label>
              <small class="error">E-mail Address is required must be valid.</small>
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
              <label>House/Apartment No. <input type="text" name="houseAptNo" id="houseAptNo" placeholder="House/Apartment No." required>
              </label>
              <small class="error">Required.</small>
            </div>
            <div class="large-4 columns">
              <label>Street <input type="password" name="street" id="street" placeholder="Street" required>
              </label>
              <small class="error">Required.</small>
            </div>
            <div class="large-4 columns">
              <label>Subdivision <input type="text" name="subdivision" id="subdivision" placeholder="Subdivision" required>
              </label>
              <small class="error">Required.</small>
            </div>
          </div>
          <div class="row">
            <div class="large-4 columns">
              <label>City <input type="password" name="city" id="city" placeholder="City" required>
              </label>
              <small class="error">Required.</small>
            </div>
            <div class="large-4 columns">
              <label>Postal Code <input type="text" name="postalCode" id="postalCode" placeholder="Postal Code" required>
              </label>
              <small class="error">Required.</small>
            </div>
            <div class="large-4 columns">
              <label>Country <input type="password" name="country" id="country" placeholder="Country" required>
              </label>
              <small class="error">Required.</small>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="row">
      <div class="large-3 large-offset-9 columns">
        <button type="submit" class="button expand success"><i class="fa fa-pencil"></i> Sign Up</button>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>
