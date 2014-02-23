<?php
$base_url = $this->config->item('base_url'); 
$assets = $this->config->item('assets');
?>

<!-- Table -->
<br>
<div class="row">
	<div class="large-5 columns">
		<ul class="button-group round">
      <li><a href="#" class="tiny button success" data-reveal-id="addUser" data-reveal><i class="fa fa-plus"></i> Add User</a></li>
      <li><a href="#" class="tiny button" data-reveal-id="editUser" data-reveal><i class="fa fa-pencil"></i> Edit User</a></li>
      <li><a href="#" class="tiny button alert" data-reveal-id="deleteUser" data-reveal><i class="fa fa-times"></i> Delete User</a></li>
    </ul>
	</div>
</div>


<div class="row">
  <div class="large-12 columns">
    <table>
      <thead>
        <tr>
          <th width="100">User ID</th>          
          <th width="350">Name</th>
          <th width="200">Position</th>
          <th width="200">Status</th>
          <th width="200">Lock/Unlock</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>999</td>
          <td>Title</td>
          <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
          <td>$99.00</td>
          <td>
            <ul class="button-group round">
              <li><a href="#" class="tiny button success" data-reveal-id="addUser" data-reveal><i class="fa fa-lock"></i> Lock</a></li>
              <li><a href="#" class="tiny button alert" data-reveal-id="editUser" data-reveal><i class="fa fa-unlock"></i> Unlock</a></li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>999</td>
          <td>Title</td>
          <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
          <td>$99.00</td>
          <td>
            <ul class="button-group round">
              <li><a href="#" class="tiny button success" data-reveal-id="addUser" data-reveal><i class="fa fa-lock"></i> Lock</a></li>
              <li><a href="#" class="tiny button alert" data-reveal-id="editUser" data-reveal><i class="fa fa-unlock"></i> Unlock</a></li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>999</td>
          <td>Title</td>
          <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
          <td>$99.00</td>
          <td>
            <ul class="button-group round">
              <li><a href="#" class="tiny button success" data-reveal-id="addUser" data-reveal><i class="fa fa-lock"></i> Lock</a></li>
              <li><a href="#" class="tiny button alert" data-reveal-id="editUser" data-reveal><i class="fa fa-unlock"></i> Unlock</a></li>
            </ul>
          </td>
        </tr>
      </tbody>
    </table>
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
        <button type="submit" class="button expand"><i class="fa fa-pencil-square-o"></i> Edit Profile</button>
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

<!-- Add User -->
<div id="addUser" class="reveal-modal" data-reveal>
  <form method="post">
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
            <div class="large-6 columns">
              <label>E-mail Address <input type="text" name="emailAdd" id="emailAdd" placeholder="E-mail Address">
              </label>
            </div>
             <div class="large-6 columns">
              <label>Position <input type="text" name="position" id="position" placeholder="Position">
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
        <button type="submit" class="button expand success"><i class="fa fa-pencil"></i> Add User</button>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- Edit User -->
<div id="editUser" class="reveal-modal" data-reveal>
  <form method="post">
    <div class="row">
      <div class="large-4 columns">
        <label>Existing User
            <select name="userID" id="userID">
                <option value="Product Name">User ID + Name</option>
            </select>
          </label>
      </div>
    </div>
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
            <div class="large-6 columns">
              <label>E-mail Address <input type="text" name="emailAdd" id="emailAdd" placeholder="E-mail Address">
              </label>
            </div>
             <div class="large-6 columns">
              <label>Position <input type="text" name="position" id="position" placeholder="Position">
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
        <button type="submit" class="button expand"><i class="fa fa-pencil"></i> Edit User</button>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- Delete User -->
<div id="deleteUser" class="reveal-modal" data-reveal>
  <form>
    <div class="row">
      <div class="large-12 columns">
        <table>
		  <thead>
		    <tr>
			    <th width="100">User ID</th>		    	
		      <th width="400">Name</th>
		      <th width="250">Position</th>
		      <th width="250">Status</th>
		      <th width="50">Delete</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>999</td>
		      <td>Unknown</td>
		      <td>Administrator</td>
		      <td>Locked</td>
		      <td><input id="checkbox1" name="checkbox1" type="checkbox"></td>
		    </tr>
		    <tr>
		      <td>999</td>
          <td>Unknown</td>
          <td>Administrator</td>
          <td>Locked</td>
          <td><input id="checkbox1" name="checkbox2" type="checkbox"></td>
		    </tr>
		    <tr>
		      <td>999</td>
          <td>Unknown</td>
          <td>Administrator</td>
          <td>Locked</td>
          <td><input id="checkbox1" name="checkbox3" type="checkbox"></td>
		    </tr>
		  </tbody>
		</table>
      </div>
    </div>
    <div class="row">
      <div class="large-3 large-offset-9 columns">
        <button type="submit" class="button expand alert"><i class="fa fa-times"></i> Delete User</button>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>

<!-- Sign Up Form -->
<div id="signUp" class="reveal-modal" data-reveal>
  <form method="post">
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
        <button type="submit" class="button expand success"><i class="fa fa-pencil"></i> Sign Up</button>
      </div>
    </div>
  </form>
  <a class="close-reveal-modal">&#215;</a>
</div>